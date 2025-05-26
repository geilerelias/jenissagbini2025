<?php //9e7905c9394554b54614f061149b3f53
/** @noinspection all */

namespace LaravelIdea\Helper {

    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\ConnectionInterface;
    use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
    use Illuminate\Database\Query\Builder;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;

    /**
     * @see \Illuminate\Database\Query\Builder::useIndex
     * @method $this useIndex(string $index)
     * @see \Illuminate\Database\Query\Builder::whereJsonContainsKey
     * @method $this whereJsonContainsKey(string $column, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereTodayOrAfter
     * @method $this whereTodayOrAfter(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::whereIn
     * @method $this whereIn(Expression|string $column, $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereNotIn
     * @method $this orWhereNotIn(Expression|string $column, $values)
     * @see \Illuminate\Database\Query\Builder::selectRaw
     * @method $this selectRaw(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::havingNotNull
     * @method $this havingNotNull(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertOrIgnore
     * @method int insertOrIgnore(array $values)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereBeforeToday
     * @method $this whereBeforeToday(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::orHavingNull
     * @method $this orHavingNull(string $column)
     * @see \Illuminate\Database\Query\Builder::unionAll
     * @method $this unionAll($query)
     * @see \Illuminate\Database\Query\Builder::orWhereNull
     * @method $this orWhereNull(array|Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::joinWhere
     * @method $this joinWhere(Expression|string $table, \Closure|Expression|string $first, string $operator, Expression|string $second, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContains
     * @method $this orWhereJsonContains(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orderBy
     * @method $this orderBy($column, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::raw
     * @method Expression raw($value)
     * @see \Illuminate\Database\Concerns\BuildsQueries::each
     * @method $this each(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::setBindings
     * @method $this setBindings(array $bindings, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::dumpRawSql
     * @method $this dumpRawSql()
     * @see \Illuminate\Database\Query\Builder::orWhereJsonLength
     * @method $this orWhereJsonLength(string $column, $operator, $value = null)
     * @see \Illuminate\Database\Query\Builder::whereRowValues
     * @method $this whereRowValues(array $columns, string $operator, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereAfterToday
     * @method $this whereAfterToday(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::orWhereNotExists
     * @method $this orWhereNotExists($callback)
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerInRaw
     * @method $this orWhereIntegerInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Query\Builder::orWhereLike
     * @method $this orWhereLike(Expression|string $column, string $value, bool $caseSensitive = false)
     * @see \Illuminate\Database\Query\Builder::crossJoin
     * @method $this crossJoin(Expression|string $table, \Closure|Expression|null|string $first = null, null|string $operator = null, Expression|null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::newQuery
     * @method $this newQuery()
     * @see \Illuminate\Database\Query\Builder::rightJoinSub
     * @method $this rightJoinSub($query, string $as, \Closure|Expression|string $first, null|string $operator = null, Expression|null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::average
     * @method mixed average(Expression|string $column)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereNowOrPast
     * @method $this orWhereNowOrPast(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::whereFullText
     * @method $this whereFullText(string|string[] $columns, string $value, array $options = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::existsOr
     * @method $this existsOr(\Closure $callback)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereNowOrFuture
     * @method $this orWhereNowOrFuture(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::sum
     * @method int|mixed sum(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::havingRaw
     * @method $this havingRaw(string $sql, array $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkMap
     * @method $this chunkMap(callable $callback, int $count = 1000)
     * @see \Illuminate\Database\Query\Builder::getRawBindings
     * @method $this getRawBindings()
     * @see \Illuminate\Database\Query\Builder::orWhereColumn
     * @method $this orWhereColumn(array|Expression|string $first, null|string $operator = null, null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::min
     * @method mixed min(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::orWhereNone
     * @method $this orWhereNone(\Closure[]|Expression[]|string[] $columns, $operator = null, $value = null)
     * @see \Illuminate\Database\Query\Builder::forceIndex
     * @method $this forceIndex(string $index)
     * @see \Illuminate\Database\Query\Builder::whereNotIn
     * @method $this whereNotIn(Expression|string $column, $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereTime
     * @method $this whereTime(Expression|string $column, \DateTimeInterface|null|string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyByIdDesc
     * @method $this lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::insertUsing
     * @method int insertUsing(array $columns, $query)
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazyById
     * @method $this lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::rightJoinWhere
     * @method $this rightJoinWhere(Expression|string $table, \Closure|Expression|string $first, string $operator, Expression|string $second)
     * @see \Illuminate\Database\Query\Builder::orWhereAll
     * @method $this orWhereAll(\Closure[]|Expression[]|string[] $columns, $operator = null, $value = null)
     * @see \Illuminate\Database\Query\Builder::groupBy
     * @method $this groupBy(...$groups)
     * @see \Illuminate\Database\Query\Builder::union
     * @method $this union($query, bool $all = false)
     * @see \Illuminate\Database\Query\Builder::orWhereDay
     * @method $this orWhereDay(Expression|string $column, \DateTimeInterface|int|null|string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orWhereFullText
     * @method $this orWhereFullText(string|string[] $columns, string $value, array $options = [])
     * @see \Illuminate\Database\Query\Builder::joinSub
     * @method $this joinSub($query, string $as, \Closure|Expression|string $first, null|string $operator = null, Expression|null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::selectSub
     * @method $this selectSub($query, string $as)
     * @see \Illuminate\Database\Query\Builder::ignoreIndex
     * @method $this ignoreIndex(string $index)
     * @see \Illuminate\Database\Query\Builder::dd
     * @method never dd()
     * @see \Illuminate\Database\Query\Builder::whereNull
     * @method $this whereNull(array|Expression|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::prepareValueAndOperator
     * @method $this prepareValueAndOperator(string $value, string $operator, bool $useDefault = false)
     * @see \Illuminate\Database\Query\Builder::whereIntegerNotInRaw
     * @method $this whereIntegerNotInRaw(string $column, array|Arrayable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRaw
     * @method $this orWhereRaw(string $sql, $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereNotLike
     * @method $this whereNotLike(Expression|string $column, string $value, bool $caseSensitive = false, string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsQueries::orderedChunkById
     * @method $this orderedChunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null, bool $descending = false)
     * @see \Illuminate\Database\Query\Builder::whereLike
     * @method $this whereLike(Expression|string $column, string $value, bool $caseSensitive = false, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereJsonContains
     * @method $this whereJsonContains(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereBetweenColumns
     * @method $this orWhereBetweenColumns(Expression|string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::mergeWheres
     * @method $this mergeWheres(array $wheres, array $bindings)
     * @see \Illuminate\Database\Query\Builder::sharedLock
     * @method $this sharedLock()
     * @see \Illuminate\Database\Query\Builder::applyBeforeQueryCallbacks
     * @method $this applyBeforeQueryCallbacks()
     * @see \Illuminate\Database\Query\Builder::orderByRaw
     * @method $this orderByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::doesntExist
     * @method bool doesntExist()
     * @see \Illuminate\Database\Query\Builder::addNestedHavingQuery
     * @method $this addNestedHavingQuery(Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereMonth
     * @method $this orWhereMonth(Expression|string $column, \DateTimeInterface|int|null|string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::whereNotNull
     * @method $this whereNotNull(array|Expression|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::count
     * @method int count(Expression|string $columns = '*')
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
     * @method $this orWhereNotBetween(Expression|string $column, iterable $values)
     * @see \Illuminate\Database\Query\Builder::fromRaw
     * @method $this fromRaw(string $expression, $bindings = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method $this mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Query\Builder::take
     * @method $this take(int $value)
     * @see \Illuminate\Database\Query\Builder::orWhereNotBetweenColumns
     * @method $this orWhereNotBetweenColumns(Expression|string $column, array $values)
     * @see \Illuminate\Database\Query\Builder::updateOrInsert
     * @method $this updateOrInsert(array $attributes, array|callable $values = [])
     * @see \Illuminate\Database\Query\Builder::leftJoinLateral
     * @method $this leftJoinLateral($query, string $as)
     * @see \Illuminate\Database\Query\Builder::havingNull
     * @method $this havingNull(array|string $columns, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method $this flushMacros()
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWherePast
     * @method $this orWherePast(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::havingNested
     * @method $this havingNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::cloneWithout
     * @method $this cloneWithout(array $properties)
     * @see \Illuminate\Database\Query\Builder::whereBetweenColumns
     * @method $this whereBetweenColumns(Expression|string $column, array $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::fromSub
     * @method $this fromSub($query, string $as)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonContainsKey
     * @method $this orWhereJsonContainsKey(string $column)
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntOverlap
     * @method $this whereJsonDoesntOverlap(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::cleanBindings
     * @method $this cleanBindings(array $bindings)
     * @see \Illuminate\Database\Query\Builder::orWhereDate
     * @method $this orWhereDate(Expression|string $column, \DateTimeInterface|null|string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::avg
     * @method mixed avg(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::addBinding
     * @method $this addBinding($value, string $type = 'where')
     * @see \Illuminate\Database\Query\Builder::getGrammar
     * @method $this getGrammar()
     * @see \Illuminate\Database\Query\Builder::lockForUpdate
     * @method $this lockForUpdate()
     * @see \Illuminate\Database\Concerns\BuildsQueries::eachById
     * @method $this eachById(callable $callback, int $count = 1000, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::orWhereAny
     * @method $this orWhereAny(\Closure[]|Expression[]|string[] $columns, $operator = null, $value = null)
     * @see \Illuminate\Database\Query\Builder::ddRawSql
     * @method $this ddRawSql()
     * @see \Illuminate\Database\Query\Builder::cloneWithoutBindings
     * @method $this cloneWithoutBindings(array $except)
     * @see \Illuminate\Database\Query\Builder::orHavingRaw
     * @method $this orHavingRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContainKey
     * @method $this whereJsonDoesntContainKey(string $column, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::castBinding
     * @method $this castBinding($value)
     * @see \Illuminate\Database\Query\Builder::whereNone
     * @method $this whereNone(\Closure[]|Expression[]|string[] $columns, $operator = null, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::forPageBeforeId
     * @method $this forPageBeforeId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::getColumns
     * @method $this getColumns()
     * @see \Illuminate\Database\Query\Builder::orWhereBetween
     * @method $this orWhereBetween(Expression|string $column, iterable $values)
     * @see \Illuminate\Database\Concerns\ExplainsQueries::explain
     * @method $this explain()
     * @see \Illuminate\Database\Query\Builder::select
     * @method $this select(array|mixed $columns = ['*'], ...$arguments)
     * @see \Illuminate\Database\Query\Builder::whereJsonOverlaps
     * @method $this whereJsonOverlaps(string $column, $value, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::addSelect
     * @method $this addSelect(array|mixed $column, ...$arguments)
     * @see \Illuminate\Database\Query\Builder::orWhereExists
     * @method $this orWhereExists($callback, bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereJsonLength
     * @method $this whereJsonLength(string $column, $operator, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toRawSql
     * @method $this toRawSql()
     * @see \Illuminate\Database\Query\Builder::beforeQuery
     * @method $this beforeQuery(callable $callback)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::wherePast
     * @method $this wherePast(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::truncate
     * @method $this truncate()
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereBeforeToday
     * @method $this orWhereBeforeToday(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::lock
     * @method $this lock(bool|string $value = true)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereAfterToday
     * @method $this orWhereAfterToday(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::join
     * @method $this join(Expression|string $table, \Closure|Expression|string $first, null|string $operator = null, Expression|null|string $second = null, string $type = 'inner', bool $where = false)
     * @see \Illuminate\Database\Query\Builder::whereMonth
     * @method $this whereMonth(Expression|string $column, \DateTimeInterface|int|null|string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::having
     * @method $this having(\Closure|Expression|string $column, \DateTimeInterface|float|int|null|string $operator = null, \DateTimeInterface|float|Expression|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereNested
     * @method $this whereNested(\Closure $callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereRowValues
     * @method $this orWhereRowValues(array $columns, string $operator, array $values)
     * @see \Illuminate\Database\Query\Builder::useWritePdo
     * @method $this useWritePdo()
     * @see \Illuminate\Database\Query\Builder::orWhereIn
     * @method $this orWhereIn(Expression|string $column, $values)
     * @see \Illuminate\Database\Query\Builder::orderByDesc
     * @method $this orderByDesc($column)
     * @see \Illuminate\Database\Query\Builder::orWhereNotNull
     * @method $this orWhereNotNull(Expression|string $column)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereTodayOrBefore
     * @method $this whereTodayOrBefore(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::getProcessor
     * @method $this getProcessor()
     * @see \Illuminate\Database\Concerns\BuildsQueries::lazy
     * @method $this lazy(int $chunkSize = 1000)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereFuture
     * @method $this orWhereFuture(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContainKey
     * @method $this orWhereJsonDoesntContainKey(string $column)
     * @see \Illuminate\Database\Query\Builder::skip
     * @method $this skip(int $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinWhere
     * @method $this leftJoinWhere(Expression|string $table, \Closure|Expression|string $first, string $operator, Expression|null|string $second)
     * @see \Illuminate\Database\Query\Builder::doesntExistOr
     * @method $this doesntExistOr(\Closure $callback)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereTodayOrBefore
     * @method $this orWhereTodayOrBefore(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::whereNotExists
     * @method $this whereNotExists($callback, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereIntegerInRaw
     * @method $this whereIntegerInRaw(string $column, array|Arrayable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::whereDay
     * @method $this whereDay(Expression|string $column, \DateTimeInterface|int|null|string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::whereAll
     * @method $this whereAll(\Closure[]|Expression[]|string[] $columns, $operator = null, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereNowOrFuture
     * @method $this whereNowOrFuture(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::forNestedWhere
     * @method $this forNestedWhere()
     * @see \Illuminate\Database\Query\Builder::insertOrIgnoreUsing
     * @method int insertOrIgnoreUsing(array $columns, $query)
     * @see \Illuminate\Database\Query\Builder::max
     * @method mixed max(Expression|string $column)
     * @see \Illuminate\Database\Query\Builder::whereExists
     * @method $this whereExists($callback, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::inRandomOrder
     * @method $this inRandomOrder(int|string $seed = '')
     * @see \Illuminate\Database\Query\Builder::havingBetween
     * @method $this havingBetween(string $column, iterable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntOverlap
     * @method $this orWhereJsonDoesntOverlap(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::orWhereYear
     * @method $this orWhereYear(Expression|string $column, \DateTimeInterface|int|null|string $operator, \DateTimeInterface|int|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkById
     * @method $this chunkById(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::whereDate
     * @method $this whereDate(Expression|string $column, \DateTimeInterface|null|string $operator, \DateTimeInterface|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::decrementEach
     * @method $this decrementEach(array $columns, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::whereJsonDoesntContain
     * @method $this whereJsonDoesntContain(string $column, $value, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::rawValue
     * @method $this rawValue(string $expression, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::forPageAfterId
     * @method $this forPageAfterId(int $perPage = 15, int|null $lastId = 0, string $column = 'id')
     * @see \Illuminate\Database\Query\Builder::forPage
     * @method $this forPage(int $page, int $perPage = 15)
     * @see \Illuminate\Database\Query\Builder::exists
     * @method bool exists()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method $this macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\BuildsQueries::first
     * @method mixed|null first(array|string $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereColumn
     * @method $this whereColumn(array|Expression|string $first, null|string $operator = null, null|string $second = null, null|string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::numericAggregate
     * @method $this numericAggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::whereNotBetween
     * @method $this whereNotBetween(Expression|string $column, iterable $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getConnection
     * @method ConnectionInterface getConnection()
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereToday
     * @method $this whereToday(array|string $columns, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::mergeBindings
     * @method $this mergeBindings(Builder $query)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain
     * @method $this orWhereJsonDoesntContain(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::leftJoinSub
     * @method $this leftJoinSub($query, string $as, \Closure|Expression|string $first, null|string $operator = null, Expression|null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::updateFrom
     * @method $this updateFrom(array $values)
     * @see \Illuminate\Database\Query\Builder::crossJoinSub
     * @method $this crossJoinSub($query, string $as)
     * @see \Illuminate\Database\Query\Builder::limit
     * @method $this limit(int $value)
     * @see \Illuminate\Database\Query\Builder::from
     * @method $this from($table, null|string $as = null)
     * @see \Illuminate\Database\Concerns\BuildsQueries::pipe
     * @method $this pipe(callable $callback)
     * @see \Illuminate\Database\Query\Builder::whereNotBetweenColumns
     * @method $this whereNotBetweenColumns(Expression|string $column, array $values, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::insertGetId
     * @method int insertGetId(array $values, null|string $sequence = null)
     * @see \Illuminate\Database\Query\Builder::whereBetween
     * @method $this whereBetween(Expression|string $column, iterable $values, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereFuture
     * @method $this whereFuture(array|string $columns)
     * @see \Illuminate\Database\Concerns\BuildsQueries::tap
     * @method $this tap(callable $callback)
     * @see \Illuminate\Database\Query\Builder::offset
     * @method $this offset(int $value)
     * @see \Illuminate\Database\Query\Builder::whereAny
     * @method $this whereAny(\Closure[]|Expression[]|string[] $columns, $operator = null, $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::orWhereNotLike
     * @method $this orWhereNotLike(Expression|string $column, string $value, bool $caseSensitive = false)
     * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
     * @method $this addNestedWhereQuery(Builder $query, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::groupLimit
     * @method $this groupLimit(int $value, string $column)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereToday
     * @method $this orWhereToday(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::incrementEach
     * @method $this incrementEach(array $columns, array $extra = [])
     * @see \Illuminate\Database\Query\Builder::rightJoin
     * @method $this rightJoin(Expression|string $table, \Closure|string $first, null|string $operator = null, Expression|null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::leftJoin
     * @method $this leftJoin(Expression|string $table, \Closure|Expression|string $first, null|string $operator = null, Expression|null|string $second = null)
     * @see \Illuminate\Database\Query\Builder::insert
     * @method bool insert(array $values)
     * @see \Illuminate\Database\Query\Builder::distinct
     * @method $this distinct(...$arguments)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunk
     * @method $this chunk(int $count, callable $callback)
     * @see \Illuminate\Database\Query\Builder::reorder
     * @method $this reorder(\Closure|Expression|Builder|null|string $column = null, string $direction = 'asc')
     * @see \Illuminate\Database\Query\Builder::whereYear
     * @method $this whereYear(Expression|string $column, \DateTimeInterface|int|null|string $operator, \DateTimeInterface|int|null|string $value = null, string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::getCountForPagination
     * @method $this getCountForPagination(array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::groupByRaw
     * @method $this groupByRaw(string $sql, array $bindings = [])
     * @see \Illuminate\Database\Query\Builder::aggregate
     * @method $this aggregate(string $function, array $columns = ['*'])
     * @see \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw
     * @method $this orWhereIntegerNotInRaw(string $column, array|Arrayable $values)
     * @see \Illuminate\Database\Concerns\BuildsQueries::chunkByIdDesc
     * @method $this chunkByIdDesc(int $count, callable $callback, null|string $column = null, null|string $alias = null)
     * @see \Illuminate\Database\Query\Builder::joinLateral
     * @method $this joinLateral($query, string $as, string $type = 'inner')
     * @see \Illuminate\Database\Query\Builder::implode
     * @method string implode(string $column, string $glue = '')
     * @see \Illuminate\Database\Query\Builder::dump
     * @method Builder dump(...$args)
     * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
     * @method $this addWhereExistsQuery(Builder $query, string $boolean = 'and', bool $not = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method $this macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Query\Builder::whereRaw
     * @method $this whereRaw(string $sql, $bindings = [], string $boolean = 'and')
     * @see \Illuminate\Database\Query\Builder::toSql
     * @method string toSql()
     * @see \Illuminate\Database\Query\Builder::orHaving
     * @method $this orHaving(\Closure|Expression|string $column, \DateTimeInterface|float|int|null|string $operator = null, \DateTimeInterface|float|Expression|int|null|string $value = null)
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::whereNowOrPast
     * @method $this whereNowOrPast(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::orWhereJsonOverlaps
     * @method $this orWhereJsonOverlaps(string $column, $value)
     * @see \Illuminate\Database\Query\Builder::getBindings
     * @method array getBindings()
     * @see \Illuminate\Database\Concerns\BuildsWhereDateClauses::orWhereTodayOrAfter
     * @method $this orWhereTodayOrAfter(array|string $columns)
     * @see \Illuminate\Database\Query\Builder::orWhereTime
     * @method $this orWhereTime(Expression|string $column, \DateTimeInterface|null|string $operator, \DateTimeInterface|null|string $value = null)
     * @see \Illuminate\Database\Query\Builder::orHavingNotNull
     * @method $this orHavingNotNull(string $column)
     * @see \Illuminate\Database\Query\Builder::dynamicWhere
     * @method $this dynamicWhere(string $method, array $parameters)
     */
    class _BaseBuilder extends EloquentBuilder {}

