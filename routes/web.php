<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EntrepreneurshipController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\OtherArticleController;
use App\Http\Controllers\PublishedArticleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ThesisController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Inertia\Inertia;

Route::get('/test-error', function () {
    // Lanza un error para probar el manejo de errores
    abort(403);
})->name('test.error');

Route::get('/diagnostic-db', function () {
    try {
        DB::connection()->getPdo();

        $database = DB::connection()->getDatabaseName();
        $tablaSessionsExiste = Schema::hasTable('sessions');
        $registrosEnSessions = $tablaSessionsExiste ? DB::table('sessions')->count() : null;

        $env = [
            'APP_NAME' => config('app.name'),
            'APP_ENV' => config('app.env'),
            'APP_DEBUG' => config('app.debug'),
            'APP_URL' => config('app.url'),
        ];

        // Ejecuta migrate:status y captura la salida
        Artisan::call('migrate:status');
        $output = Artisan::output();

        // Verifica si hay migraciones pendientes buscando la palabra 'No'
        $migracionesPendientes = str_contains($output, 'No');

        return Inertia::render('Dashboard/DiagnosticoDB', [
            'conexion' => 'exitosa',
            'baseDeDatos' => $database,
            'tablaSessionsExiste' => $tablaSessionsExiste,
            'registrosEnSessions' => $registrosEnSessions,
            'variablesEnv' => $env,
            'migracionesPendientes' => $migracionesPendientes,
            'phpVersion' => phpversion(),
            'laravelVersion' => app()->version(),
        ]);

    } catch (\Exception $e) {
        return Inertia::render('Dashboard/DiagnosticDB', [
            'conexion' => 'fallida',
            'error' => $e->getMessage(),
        ]);
    }
})->name('diagnostic.db');

Route::middleware(['auth:sanctum', 'can:assign permissions'])->get('/clear-permission-cache', function () {
    Artisan::call('permission:cache-reset');
    Artisan::call('optimize:clear');

    return response()->json([
        'status' => 'success',
        'message' => 'Cache de permisos y optimización limpiados correctamente.'
    ]);
});

Route::get('/check-role', function (Request $request) {
    $user = auth()->user();

    $role = $request->query('role');
    $permission = $request->query('permission');

    $response = [
        'roles' => $user->getRoleNames(),
        'permissions' => $user->getAllPermissions()->pluck('name'),
    ];

    // Si se pasa el parámetro 'role', verifica si el usuario lo tiene
    if ($role) {
        $response['checking_role'] = $role;
        $response['has_role'] = $user->hasRole($role);
    }

    // Si se pasa el parámetro 'permission', verifica si el usuario lo tiene
    if ($permission) {
        $response['checking_permission'] = $permission;
        $response['has_permission'] = $user->can($permission);
    }

    return $response;
});

Route::get('/clear-cache', function () {
    try {
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('route:clear');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('config:cache');

        return 'DONE'; //Return anything
    } catch (Throwable $th) {
        //throw $th;
        return $th; //Return anything
    }
});


Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', fn() => Inertia::render('Home'))->name('home');
Route::get('/notices/{id}', fn($id) => Inertia::render('NoticeDetail', ['id' => $id]))->name('notices.detail');
Route::get('/about', fn() => Inertia::render('About'))->name('about');
Route::get('/projects', fn() => Inertia::render('Projects'))->name('projects');
Route::get('/articles', fn() => Inertia::render('Articles'))->name('articles');
Route::get('/services', fn() => Inertia::render('Services'))->name('services');
Route::get('/contact', fn() => Inertia::render('Contact'))->name('contact');


Route::get('/statistics', [AnalyticsController::class, 'index'])->name('statistics.admin');

