<?php //d7ae1ed8f2b57eb45a562a9486518e26
/** @noinspection all */

namespace App\Integration\Database {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use LaravelIdea\Helper\App\Integration\Database\_IH_Comment_C;
    use LaravelIdea\Helper\App\Integration\Database\_IH_Comment_QB;
    use LaravelIdea\Helper\App\Integration\Database\_IH_Like_C;
    use LaravelIdea\Helper\App\Integration\Database\_IH_Like_QB;
    use LaravelIdea\Helper\App\Integration\Database\_IH_Post_C;
    use LaravelIdea\Helper\App\Integration\Database\_IH_Post_QB;

    /**
     * @method static _IH_Comment_QB onWriteConnection()
     * @method _IH_Comment_QB newQuery()
     * @method static _IH_Comment_QB on(null|string $connection = null)
     * @method static _IH_Comment_QB query()
     * @method static _IH_Comment_QB with(array|string $relations)
     * @method _IH_Comment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Comment_C|Comment[] all()
     * @mixin _IH_Comment_QB
     */
    class Comment extends Model {}

    /**
     * @method static _IH_Like_QB onWriteConnection()
     * @method _IH_Like_QB newQuery()
     * @method static _IH_Like_QB on(null|string $connection = null)
     * @method static _IH_Like_QB query()
     * @method static _IH_Like_QB with(array|string $relations)
     * @method _IH_Like_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Like_C|Like[] all()
     * @mixin _IH_Like_QB
     */
    class Like extends Model {}

    /**
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property _IH_Like_C|Like[] $likes
     * @property-read int $likes_count
     * @method HasMany|_IH_Like_QB likes()
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Post_C|Post[] all()
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}
}