    /**
     * @method \Illuminate\Support\Collection mapWithKeys(callable $callback)
     * @method \Illuminate\Support\Collection partition(callable|\Illuminate\Database\Eloquent\Model|string $key, \Illuminate\Database\Eloquent\Model|null|string $operator = null, \Illuminate\Database\Eloquent\Model|null $value = null)
     * @method \Illuminate\Support\Collection mapInto(string $class)
     * @method \Illuminate\Support\Collection mapToGroups(callable $callback)
     * @method \Illuminate\Support\Collection groupBy(array|callable|string $groupBy, bool $preserveKeys = false)
     * @method \Illuminate\Support\Collection pluck(null|string|string[] $value, null|string $key = null)
     * @method \Illuminate\Support\Collection pad(int $size, $value)
     * @method \Illuminate\Support\Collection countBy(callable|null|string $countBy = null)
     * @method \Illuminate\Support\Collection flatMap(callable $callback)
     * @method \Illuminate\Support\Collection mapSpread(callable $callback)
     * @method \Illuminate\Support\Collection zip(\Illuminate\Contracts\Support\Arrayable[] $items)
     * @method \Illuminate\Support\Collection map(callable $callback)
     * @method \Illuminate\Support\Collection split(int $numberOfGroups)
     * @method \Illuminate\Support\Collection combine(\Illuminate\Contracts\Support\Arrayable $values)
     * @method \Illuminate\Support\Collection mapToDictionary(callable $callback)
     * @method \Illuminate\Support\Collection keys()
     * @method \Illuminate\Support\Collection transform(callable $callback)
     * @method \Illuminate\Support\Collection collapse()
     */
    class _BaseCollection extends \Illuminate\Database\Eloquent\Collection {}

