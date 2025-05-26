<?php //35b8a296c3f61062000181e5111225f4
/** @noinspection all */

namespace LaravelIdea\Helper\Foo\Bar {

    use Foo\Bar\EloquentModelNamespacedStub;
    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method EloquentModelNamespacedStub|null getOrPut($key, \Closure $value)
     * @method EloquentModelNamespacedStub|$this shift(int $count = 1)
     * @method EloquentModelNamespacedStub|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method EloquentModelNamespacedStub|$this pop(int $count = 1)
     * @method EloquentModelNamespacedStub|null pull($key, \Closure $default = null)
     * @method EloquentModelNamespacedStub|null last(callable|null $callback = null, \Closure $default = null)
     * @method EloquentModelNamespacedStub|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method EloquentModelNamespacedStub|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method EloquentModelNamespacedStub|null get($key, \Closure $default = null)
     * @method EloquentModelNamespacedStub|null first(callable|null $callback = null, \Closure $default = null)
     * @method EloquentModelNamespacedStub|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method EloquentModelNamespacedStub|null find($key, $default = null)
     * @method EloquentModelNamespacedStub[] all()
     */
    class _IH_EloquentModelNamespacedStub_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return EloquentModelNamespacedStub[][]|Collection<_IH_EloquentModelNamespacedStub_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method EloquentModelNamespacedStub create(array $attributes = [])
     * @method EloquentModelNamespacedStub createOrFirst(array $attributes = [], array $values = [])
     * @method EloquentModelNamespacedStub createQuietly(array $attributes = [])
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] cursor()
     * @method EloquentModelNamespacedStub[] eagerLoadRelations(array $models)
     * @method EloquentModelNamespacedStub|null|_IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] find($id, array|string $columns = ['*'])
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub|_IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method EloquentModelNamespacedStub|_IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] findOrFail($id, array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub|_IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] findOrNew($id, array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub findSole($id, array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub first(array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method EloquentModelNamespacedStub firstOrCreate(array $attributes = [], array $values = [])
     * @method EloquentModelNamespacedStub firstOrFail(array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub firstOrNew(array $attributes = [], array $values = [])
     * @method EloquentModelNamespacedStub firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method EloquentModelNamespacedStub forceCreate(array $attributes)
     * @method EloquentModelNamespacedStub forceCreateQuietly(array $attributes = [])
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] fromQuery(string $query, array $bindings = [])
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] get(array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub getModel()
     * @method EloquentModelNamespacedStub[] getModels(array|string $columns = ['*'])
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] hydrate(array $items)
     * @method EloquentModelNamespacedStub incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] lazy(int $chunkSize = 1000)
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_EloquentModelNamespacedStub_C|EloquentModelNamespacedStub[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method EloquentModelNamespacedStub make(array $attributes = [])
     * @method EloquentModelNamespacedStub newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|EloquentModelNamespacedStub[]|_IH_EloquentModelNamespacedStub_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|EloquentModelNamespacedStub[]|_IH_EloquentModelNamespacedStub_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method EloquentModelNamespacedStub sole(array|string $columns = ['*'])
     * @method EloquentModelNamespacedStub updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_EloquentModelNamespacedStub_QB extends _BaseBuilder {}
}
