<?php //fc1c124dc9574540d3d45625393bf2bd
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Fortify\Tests\Models {

    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use Laravel\Fortify\Tests\Models\UserWithTwoFactor;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method UserWithTwoFactor|null getOrPut($key, \Closure $value)
     * @method UserWithTwoFactor|$this shift(int $count = 1)
     * @method UserWithTwoFactor|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserWithTwoFactor|$this pop(int $count = 1)
     * @method UserWithTwoFactor|null pull($key, \Closure $default = null)
     * @method UserWithTwoFactor|null last(callable|null $callback = null, \Closure $default = null)
     * @method UserWithTwoFactor|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method UserWithTwoFactor|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserWithTwoFactor|null get($key, \Closure $default = null)
     * @method UserWithTwoFactor|null first(callable|null $callback = null, \Closure $default = null)
     * @method UserWithTwoFactor|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserWithTwoFactor|null find($key, $default = null)
     * @method UserWithTwoFactor[] all()
     */
    class _IH_UserWithTwoFactor_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return UserWithTwoFactor[][]|Collection<_IH_UserWithTwoFactor_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_UserWithTwoFactor_QB whereId($value)
     * @method _IH_UserWithTwoFactor_QB whereName($value)
     * @method _IH_UserWithTwoFactor_QB whereEmail($value)
     * @method _IH_UserWithTwoFactor_QB whereEmailVerifiedAt($value)
     * @method _IH_UserWithTwoFactor_QB wherePassword($value)
     * @method _IH_UserWithTwoFactor_QB whereRememberToken($value)
     * @method _IH_UserWithTwoFactor_QB whereCurrentTeamId($value)
     * @method _IH_UserWithTwoFactor_QB whereProfilePhotoPath($value)
     * @method _IH_UserWithTwoFactor_QB whereCreatedAt($value)
     * @method _IH_UserWithTwoFactor_QB whereUpdatedAt($value)
     * @method _IH_UserWithTwoFactor_QB whereTwoFactorSecret($value)
     * @method _IH_UserWithTwoFactor_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_UserWithTwoFactor_QB whereTwoFactorConfirmedAt($value)
     * @method UserWithTwoFactor create(array $attributes = [])
     * @method UserWithTwoFactor createOrFirst(array $attributes = [], array $values = [])
     * @method UserWithTwoFactor createQuietly(array $attributes = [])
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] cursor()
     * @method UserWithTwoFactor[] eagerLoadRelations(array $models)
     * @method UserWithTwoFactor|null|_IH_UserWithTwoFactor_C|UserWithTwoFactor[] find($id, array|string $columns = ['*'])
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserWithTwoFactor|_IH_UserWithTwoFactor_C|UserWithTwoFactor[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method UserWithTwoFactor|_IH_UserWithTwoFactor_C|UserWithTwoFactor[] findOrFail($id, array|string $columns = ['*'])
     * @method UserWithTwoFactor|_IH_UserWithTwoFactor_C|UserWithTwoFactor[] findOrNew($id, array|string $columns = ['*'])
     * @method UserWithTwoFactor findSole($id, array|string $columns = ['*'])
     * @method UserWithTwoFactor first(array|string $columns = ['*'])
     * @method UserWithTwoFactor firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method UserWithTwoFactor firstOrCreate(array $attributes = [], array $values = [])
     * @method UserWithTwoFactor firstOrFail(array|string $columns = ['*'])
     * @method UserWithTwoFactor firstOrNew(array $attributes = [], array $values = [])
     * @method UserWithTwoFactor firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserWithTwoFactor forceCreate(array $attributes)
     * @method UserWithTwoFactor forceCreateQuietly(array $attributes = [])
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] get(array|string $columns = ['*'])
     * @method UserWithTwoFactor getModel()
     * @method UserWithTwoFactor[] getModels(array|string $columns = ['*'])
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] hydrate(array $items)
     * @method UserWithTwoFactor incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] lazy(int $chunkSize = 1000)
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserWithTwoFactor_C|UserWithTwoFactor[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserWithTwoFactor make(array $attributes = [])
     * @method UserWithTwoFactor newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserWithTwoFactor[]|_IH_UserWithTwoFactor_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|UserWithTwoFactor[]|_IH_UserWithTwoFactor_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserWithTwoFactor sole(array|string $columns = ['*'])
     * @method UserWithTwoFactor updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserWithTwoFactor_QB extends _BaseBuilder {}
}