Route::prefix('api')->group(function () {
    Route::get('/stats', [AnalyticsController::class, 'stats']);
    Route::get('/visitors', [AnalyticsController::class, 'visitors']);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->group(function () {
    //Asignaturas
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::resource('subjects', SubjectController::class);
    });

    //notices
    Route::get('notices/all', [NoticeController::class, 'all']);
    Route::middleware(['auth:sanctum', 'verified', 'can:view notices'])->group(function () {
        Route::resource('notices', NoticeController::class)->except(['update']);
        Route::post('notices/update/{id}', [NoticeController::class, 'update']);
    });

    //quien soy
    Route::get('about/all', [AboutController::class, 'all']);
    Route::middleware(['auth:sanctum', 'verified', 'can:view about'])->group(function () {
        Route::resource('about', AboutController::class)->except(['update']);
        Route::post('about/update/{id}', [AboutController::class, 'update']);
    });


    // Artículos
    Route::get('publishedArticle/all', [PublishedArticleController::class, 'all']);
    Route::get('othersArticle/all', [OtherArticleController::class, 'all']);
    Route::middleware(['auth:sanctum', 'verified', 'can:view articles'])->group(function () {
        Route::get('articles', fn() => Inertia::render('Dashboard/Articles/MainArticle'))->name('articles.admin');
        Route::resource('articles/published', PublishedArticleController::class)->except(['update']);
        Route::post('articles/published/update/{id}', [PublishedArticleController::class, 'update']);
        Route::resource('articles/others', OtherArticleController::class)->except(['update']);
        Route::post('articles/others/update/{id}', [OtherArticleController::class, 'update']);
    });

    // Proyectos y relacionados
    Route::get('entrepreneurship/all', [EntrepreneurshipController::class, 'all']);
    Route::get('software/all', [SoftwareController::class, 'all']);
    Route::get('business/all', [BusinessController::class, 'all']);
    Route::get('thesis/all', [ThesisController::class, 'all']);
    Route::get('jury/all', [JuryController::class, 'all']);
    Route::middleware(['auth:sanctum', 'verified', 'can:view project'])->group(function () {
        Route::get('project', fn() => Inertia::render('Dashboard/Projects/MainProjects'))->name('project.admin');
        Route::resources([
            'entrepreneurship' => EntrepreneurshipController::class,
            'software' => SoftwareController::class,
            'business' => BusinessController::class,
            'thesis' => ThesisController::class,
            'jury' => JuryController::class,
        ]);
    });

    //services
    Route::middleware(['auth:sanctum', 'verified', 'can:view services'])->group(function () {
        Route::get('services', fn() => Inertia::render('Dashboard/Services/Services'))->name('services.admin');
    });

    // API resources
    Route::resources([
        'roles' => RoleController::class,
        'students' => StudentController::class,
        'courses' => CourseController::class,
    ], ['middleware' => 'auth:api']);

    // Books
    Route::get('books', [BookController::class, 'index']);
    Route::prefix('book')->group(function () {
        Route::post('add', [BookController::class, 'store']);
        Route::get('edit/{id}', [BookController::class, 'edit']);
        Route::post('update/{id}', [BookController::class, 'update']);
        Route::delete('delete/{id}', [BookController::class, 'destroy']);
    });
});


Route::get('/storage-view/{folder?}', function ($folder = null) {
    $basePath = storage_path('app');
    $path = $folder ? $basePath . '/' . $folder : $basePath;

    if (!File::exists($path) || !File::isDirectory($path)) {
        abort(404, 'Directorio no encontrado');
    }

    $files = [];
    foreach (File::allFiles($path) as $file) {
        $files[] = [
            'name' => $file->getFilename(),
            'relative_path' => str_replace($basePath . '/', '', $file->getPathname()),
            'size' => $file->getSize(),
            'last_modified' => date('Y-m-d H:i:s', $file->getMTime()),
        ];
    }

    return response()->json([
        'folder' => $folder ?? '/',
        'files' => $files,
    ]);
});

Route::get('/storage-file/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path("app/{$folder}/{$filename}");

    if (!File::exists($path)) {
        abort(404, 'Archivo no encontrado');
    }

    $mimeType = File::mimeType($path);
    $file = File::get($path);

    return Response::make($file, 200)->header("Content-Type", $mimeType);
})->where(['folder' => '[a-zA-Z0-9_\-]+', 'filename' => '.+']);


Route::get('/storage/{folder}/{filename}', function ($folder, $filename) {
    try {
        $path = storage_path("app/{$folder}/{$filename}");

        //si no se encuentra lanzamos un error 404.
        if (!File::exists($path)) {
            abort(404, 'Archivo no encontrado');
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        return Response::make($file, 200)->header("Content-Type", $type);
    } catch (Throwable $th) {
        return $th->getMessage();
    }
});

Route::get('/src/{page?}/{folder?}/{sub?}/{filename}', function ($page = "null", $folder = "null", $sub = "null", $filename) {
    try {
        $path = '';
        if ($page == "null") {
            $path = base_path() . '/resources/img/' . $filename;
        } elseif ($folder == "null") {
            $path = base_path() . '/resources/img/' . $page . '/' . $filename;
        } elseif ($sub == "null") {
            $path = base_path() . '/resources/img/' . $page . '/' . $folder . '/' . $filename;
        } else {
            $path = base_path() . '/resources/img/' . $page . '/' . $folder . '/' . $sub . '/' . $filename;
            //$path = storage_path() . '/app/' . $folder . '/' . $filename;
        }
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    } catch (Throwable $th) {
        return $th->getMessage();
    }
});
