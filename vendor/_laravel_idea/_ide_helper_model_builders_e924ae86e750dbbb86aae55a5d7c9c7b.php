<?php //c65c7dd14fb2fbf671b3771e1ea353d4
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Fortify\Tests {

    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use Laravel\Fortify\Tests\TestConfirmPasswordUser;
    use Laravel\Fortify\Tests\TestTwoFactorRecoveryCodeUser;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method TestConfirmPasswordUser|null getOrPut($key, \Closure $value)
     * @method TestConfirmPasswordUser|$this shift(int $count = 1)
     * @method TestConfirmPasswordUser|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TestConfirmPasswordUser|$this pop(int $count = 1)
     * @method TestConfirmPasswordUser|null pull($key, \Closure $default = null)
     * @method TestConfirmPasswordUser|null last(callable|null $callback = null, \Closure $default = null)
     * @method TestConfirmPasswordUser|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method TestConfirmPasswordUser|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TestConfirmPasswordUser|null get($key, \Closure $default = null)
     * @method TestConfirmPasswordUser|null first(callable|null $callback = null, \Closure $default = null)
     * @method TestConfirmPasswordUser|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TestConfirmPasswordUser|null find($key, $default = null)
     * @method TestConfirmPasswordUser[] all()
     */
    class _IH_TestConfirmPasswordUser_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return TestConfirmPasswordUser[][]|Collection<_IH_TestConfirmPasswordUser_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_TestConfirmPasswordUser_QB whereId($value)
     * @method _IH_TestConfirmPasswordUser_QB whereName($value)
     * @method _IH_TestConfirmPasswordUser_QB whereEmail($value)
     * @method _IH_TestConfirmPasswordUser_QB whereEmailVerifiedAt($value)
     * @method _IH_TestConfirmPasswordUser_QB wherePassword($value)
     * @method _IH_TestConfirmPasswordUser_QB whereRememberToken($value)
     * @method _IH_TestConfirmPasswordUser_QB whereCurrentTeamId($value)
     * @method _IH_TestConfirmPasswordUser_QB whereProfilePhotoPath($value)
     * @method _IH_TestConfirmPasswordUser_QB whereCreatedAt($value)
     * @method _IH_TestConfirmPasswordUser_QB whereUpdatedAt($value)
     * @method _IH_TestConfirmPasswordUser_QB whereTwoFactorSecret($value)
     * @method _IH_TestConfirmPasswordUser_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_TestConfirmPasswordUser_QB whereTwoFactorConfirmedAt($value)
     * @method TestConfirmPasswordUser create(array $attributes = [])
     * @method TestConfirmPasswordUser createOrFirst(array $attributes = [], array $values = [])
     * @method TestConfirmPasswordUser createQuietly(array $attributes = [])
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] cursor()
     * @method TestConfirmPasswordUser[] eagerLoadRelations(array $models)
     * @method TestConfirmPasswordUser|null|_IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] find($id, array|string $columns = ['*'])
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TestConfirmPasswordUser|_IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TestConfirmPasswordUser|_IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] findOrFail($id, array|string $columns = ['*'])
     * @method TestConfirmPasswordUser|_IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] findOrNew($id, array|string $columns = ['*'])
     * @method TestConfirmPasswordUser findSole($id, array|string $columns = ['*'])
     * @method TestConfirmPasswordUser first(array|string $columns = ['*'])
     * @method TestConfirmPasswordUser firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TestConfirmPasswordUser firstOrCreate(array $attributes = [], array $values = [])
     * @method TestConfirmPasswordUser firstOrFail(array|string $columns = ['*'])
     * @method TestConfirmPasswordUser firstOrNew(array $attributes = [], array $values = [])
     * @method TestConfirmPasswordUser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TestConfirmPasswordUser forceCreate(array $attributes)
     * @method TestConfirmPasswordUser forceCreateQuietly(array $attributes = [])
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] get(array|string $columns = ['*'])
     * @method TestConfirmPasswordUser getModel()
     * @method TestConfirmPasswordUser[] getModels(array|string $columns = ['*'])
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] hydrate(array $items)
     * @method TestConfirmPasswordUser incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] lazy(int $chunkSize = 1000)
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TestConfirmPasswordUser make(array $attributes = [])
     * @method TestConfirmPasswordUser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TestConfirmPasswordUser[]|_IH_TestConfirmPasswordUser_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|TestConfirmPasswordUser[]|_IH_TestConfirmPasswordUser_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TestConfirmPasswordUser sole(array|string $columns = ['*'])
     * @method TestConfirmPasswordUser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TestConfirmPasswordUser_QB extends _BaseBuilder {}

    /**
     * @method TestTwoFactorRecoveryCodeUser|null getOrPut($key, \Closure $value)
     * @method TestTwoFactorRecoveryCodeUser|$this shift(int $count = 1)
     * @method TestTwoFactorRecoveryCodeUser|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TestTwoFactorRecoveryCodeUser|$this pop(int $count = 1)
     * @method TestTwoFactorRecoveryCodeUser|null pull($key, \Closure $default = null)
     * @method TestTwoFactorRecoveryCodeUser|null last(callable|null $callback = null, \Closure $default = null)
     * @method TestTwoFactorRecoveryCodeUser|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method TestTwoFactorRecoveryCodeUser|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TestTwoFactorRecoveryCodeUser|null get($key, \Closure $default = null)
     * @method TestTwoFactorRecoveryCodeUser|null first(callable|null $callback = null, \Closure $default = null)
     * @method TestTwoFactorRecoveryCodeUser|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TestTwoFactorRecoveryCodeUser|null find($key, $default = null)
     * @method TestTwoFactorRecoveryCodeUser[] all()
     */
    class _IH_TestTwoFactorRecoveryCodeUser_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return TestTwoFactorRecoveryCodeUser[][]|Collection<_IH_TestTwoFactorRecoveryCodeUser_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereId($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereName($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereEmail($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereEmailVerifiedAt($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB wherePassword($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereRememberToken($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereCurrentTeamId($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereProfilePhotoPath($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereCreatedAt($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereUpdatedAt($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereTwoFactorSecret($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB whereTwoFactorConfirmedAt($value)
     * @method TestTwoFactorRecoveryCodeUser create(array $attributes = [])
     * @method TestTwoFactorRecoveryCodeUser createOrFirst(array $attributes = [], array $values = [])
     * @method TestTwoFactorRecoveryCodeUser createQuietly(array $attributes = [])
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] cursor()
     * @method TestTwoFactorRecoveryCodeUser[] eagerLoadRelations(array $models)
     * @method TestTwoFactorRecoveryCodeUser|null|_IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] find($id, array|string $columns = ['*'])
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser|_IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TestTwoFactorRecoveryCodeUser|_IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] findOrFail($id, array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser|_IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] findOrNew($id, array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser findSole($id, array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser first(array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TestTwoFactorRecoveryCodeUser firstOrCreate(array $attributes = [], array $values = [])
     * @method TestTwoFactorRecoveryCodeUser firstOrFail(array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser firstOrNew(array $attributes = [], array $values = [])
     * @method TestTwoFactorRecoveryCodeUser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TestTwoFactorRecoveryCodeUser forceCreate(array $attributes)
     * @method TestTwoFactorRecoveryCodeUser forceCreateQuietly(array $attributes = [])
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] get(array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser getModel()
     * @method TestTwoFactorRecoveryCodeUser[] getModels(array|string $columns = ['*'])
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] hydrate(array $items)
     * @method TestTwoFactorRecoveryCodeUser incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] lazy(int $chunkSize = 1000)
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TestTwoFactorRecoveryCodeUser make(array $attributes = [])
     * @method TestTwoFactorRecoveryCodeUser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TestTwoFactorRecoveryCodeUser[]|_IH_TestTwoFactorRecoveryCodeUser_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|TestTwoFactorRecoveryCodeUser[]|_IH_TestTwoFactorRecoveryCodeUser_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TestTwoFactorRecoveryCodeUser sole(array|string $columns = ['*'])
     * @method TestTwoFactorRecoveryCodeUser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TestTwoFactorRecoveryCodeUser_QB extends _BaseBuilder {}
}
