<?php //46961cc720ddc90ab742c3c14c104b68
/** @noinspection all */

namespace LaravelIdea\Helper\App\Integration\Database {

    use App\Integration\Database\Comment;
    use App\Integration\Database\Like;
    use App\Integration\Database\Post;
    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Comment|null getOrPut($key, \Closure $value)
     * @method Comment|$this shift(int $count = 1)
     * @method Comment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Comment|$this pop(int $count = 1)
     * @method Comment|null pull($key, \Closure $default = null)
     * @method Comment|null last(callable|null $callback = null, \Closure $default = null)
     * @method Comment|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Comment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Comment|null get($key, \Closure $default = null)
     * @method Comment|null first(callable|null $callback = null, \Closure $default = null)
     * @method Comment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Comment|null find($key, $default = null)
     * @method Comment[] all()
     */
    class _IH_Comment_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Comment[][]|Collection<_IH_Comment_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method Comment create(array $attributes = [])
     * @method Comment createOrFirst(array $attributes = [], array $values = [])
     * @method Comment createQuietly(array $attributes = [])
     * @method _IH_Comment_C|Comment[] cursor()
     * @method Comment[] eagerLoadRelations(array $models)
     * @method Comment|null|_IH_Comment_C|Comment[] find($id, array|string $columns = ['*'])
     * @method _IH_Comment_C|Comment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Comment|_IH_Comment_C|Comment[] findOrFail($id, array|string $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOrNew($id, array|string $columns = ['*'])
     * @method Comment findSole($id, array|string $columns = ['*'])
     * @method Comment first(array|string $columns = ['*'])
     * @method Comment firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Comment firstOrCreate(array $attributes = [], array $values = [])
     * @method Comment firstOrFail(array|string $columns = ['*'])
     * @method Comment firstOrNew(array $attributes = [], array $values = [])
     * @method Comment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Comment forceCreate(array $attributes)
     * @method Comment forceCreateQuietly(array $attributes = [])
     * @method _IH_Comment_C|Comment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Comment_C|Comment[] get(array|string $columns = ['*'])
     * @method Comment getModel()
     * @method Comment[] getModels(array|string $columns = ['*'])
     * @method _IH_Comment_C|Comment[] hydrate(array $items)
     * @method Comment incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Comment_C|Comment[] lazy(int $chunkSize = 1000)
     * @method _IH_Comment_C|Comment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Comment_C|Comment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Comment make(array $attributes = [])
     * @method Comment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Comment[]|_IH_Comment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|Comment[]|_IH_Comment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Comment sole(array|string $columns = ['*'])
     * @method Comment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Comment_QB extends _BaseBuilder {}

    /**
     * @method Like|null getOrPut($key, \Closure $value)
     * @method Like|$this shift(int $count = 1)
     * @method Like|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Like|$this pop(int $count = 1)
     * @method Like|null pull($key, \Closure $default = null)
     * @method Like|null last(callable|null $callback = null, \Closure $default = null)
     * @method Like|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Like|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Like|null get($key, \Closure $default = null)
     * @method Like|null first(callable|null $callback = null, \Closure $default = null)
     * @method Like|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Like|null find($key, $default = null)
     * @method Like[] all()
     */
    class _IH_Like_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Like[][]|Collection<_IH_Like_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method Like create(array $attributes = [])
     * @method Like createOrFirst(array $attributes = [], array $values = [])
     * @method Like createQuietly(array $attributes = [])
     * @method _IH_Like_C|Like[] cursor()
     * @method Like[] eagerLoadRelations(array $models)
     * @method Like|null|_IH_Like_C|Like[] find($id, array|string $columns = ['*'])
     * @method _IH_Like_C|Like[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Like|_IH_Like_C|Like[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Like|_IH_Like_C|Like[] findOrFail($id, array|string $columns = ['*'])
     * @method Like|_IH_Like_C|Like[] findOrNew($id, array|string $columns = ['*'])
     * @method Like findSole($id, array|string $columns = ['*'])
     * @method Like first(array|string $columns = ['*'])
     * @method Like firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Like firstOrCreate(array $attributes = [], array $values = [])
     * @method Like firstOrFail(array|string $columns = ['*'])
     * @method Like firstOrNew(array $attributes = [], array $values = [])
     * @method Like firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Like forceCreate(array $attributes)
     * @method Like forceCreateQuietly(array $attributes = [])
     * @method _IH_Like_C|Like[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Like_C|Like[] get(array|string $columns = ['*'])
     * @method Like getModel()
     * @method Like[] getModels(array|string $columns = ['*'])
     * @method _IH_Like_C|Like[] hydrate(array $items)
     * @method Like incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Like_C|Like[] lazy(int $chunkSize = 1000)
     * @method _IH_Like_C|Like[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Like_C|Like[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Like make(array $attributes = [])
     * @method Like newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Like[]|_IH_Like_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|Like[]|_IH_Like_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Like sole(array|string $columns = ['*'])
     * @method Like updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Like_QB extends _BaseBuilder {}

    /**
     * @method Post|null getOrPut($key, \Closure $value)
     * @method Post|$this shift(int $count = 1)
     * @method Post|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Post|$this pop(int $count = 1)
     * @method Post|null pull($key, \Closure $default = null)
     * @method Post|null last(callable|null $callback = null, \Closure $default = null)
     * @method Post|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Post|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Post|null get($key, \Closure $default = null)
     * @method Post|null first(callable|null $callback = null, \Closure $default = null)
     * @method Post|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Post|null find($key, $default = null)
     * @method Post[] all()
     */
    class _IH_Post_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Post[][]|Collection<_IH_Post_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method Post create(array $attributes = [])
     * @method Post createOrFirst(array $attributes = [], array $values = [])
     * @method Post createQuietly(array $attributes = [])
     * @method _IH_Post_C|Post[] cursor()
     * @method Post[] eagerLoadRelations(array $models)
     * @method Post|null|_IH_Post_C|Post[] find($id, array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Post|_IH_Post_C|Post[] findOrFail($id, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrNew($id, array|string $columns = ['*'])
     * @method Post findSole($id, array|string $columns = ['*'])
     * @method Post first(array|string $columns = ['*'])
     * @method Post firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Post firstOrCreate(array $attributes = [], array $values = [])
     * @method Post firstOrFail(array|string $columns = ['*'])
     * @method Post firstOrNew(array $attributes = [], array $values = [])
     * @method Post firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Post forceCreate(array $attributes)
     * @method Post forceCreateQuietly(array $attributes = [])
     * @method _IH_Post_C|Post[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Post_C|Post[] get(array|string $columns = ['*'])
     * @method Post getModel()
     * @method Post[] getModels(array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] hydrate(array $items)
     * @method Post incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Post_C|Post[] lazy(int $chunkSize = 1000)
     * @method _IH_Post_C|Post[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Post_C|Post[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Post make(array $attributes = [])
     * @method Post newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Post[]|_IH_Post_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|Post[]|_IH_Post_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Post sole(array|string $columns = ['*'])
     * @method Post updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Post_QB extends _BaseBuilder {}
}