    /**
     * @method \Admin|null getOrPut($key, \Closure $value)
     * @method \Admin|$this shift(int $count = 1)
     * @method \Admin|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \Admin|$this pop(int $count = 1)
     * @method \Admin|null pull($key, \Closure $default = null)
     * @method \Admin|null last(callable|null $callback = null, \Closure $default = null)
     * @method \Admin|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \Admin|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \Admin|null get($key, \Closure $default = null)
     * @method \Admin|null first(callable|null $callback = null, \Closure $default = null)
     * @method \Admin|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \Admin|null find($key, $default = null)
     * @method \Admin[] all()
     */
    class _IH_Admin_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \Admin[][]|Collection<_IH_Admin_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \Admin create(array $attributes = [])
     * @method \Admin createOrFirst(array $attributes = [], array $values = [])
     * @method \Admin createQuietly(array $attributes = [])
     * @method _IH_Admin_C|\Admin[] cursor()
     * @method \Admin[] eagerLoadRelations(array $models)
     * @method \Admin|null|_IH_Admin_C|\Admin[] find($id, array|string $columns = ['*'])
     * @method _IH_Admin_C|\Admin[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \Admin|_IH_Admin_C|\Admin[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Admin|_IH_Admin_C|\Admin[] findOrFail($id, array|string $columns = ['*'])
     * @method \Admin|_IH_Admin_C|\Admin[] findOrNew($id, array|string $columns = ['*'])
     * @method \Admin findSole($id, array|string $columns = ['*'])
     * @method \Admin first(array|string $columns = ['*'])
     * @method \Admin firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Admin firstOrCreate(array $attributes = [], array $values = [])
     * @method \Admin firstOrFail(array|string $columns = ['*'])
     * @method \Admin firstOrNew(array $attributes = [], array $values = [])
     * @method \Admin firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \Admin forceCreate(array $attributes)
     * @method \Admin forceCreateQuietly(array $attributes = [])
     * @method _IH_Admin_C|\Admin[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Admin_C|\Admin[] get(array|string $columns = ['*'])
     * @method \Admin getModel()
     * @method \Admin[] getModels(array|string $columns = ['*'])
     * @method _IH_Admin_C|\Admin[] hydrate(array $items)
     * @method \Admin incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Admin_C|\Admin[] lazy(int $chunkSize = 1000)
     * @method _IH_Admin_C|\Admin[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Admin_C|\Admin[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \Admin make(array $attributes = [])
     * @method \Admin newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\Admin[]|_IH_Admin_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\Admin[]|_IH_Admin_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \Admin sole(array|string $columns = ['*'])
     * @method \Admin updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Admin_QB extends _BaseBuilder {}

    /**
     * @method \Comment|null getOrPut($key, \Closure $value)
     * @method \Comment|$this shift(int $count = 1)
     * @method \Comment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \Comment|$this pop(int $count = 1)
     * @method \Comment|null pull($key, \Closure $default = null)
     * @method \Comment|null last(callable|null $callback = null, \Closure $default = null)
     * @method \Comment|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \Comment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \Comment|null get($key, \Closure $default = null)
     * @method \Comment|null first(callable|null $callback = null, \Closure $default = null)
     * @method \Comment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \Comment|null find($key, $default = null)
     * @method \Comment[] all()
     */
    class _IH_Comment_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \Comment[][]|Collection<_IH_Comment_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \Comment create(array $attributes = [])
     * @method \Comment createOrFirst(array $attributes = [], array $values = [])
     * @method \Comment createQuietly(array $attributes = [])
     * @method _IH_Comment_C|\Comment[] cursor()
     * @method \Comment[] eagerLoadRelations(array $models)
     * @method \Comment|null|_IH_Comment_C|\Comment[] find($id, array|string $columns = ['*'])
     * @method _IH_Comment_C|\Comment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \Comment|_IH_Comment_C|\Comment[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Comment|_IH_Comment_C|\Comment[] findOrFail($id, array|string $columns = ['*'])
     * @method \Comment|_IH_Comment_C|\Comment[] findOrNew($id, array|string $columns = ['*'])
     * @method \Comment findSole($id, array|string $columns = ['*'])
     * @method \Comment first(array|string $columns = ['*'])
     * @method \Comment firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Comment firstOrCreate(array $attributes = [], array $values = [])
     * @method \Comment firstOrFail(array|string $columns = ['*'])
     * @method \Comment firstOrNew(array $attributes = [], array $values = [])
     * @method \Comment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \Comment forceCreate(array $attributes)
     * @method \Comment forceCreateQuietly(array $attributes = [])
     * @method _IH_Comment_C|\Comment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Comment_C|\Comment[] get(array|string $columns = ['*'])
     * @method \Comment getModel()
     * @method \Comment[] getModels(array|string $columns = ['*'])
     * @method _IH_Comment_C|\Comment[] hydrate(array $items)
     * @method \Comment incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Comment_C|\Comment[] lazy(int $chunkSize = 1000)
     * @method _IH_Comment_C|\Comment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Comment_C|\Comment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \Comment make(array $attributes = [])
     * @method \Comment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\Comment[]|_IH_Comment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\Comment[]|_IH_Comment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \Comment sole(array|string $columns = ['*'])
     * @method \Comment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Comment_QB extends _BaseBuilder {}

    /**
     * @method \CustomNotification|null getOrPut($key, \Closure $value)
     * @method \CustomNotification|$this shift(int $count = 1)
     * @method \CustomNotification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \CustomNotification|$this pop(int $count = 1)
     * @method \CustomNotification|null pull($key, \Closure $default = null)
     * @method \CustomNotification|null last(callable|null $callback = null, \Closure $default = null)
     * @method \CustomNotification|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \CustomNotification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \CustomNotification|null get($key, \Closure $default = null)
     * @method \CustomNotification|null first(callable|null $callback = null, \Closure $default = null)
     * @method \CustomNotification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \CustomNotification|null find($key, $default = null)
     * @method \CustomNotification[] all()
     */
    class _IH_CustomNotification_C extends DatabaseNotificationCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \CustomNotification[][]|Collection<_IH_CustomNotification_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \CustomNotification create(array $attributes = [])
     * @method \CustomNotification createOrFirst(array $attributes = [], array $values = [])
     * @method \CustomNotification createQuietly(array $attributes = [])
     * @method _IH_CustomNotification_C|\CustomNotification[] cursor()
     * @method \CustomNotification[] eagerLoadRelations(array $models)
     * @method \CustomNotification|null|_IH_CustomNotification_C|\CustomNotification[] find($id, array|string $columns = ['*'])
     * @method _IH_CustomNotification_C|\CustomNotification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \CustomNotification|_IH_CustomNotification_C|\CustomNotification[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \CustomNotification|_IH_CustomNotification_C|\CustomNotification[] findOrFail($id, array|string $columns = ['*'])
     * @method \CustomNotification|_IH_CustomNotification_C|\CustomNotification[] findOrNew($id, array|string $columns = ['*'])
     * @method \CustomNotification findSole($id, array|string $columns = ['*'])
     * @method \CustomNotification first(array|string $columns = ['*'])
     * @method \CustomNotification firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \CustomNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method \CustomNotification firstOrFail(array|string $columns = ['*'])
     * @method \CustomNotification firstOrNew(array $attributes = [], array $values = [])
     * @method \CustomNotification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \CustomNotification forceCreate(array $attributes)
     * @method \CustomNotification forceCreateQuietly(array $attributes = [])
     * @method _IH_CustomNotification_C|\CustomNotification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CustomNotification_C|\CustomNotification[] get(array|string $columns = ['*'])
     * @method \CustomNotification getModel()
     * @method \CustomNotification[] getModels(array|string $columns = ['*'])
     * @method _IH_CustomNotification_C|\CustomNotification[] hydrate(array $items)
     * @method \CustomNotification incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_CustomNotification_C|\CustomNotification[] lazy(int $chunkSize = 1000)
     * @method _IH_CustomNotification_C|\CustomNotification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CustomNotification_C|\CustomNotification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \CustomNotification make(array $attributes = [])
     * @method \CustomNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\CustomNotification[]|_IH_CustomNotification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\CustomNotification[]|_IH_CustomNotification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \CustomNotification sole(array|string $columns = ['*'])
     * @method \CustomNotification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CustomNotification_QB read()
     * @method _IH_CustomNotification_QB unread()
     */
    class _IH_CustomNotification_QB extends _BaseBuilder {}

    /**
     * @method \FolioTag|null getOrPut($key, \Closure $value)
     * @method \FolioTag|$this shift(int $count = 1)
     * @method \FolioTag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \FolioTag|$this pop(int $count = 1)
     * @method \FolioTag|null pull($key, \Closure $default = null)
     * @method \FolioTag|null last(callable|null $callback = null, \Closure $default = null)
     * @method \FolioTag|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \FolioTag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \FolioTag|null get($key, \Closure $default = null)
     * @method \FolioTag|null first(callable|null $callback = null, \Closure $default = null)
     * @method \FolioTag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \FolioTag|null find($key, $default = null)
     * @method \FolioTag[] all()
     */
    class _IH_FolioTag_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \FolioTag[][]|Collection<_IH_FolioTag_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \FolioTag create(array $attributes = [])
     * @method \FolioTag createOrFirst(array $attributes = [], array $values = [])
     * @method \FolioTag createQuietly(array $attributes = [])
     * @method _IH_FolioTag_C|\FolioTag[] cursor()
     * @method \FolioTag[] eagerLoadRelations(array $models)
     * @method \FolioTag|null|_IH_FolioTag_C|\FolioTag[] find($id, array|string $columns = ['*'])
     * @method _IH_FolioTag_C|\FolioTag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \FolioTag|_IH_FolioTag_C|\FolioTag[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \FolioTag|_IH_FolioTag_C|\FolioTag[] findOrFail($id, array|string $columns = ['*'])
     * @method \FolioTag|_IH_FolioTag_C|\FolioTag[] findOrNew($id, array|string $columns = ['*'])
     * @method \FolioTag findSole($id, array|string $columns = ['*'])
     * @method \FolioTag first(array|string $columns = ['*'])
     * @method \FolioTag firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \FolioTag firstOrCreate(array $attributes = [], array $values = [])
     * @method \FolioTag firstOrFail(array|string $columns = ['*'])
     * @method \FolioTag firstOrNew(array $attributes = [], array $values = [])
     * @method \FolioTag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \FolioTag forceCreate(array $attributes)
     * @method \FolioTag forceCreateQuietly(array $attributes = [])
     * @method _IH_FolioTag_C|\FolioTag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FolioTag_C|\FolioTag[] get(array|string $columns = ['*'])
     * @method \FolioTag getModel()
     * @method \FolioTag[] getModels(array|string $columns = ['*'])
     * @method _IH_FolioTag_C|\FolioTag[] hydrate(array $items)
     * @method \FolioTag incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_FolioTag_C|\FolioTag[] lazy(int $chunkSize = 1000)
     * @method _IH_FolioTag_C|\FolioTag[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FolioTag_C|\FolioTag[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \FolioTag make(array $attributes = [])
     * @method \FolioTag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\FolioTag[]|_IH_FolioTag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\FolioTag[]|_IH_FolioTag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \FolioTag sole(array|string $columns = ['*'])
     * @method \FolioTag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FolioTag_QB extends _BaseBuilder {}

    /**
     * @method \FolioUser|null getOrPut($key, \Closure $value)
     * @method \FolioUser|$this shift(int $count = 1)
     * @method \FolioUser|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \FolioUser|$this pop(int $count = 1)
     * @method \FolioUser|null pull($key, \Closure $default = null)
     * @method \FolioUser|null last(callable|null $callback = null, \Closure $default = null)
     * @method \FolioUser|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \FolioUser|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \FolioUser|null get($key, \Closure $default = null)
     * @method \FolioUser|null first(callable|null $callback = null, \Closure $default = null)
     * @method \FolioUser|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \FolioUser|null find($key, $default = null)
     * @method \FolioUser[] all()
     */
    class _IH_FolioUser_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \FolioUser[][]|Collection<_IH_FolioUser_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \FolioUser create(array $attributes = [])
     * @method \FolioUser createOrFirst(array $attributes = [], array $values = [])
     * @method \FolioUser createQuietly(array $attributes = [])
     * @method _IH_FolioUser_C|\FolioUser[] cursor()
     * @method \FolioUser[] eagerLoadRelations(array $models)
     * @method \FolioUser|null|_IH_FolioUser_C|\FolioUser[] find($id, array|string $columns = ['*'])
     * @method _IH_FolioUser_C|\FolioUser[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \FolioUser|_IH_FolioUser_C|\FolioUser[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \FolioUser|_IH_FolioUser_C|\FolioUser[] findOrFail($id, array|string $columns = ['*'])
     * @method \FolioUser|_IH_FolioUser_C|\FolioUser[] findOrNew($id, array|string $columns = ['*'])
     * @method \FolioUser findSole($id, array|string $columns = ['*'])
     * @method \FolioUser first(array|string $columns = ['*'])
     * @method \FolioUser firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \FolioUser firstOrCreate(array $attributes = [], array $values = [])
     * @method \FolioUser firstOrFail(array|string $columns = ['*'])
     * @method \FolioUser firstOrNew(array $attributes = [], array $values = [])
     * @method \FolioUser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \FolioUser forceCreate(array $attributes)
     * @method \FolioUser forceCreateQuietly(array $attributes = [])
     * @method _IH_FolioUser_C|\FolioUser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FolioUser_C|\FolioUser[] get(array|string $columns = ['*'])
     * @method \FolioUser getModel()
     * @method \FolioUser[] getModels(array|string $columns = ['*'])
     * @method _IH_FolioUser_C|\FolioUser[] hydrate(array $items)
     * @method \FolioUser incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_FolioUser_C|\FolioUser[] lazy(int $chunkSize = 1000)
     * @method _IH_FolioUser_C|\FolioUser[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FolioUser_C|\FolioUser[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \FolioUser make(array $attributes = [])
     * @method \FolioUser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\FolioUser[]|_IH_FolioUser_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\FolioUser[]|_IH_FolioUser_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \FolioUser sole(array|string $columns = ['*'])
     * @method \FolioUser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FolioUser_QB extends _BaseBuilder {}

    /**
     * @method \PostCategory|null getOrPut($key, \Closure $value)
     * @method \PostCategory|$this shift(int $count = 1)
     * @method \PostCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \PostCategory|$this pop(int $count = 1)
     * @method \PostCategory|null pull($key, \Closure $default = null)
     * @method \PostCategory|null last(callable|null $callback = null, \Closure $default = null)
     * @method \PostCategory|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \PostCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \PostCategory|null get($key, \Closure $default = null)
     * @method \PostCategory|null first(callable|null $callback = null, \Closure $default = null)
     * @method \PostCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \PostCategory|null find($key, $default = null)
     * @method \PostCategory[] all()
     */
    class _IH_PostCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \PostCategory[][]|Collection<_IH_PostCategory_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \PostCategory create(array $attributes = [])
     * @method \PostCategory createOrFirst(array $attributes = [], array $values = [])
     * @method \PostCategory createQuietly(array $attributes = [])
     * @method _IH_PostCategory_C|\PostCategory[] cursor()
     * @method \PostCategory[] eagerLoadRelations(array $models)
     * @method \PostCategory|null|_IH_PostCategory_C|\PostCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_PostCategory_C|\PostCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \PostCategory|_IH_PostCategory_C|\PostCategory[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \PostCategory|_IH_PostCategory_C|\PostCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method \PostCategory|_IH_PostCategory_C|\PostCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method \PostCategory findSole($id, array|string $columns = ['*'])
     * @method \PostCategory first(array|string $columns = ['*'])
     * @method \PostCategory firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \PostCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method \PostCategory firstOrFail(array|string $columns = ['*'])
     * @method \PostCategory firstOrNew(array $attributes = [], array $values = [])
     * @method \PostCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \PostCategory forceCreate(array $attributes)
     * @method \PostCategory forceCreateQuietly(array $attributes = [])
     * @method _IH_PostCategory_C|\PostCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostCategory_C|\PostCategory[] get(array|string $columns = ['*'])
     * @method \PostCategory getModel()
     * @method \PostCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_PostCategory_C|\PostCategory[] hydrate(array $items)
     * @method \PostCategory incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_PostCategory_C|\PostCategory[] lazy(int $chunkSize = 1000)
     * @method _IH_PostCategory_C|\PostCategory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PostCategory_C|\PostCategory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \PostCategory make(array $attributes = [])
     * @method \PostCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\PostCategory[]|_IH_PostCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\PostCategory[]|_IH_PostCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \PostCategory sole(array|string $columns = ['*'])
     * @method \PostCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PostCategory_QB extends _BaseBuilder {}

    /**
     * @method \Post|null getOrPut($key, \Closure $value)
     * @method \Post|$this shift(int $count = 1)
     * @method \Post|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \Post|$this pop(int $count = 1)
     * @method \Post|null pull($key, \Closure $default = null)
     * @method \Post|null last(callable|null $callback = null, \Closure $default = null)
     * @method \Post|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \Post|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \Post|null get($key, \Closure $default = null)
     * @method \Post|null first(callable|null $callback = null, \Closure $default = null)
     * @method \Post|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \Post|null find($key, $default = null)
     * @method \Post[] all()
     */
    class _IH_Post_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \Post[][]|Collection<_IH_Post_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \Post create(array $attributes = [])
     * @method \Post createOrFirst(array $attributes = [], array $values = [])
     * @method \Post createQuietly(array $attributes = [])
     * @method _IH_Post_C|\Post[] cursor()
     * @method \Post[] eagerLoadRelations(array $models)
     * @method \Post|null|_IH_Post_C|\Post[] find($id, array|string $columns = ['*'])
     * @method _IH_Post_C|\Post[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \Post|_IH_Post_C|\Post[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Post|_IH_Post_C|\Post[] findOrFail($id, array|string $columns = ['*'])
     * @method \Post|_IH_Post_C|\Post[] findOrNew($id, array|string $columns = ['*'])
     * @method \Post findSole($id, array|string $columns = ['*'])
     * @method \Post first(array|string $columns = ['*'])
     * @method \Post firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Post firstOrCreate(array $attributes = [], array $values = [])
     * @method \Post firstOrFail(array|string $columns = ['*'])
     * @method \Post firstOrNew(array $attributes = [], array $values = [])
     * @method \Post firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \Post forceCreate(array $attributes)
     * @method \Post forceCreateQuietly(array $attributes = [])
     * @method _IH_Post_C|\Post[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Post_C|\Post[] get(array|string $columns = ['*'])
     * @method \Post getModel()
     * @method \Post[] getModels(array|string $columns = ['*'])
     * @method _IH_Post_C|\Post[] hydrate(array $items)
     * @method \Post incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Post_C|\Post[] lazy(int $chunkSize = 1000)
     * @method _IH_Post_C|\Post[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Post_C|\Post[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \Post make(array $attributes = [])
     * @method \Post newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\Post[]|_IH_Post_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\Post[]|_IH_Post_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \Post sole(array|string $columns = ['*'])
     * @method \Post updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Post_QB extends _BaseBuilder {}

    /**
     * @method \Reply|null getOrPut($key, \Closure $value)
     * @method \Reply|$this shift(int $count = 1)
     * @method \Reply|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \Reply|$this pop(int $count = 1)
     * @method \Reply|null pull($key, \Closure $default = null)
     * @method \Reply|null last(callable|null $callback = null, \Closure $default = null)
     * @method \Reply|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \Reply|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \Reply|null get($key, \Closure $default = null)
     * @method \Reply|null first(callable|null $callback = null, \Closure $default = null)
     * @method \Reply|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \Reply|null find($key, $default = null)
     * @method \Reply[] all()
     */
    class _IH_Reply_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \Reply[][]|Collection<_IH_Reply_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \Reply create(array $attributes = [])
     * @method \Reply createOrFirst(array $attributes = [], array $values = [])
     * @method \Reply createQuietly(array $attributes = [])
     * @method _IH_Reply_C|\Reply[] cursor()
     * @method \Reply[] eagerLoadRelations(array $models)
     * @method \Reply|null|_IH_Reply_C|\Reply[] find($id, array|string $columns = ['*'])
     * @method _IH_Reply_C|\Reply[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \Reply|_IH_Reply_C|\Reply[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Reply|_IH_Reply_C|\Reply[] findOrFail($id, array|string $columns = ['*'])
     * @method \Reply|_IH_Reply_C|\Reply[] findOrNew($id, array|string $columns = ['*'])
     * @method \Reply findSole($id, array|string $columns = ['*'])
     * @method \Reply first(array|string $columns = ['*'])
     * @method \Reply firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Reply firstOrCreate(array $attributes = [], array $values = [])
     * @method \Reply firstOrFail(array|string $columns = ['*'])
     * @method \Reply firstOrNew(array $attributes = [], array $values = [])
     * @method \Reply firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \Reply forceCreate(array $attributes)
     * @method \Reply forceCreateQuietly(array $attributes = [])
     * @method _IH_Reply_C|\Reply[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Reply_C|\Reply[] get(array|string $columns = ['*'])
     * @method \Reply getModel()
     * @method \Reply[] getModels(array|string $columns = ['*'])
     * @method _IH_Reply_C|\Reply[] hydrate(array $items)
     * @method \Reply incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Reply_C|\Reply[] lazy(int $chunkSize = 1000)
     * @method _IH_Reply_C|\Reply[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Reply_C|\Reply[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \Reply make(array $attributes = [])
     * @method \Reply newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\Reply[]|_IH_Reply_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\Reply[]|_IH_Reply_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \Reply sole(array|string $columns = ['*'])
     * @method \Reply updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Reply_QB extends _BaseBuilder {}

    /**
     * @method \Tag|null getOrPut($key, \Closure $value)
     * @method \Tag|$this shift(int $count = 1)
     * @method \Tag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \Tag|$this pop(int $count = 1)
     * @method \Tag|null pull($key, \Closure $default = null)
     * @method \Tag|null last(callable|null $callback = null, \Closure $default = null)
     * @method \Tag|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \Tag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \Tag|null get($key, \Closure $default = null)
     * @method \Tag|null first(callable|null $callback = null, \Closure $default = null)
     * @method \Tag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \Tag|null find($key, $default = null)
     * @method \Tag[] all()
     */
    class _IH_Tag_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \Tag[][]|Collection<_IH_Tag_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method \Tag create(array $attributes = [])
     * @method \Tag createOrFirst(array $attributes = [], array $values = [])
     * @method \Tag createQuietly(array $attributes = [])
     * @method _IH_Tag_C|\Tag[] cursor()
     * @method \Tag[] eagerLoadRelations(array $models)
     * @method \Tag|null|_IH_Tag_C|\Tag[] find($id, array|string $columns = ['*'])
     * @method _IH_Tag_C|\Tag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \Tag|_IH_Tag_C|\Tag[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Tag|_IH_Tag_C|\Tag[] findOrFail($id, array|string $columns = ['*'])
     * @method \Tag|_IH_Tag_C|\Tag[] findOrNew($id, array|string $columns = ['*'])
     * @method \Tag findSole($id, array|string $columns = ['*'])
     * @method \Tag first(array|string $columns = ['*'])
     * @method \Tag firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \Tag firstOrCreate(array $attributes = [], array $values = [])
     * @method \Tag firstOrFail(array|string $columns = ['*'])
     * @method \Tag firstOrNew(array $attributes = [], array $values = [])
     * @method \Tag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \Tag forceCreate(array $attributes)
     * @method \Tag forceCreateQuietly(array $attributes = [])
     * @method _IH_Tag_C|\Tag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tag_C|\Tag[] get(array|string $columns = ['*'])
     * @method \Tag getModel()
     * @method \Tag[] getModels(array|string $columns = ['*'])
     * @method _IH_Tag_C|\Tag[] hydrate(array $items)
     * @method \Tag incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Tag_C|\Tag[] lazy(int $chunkSize = 1000)
     * @method _IH_Tag_C|\Tag[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Tag_C|\Tag[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \Tag make(array $attributes = [])
     * @method \Tag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\Tag[]|_IH_Tag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\Tag[]|_IH_Tag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \Tag sole(array|string $columns = ['*'])
     * @method \Tag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tag_QB extends _BaseBuilder {}

    /**
     * @method \User|null getOrPut($key, \Closure $value)
     * @method \User|$this shift(int $count = 1)
     * @method \User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method \User|$this pop(int $count = 1)
     * @method \User|null pull($key, \Closure $default = null)
     * @method \User|null last(callable|null $callback = null, \Closure $default = null)
     * @method \User|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method \User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method \User|null get($key, \Closure $default = null)
     * @method \User|null first(callable|null $callback = null, \Closure $default = null)
     * @method \User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method \User|null find($key, $default = null)
     * @method \User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return \User[][]|Collection<_IH_User_C>
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
     * @method \User create(array $attributes = [])
     * @method \User createOrFirst(array $attributes = [], array $values = [])
     * @method \User createQuietly(array $attributes = [])
     * @method _IH_User_C|\User[] cursor()
     * @method \User[] eagerLoadRelations(array $models)
     * @method \User|null|_IH_User_C|\User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|\User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method \User|_IH_User_C|\User[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \User|_IH_User_C|\User[] findOrFail($id, array|string $columns = ['*'])
     * @method \User|_IH_User_C|\User[] findOrNew($id, array|string $columns = ['*'])
     * @method \User findSole($id, array|string $columns = ['*'])
     * @method \User first(array|string $columns = ['*'])
     * @method \User firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method \User firstOrCreate(array $attributes = [], array $values = [])
     * @method \User firstOrFail(array|string $columns = ['*'])
     * @method \User firstOrNew(array $attributes = [], array $values = [])
     * @method \User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method \User forceCreate(array $attributes)
     * @method \User forceCreateQuietly(array $attributes = [])
     * @method _IH_User_C|\User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|\User[] get(array|string $columns = ['*'])
     * @method \User getModel()
     * @method \User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|\User[] hydrate(array $items)
     * @method \User incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_User_C|\User[] lazy(int $chunkSize = 1000)
     * @method _IH_User_C|\User[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_User_C|\User[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method \User make(array $attributes = [])
     * @method \User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|\User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Paginator|\User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method \User sole(array|string $columns = ['*'])
     * @method \User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
