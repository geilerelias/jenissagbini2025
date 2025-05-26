<?php //13d420cc336ba1ba72c2869c6b5158d5
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Membership;
    use App\Models\Team;
    use App\Models\TeamInvitation;
    use App\Models\User;
    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Membership|null getOrPut($key, \Closure $value)
     * @method Membership|$this shift(int $count = 1)
     * @method Membership|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Membership|$this pop(int $count = 1)
     * @method Membership|null pull($key, \Closure $default = null)
     * @method Membership|null last(callable|null $callback = null, \Closure $default = null)
     * @method Membership|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Membership|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Membership|null get($key, \Closure $default = null)
     * @method Membership|null first(callable|null $callback = null, \Closure $default = null)
     * @method Membership|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Membership|null find($key, $default = null)
     * @method Membership[] all()
     */
    class _IH_Membership_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Membership[][]|Collection<_IH_Membership_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_Membership_QB whereId($value)
     * @method _IH_Membership_QB whereTeamId($value)
     * @method _IH_Membership_QB whereUserId($value)
     * @method _IH_Membership_QB whereRole($value)
     * @method _IH_Membership_QB whereCreatedAt($value)
     * @method _IH_Membership_QB whereUpdatedAt($value)
     * @method Membership create(array $attributes = [])
     * @method Membership createOrFirst(array $attributes = [], array $values = [])
     * @method Membership createQuietly(array $attributes = [])
     * @method _IH_Membership_C|Membership[] cursor()
     * @method Membership[] eagerLoadRelations(array $models)
     * @method Membership|null|_IH_Membership_C|Membership[] find($id, array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Membership|_IH_Membership_C|Membership[] findOrFail($id, array|string $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOrNew($id, array|string $columns = ['*'])
     * @method Membership findSole($id, array|string $columns = ['*'])
     * @method Membership first(array|string $columns = ['*'])
     * @method Membership firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Membership firstOrCreate(array $attributes = [], array $values = [])
     * @method Membership firstOrFail(array|string $columns = ['*'])
     * @method Membership firstOrNew(array $attributes = [], array $values = [])
     * @method Membership firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Membership forceCreate(array $attributes)
     * @method Membership forceCreateQuietly(array $attributes = [])
     * @method _IH_Membership_C|Membership[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Membership_C|Membership[] get(array|string $columns = ['*'])
     * @method Membership getModel()
     * @method Membership[] getModels(array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] hydrate(array $items)
     * @method Membership incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Membership_C|Membership[] lazy(int $chunkSize = 1000)
     * @method _IH_Membership_C|Membership[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Membership_C|Membership[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Membership make(array $attributes = [])
     * @method Membership newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Membership[]|_IH_Membership_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|Membership[]|_IH_Membership_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Membership sole(array|string $columns = ['*'])
     * @method Membership updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Membership_QB extends _BaseBuilder {}

    /**
     * @method TeamInvitation|null getOrPut($key, \Closure $value)
     * @method TeamInvitation|$this shift(int $count = 1)
     * @method TeamInvitation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TeamInvitation|$this pop(int $count = 1)
     * @method TeamInvitation|null pull($key, \Closure $default = null)
     * @method TeamInvitation|null last(callable|null $callback = null, \Closure $default = null)
     * @method TeamInvitation|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method TeamInvitation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TeamInvitation|null get($key, \Closure $default = null)
     * @method TeamInvitation|null first(callable|null $callback = null, \Closure $default = null)
     * @method TeamInvitation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TeamInvitation|null find($key, $default = null)
     * @method TeamInvitation[] all()
     */
    class _IH_TeamInvitation_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return TeamInvitation[][]|Collection<_IH_TeamInvitation_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_TeamInvitation_QB whereId($value)
     * @method _IH_TeamInvitation_QB whereTeamId($value)
     * @method _IH_TeamInvitation_QB whereEmail($value)
     * @method _IH_TeamInvitation_QB whereRole($value)
     * @method _IH_TeamInvitation_QB whereCreatedAt($value)
     * @method _IH_TeamInvitation_QB whereUpdatedAt($value)
     * @method TeamInvitation create(array $attributes = [])
     * @method TeamInvitation createOrFirst(array $attributes = [], array $values = [])
     * @method TeamInvitation createQuietly(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] cursor()
     * @method TeamInvitation[] eagerLoadRelations(array $models)
     * @method TeamInvitation|null|_IH_TeamInvitation_C|TeamInvitation[] find($id, array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrFail($id, array|string $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrNew($id, array|string $columns = ['*'])
     * @method TeamInvitation findSole($id, array|string $columns = ['*'])
     * @method TeamInvitation first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array|string $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method TeamInvitation forceCreateQuietly(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] lazy(int $chunkSize = 1000)
     * @method _IH_TeamInvitation_C|TeamInvitation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TeamInvitation_C|TeamInvitation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_IH_TeamInvitation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|TeamInvitation[]|_IH_TeamInvitation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TeamInvitation_QB extends _BaseBuilder {}

    /**
     * @method Team|null getOrPut($key, \Closure $value)
     * @method Team|$this shift(int $count = 1)
     * @method Team|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Team|$this pop(int $count = 1)
     * @method Team|null pull($key, \Closure $default = null)
     * @method Team|null last(callable|null $callback = null, \Closure $default = null)
     * @method Team|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Team|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Team|null get($key, \Closure $default = null)
     * @method Team|null first(callable|null $callback = null, \Closure $default = null)
     * @method Team|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Team|null find($key, $default = null)
     * @method Team[] all()
     */
    class _IH_Team_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Team[][]|Collection<_IH_Team_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_Team_QB whereId($value)
     * @method _IH_Team_QB whereUserId($value)
     * @method _IH_Team_QB whereName($value)
     * @method _IH_Team_QB wherePersonalTeam($value)
     * @method _IH_Team_QB whereCreatedAt($value)
     * @method _IH_Team_QB whereUpdatedAt($value)
     * @method Team create(array $attributes = [])
     * @method Team createOrFirst(array $attributes = [], array $values = [])
     * @method Team createQuietly(array $attributes = [])
     * @method _IH_Team_C|Team[] cursor()
     * @method Team[] eagerLoadRelations(array $models)
     * @method Team|null|_IH_Team_C|Team[] find($id, array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Team|_IH_Team_C|Team[] findOrFail($id, array|string $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOrNew($id, array|string $columns = ['*'])
     * @method Team findSole($id, array|string $columns = ['*'])
     * @method Team first(array|string $columns = ['*'])
     * @method Team firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Team firstOrCreate(array $attributes = [], array $values = [])
     * @method Team firstOrFail(array|string $columns = ['*'])
     * @method Team firstOrNew(array $attributes = [], array $values = [])
     * @method Team firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Team forceCreate(array $attributes)
     * @method Team forceCreateQuietly(array $attributes = [])
     * @method _IH_Team_C|Team[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Team_C|Team[] get(array|string $columns = ['*'])
     * @method Team getModel()
     * @method Team[] getModels(array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] hydrate(array $items)
     * @method Team incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Team_C|Team[] lazy(int $chunkSize = 1000)
     * @method _IH_Team_C|Team[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Team_C|Team[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Team make(array $attributes = [])
     * @method Team newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Team[]|_IH_Team_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|Team[]|_IH_Team_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Team sole(array|string $columns = ['*'])
     * @method Team updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Team_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, \Closure $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable|null $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable|null $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return User[][]|Collection<_IH_User_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCurrentTeamId($value)
     * @method _IH_User_QB whereProfilePhotoPath($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereTwoFactorSecret($value)
     * @method _IH_User_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_User_QB whereTwoFactorConfirmedAt($value)
     * @method User create(array $attributes = [])
     * @method User createOrFirst(array $attributes = [], array $values = [])
     * @method User createQuietly(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User[] eagerLoadRelations(array $models)
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User findSole($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method User forceCreateQuietly(array $attributes = [])
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_User_C|User[] lazy(int $chunkSize = 1000)
     * @method _IH_User_C|User[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_User_C|User[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
