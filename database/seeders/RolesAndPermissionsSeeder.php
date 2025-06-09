<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::where('name', 'admin')->first();
        $user = Role::where('name', 'user')->first();
        $student = Role::where('name', 'student')->first();

        $adminPermissions = [
            'edit articles', 'edit notices', 'view dashboard',
            'create rol', 'edit rol', 'view rol', 'destroy rol',
            'assign permissions', 'get permissions', 'assign roles',
            'remove roles', 'view permission', 'view user', 'view person',
            'edit person', 'destroy person', 'create person', 'view project',
            'view gallery', 'view services', 'view articles', 'view about'
        ];

        $userPermissions = [
            'view dashboard', 'view articles', 'view notices'
        ];

        $studentPermissions = [
            'view dashboard'
        ];

        $admin->syncPermissions($adminPermissions);
        $user->syncPermissions($userPermissions);
        $student->syncPermissions($studentPermissions);
    }
}

