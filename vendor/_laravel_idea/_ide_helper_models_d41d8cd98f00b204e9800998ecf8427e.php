<?php //39d9fda00ba956e98bc9faa7a1144437
/** @noinspection all */

namespace  {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\_IH_Admin_C;
    use LaravelIdea\Helper\_IH_Admin_QB;
    use LaravelIdea\Helper\_IH_Comment_C;
    use LaravelIdea\Helper\_IH_Comment_QB;
    use LaravelIdea\Helper\_IH_CustomNotification_C;
    use LaravelIdea\Helper\_IH_CustomNotification_QB;
    use LaravelIdea\Helper\_IH_FolioTag_C;
    use LaravelIdea\Helper\_IH_FolioTag_QB;
    use LaravelIdea\Helper\_IH_FolioUser_C;
    use LaravelIdea\Helper\_IH_FolioUser_QB;
    use LaravelIdea\Helper\_IH_PostCategory_C;
    use LaravelIdea\Helper\_IH_PostCategory_QB;
    use LaravelIdea\Helper\_IH_Post_C;
    use LaravelIdea\Helper\_IH_Post_QB;
    use LaravelIdea\Helper\_IH_Reply_C;
    use LaravelIdea\Helper\_IH_Reply_QB;
    use LaravelIdea\Helper\_IH_Tag_C;
    use LaravelIdea\Helper\_IH_Tag_QB;
    use LaravelIdea\Helper\_IH_User_C;
    use LaravelIdea\Helper\_IH_User_QB;

    /**
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_Admin_QB onWriteConnection()
     * @method _IH_Admin_QB newQuery()
     * @method static _IH_Admin_QB on(null|string $connection = null)
     * @method static _IH_Admin_QB query()
     * @method static _IH_Admin_QB with(array|string $relations)
     * @method _IH_Admin_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Admin_C|\Admin[] all()
     * @mixin _IH_Admin_QB
     */
    class Admin extends Model {}

    /**
     * @method static _IH_Comment_QB onWriteConnection()
     * @method _IH_Comment_QB newQuery()
     * @method static _IH_Comment_QB on(null|string $connection = null)
     * @method static _IH_Comment_QB query()
     * @method static _IH_Comment_QB with(array|string $relations)
     * @method _IH_Comment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Comment_C|\Comment[] all()
     * @mixin _IH_Comment_QB
     */
    class Comment extends Model {}

    /**
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _IH_CustomNotification_QB onWriteConnection()
     * @method _IH_CustomNotification_QB newQuery()
     * @method static _IH_CustomNotification_QB on(null|string $connection = null)
     * @method static _IH_CustomNotification_QB query()
     * @method static _IH_CustomNotification_QB with(array|string $relations)
     * @method _IH_CustomNotification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CustomNotification_C|\CustomNotification[] all()
     * @mixin _IH_CustomNotification_QB
     */
    class CustomNotification extends Model {}

    /**
     * @method static _IH_FolioTag_QB onWriteConnection()
     * @method _IH_FolioTag_QB newQuery()
     * @method static _IH_FolioTag_QB on(null|string $connection = null)
     * @method static _IH_FolioTag_QB query()
     * @method static _IH_FolioTag_QB with(array|string $relations)
     * @method _IH_FolioTag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FolioTag_C|\FolioTag[] all()
     * @mixin _IH_FolioTag_QB
     */
    class FolioTag extends Model {}

    /**
     * @method static _IH_FolioUser_QB onWriteConnection()
     * @method _IH_FolioUser_QB newQuery()
     * @method static _IH_FolioUser_QB on(null|string $connection = null)
     * @method static _IH_FolioUser_QB query()
     * @method static _IH_FolioUser_QB with(array|string $relations)
     * @method _IH_FolioUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FolioUser_C|\FolioUser[] all()
     * @mixin _IH_FolioUser_QB
     */
    class FolioUser extends Model {}

    /**
     * @method static _IH_Post_QB onWriteConnection()
     * @method _IH_Post_QB newQuery()
     * @method static _IH_Post_QB on(null|string $connection = null)
     * @method static _IH_Post_QB query()
     * @method static _IH_Post_QB with(array|string $relations)
     * @method _IH_Post_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Post_C|\Post[] all()
     * @mixin _IH_Post_QB
     */
    class Post extends Model {}

    /**
     * @method static _IH_PostCategory_QB onWriteConnection()
     * @method _IH_PostCategory_QB newQuery()
     * @method static _IH_PostCategory_QB on(null|string $connection = null)
     * @method static _IH_PostCategory_QB query()
     * @method static _IH_PostCategory_QB with(array|string $relations)
     * @method _IH_PostCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PostCategory_C|\PostCategory[] all()
     * @mixin _IH_PostCategory_QB
     */
    class PostCategory extends Model {}

    /**
     * @method static _IH_Reply_QB onWriteConnection()
     * @method _IH_Reply_QB newQuery()
     * @method static _IH_Reply_QB on(null|string $connection = null)
     * @method static _IH_Reply_QB query()
     * @method static _IH_Reply_QB with(array|string $relations)
     * @method _IH_Reply_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Reply_C|\Reply[] all()
     * @mixin _IH_Reply_QB
     */
    class Reply extends Model {}

    /**
     * @method static _IH_Tag_QB onWriteConnection()
     * @method _IH_Tag_QB newQuery()
     * @method static _IH_Tag_QB on(null|string $connection = null)
     * @method static _IH_Tag_QB query()
     * @method static _IH_Tag_QB with(array|string $relations)
     * @method _IH_Tag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tag_C|\Tag[] all()
     * @mixin _IH_Tag_QB
     */
    class Tag extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property int|null $current_team_id
     * @property string|null $profile_photo_path
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $two_factor_secret
     * @property string|null $two_factor_recovery_codes
     * @property Carbon|null $two_factor_confirmed_at
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|\User[] all()
     * @foreignLinks
     * @mixin _IH_User_QB
     * @method static \UserFactory factory(callable|int|mixed[]|null $count = null, callable|mixed[] $state = [])
     */
    class User extends Model {}
}
