<?php //4b1346944651382407496ee111abeccb
/** @noinspection all */

namespace Laravel\Fortify\Tests\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Fortify\Tests\Models\_IH_UserWithTwoFactor_C;
    use LaravelIdea\Helper\Laravel\Fortify\Tests\Models\_IH_UserWithTwoFactor_QB;

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
     * @method static _IH_UserWithTwoFactor_QB onWriteConnection()
     * @method _IH_UserWithTwoFactor_QB newQuery()
     * @method static _IH_UserWithTwoFactor_QB on(null|string $connection = null)
     * @method static _IH_UserWithTwoFactor_QB query()
     * @method static _IH_UserWithTwoFactor_QB with(array|string $relations)
     * @method _IH_UserWithTwoFactor_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserWithTwoFactor_C|UserWithTwoFactor[] all()
     * @foreignLinks
     * @mixin _IH_UserWithTwoFactor_QB
     */
    class UserWithTwoFactor extends Model {}
}
