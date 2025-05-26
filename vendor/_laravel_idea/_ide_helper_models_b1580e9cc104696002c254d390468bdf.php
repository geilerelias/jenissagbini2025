<?php //94d09d43ea0d4c8973929406b533abcd
/** @noinspection all */

namespace Laravel\Fortify\Tests {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Laravel\Fortify\Tests\_IH_TestConfirmPasswordUser_C;
    use LaravelIdea\Helper\Laravel\Fortify\Tests\_IH_TestConfirmPasswordUser_QB;
    use LaravelIdea\Helper\Laravel\Fortify\Tests\_IH_TestTwoFactorRecoveryCodeUser_C;
    use LaravelIdea\Helper\Laravel\Fortify\Tests\_IH_TestTwoFactorRecoveryCodeUser_QB;

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
     * @method static _IH_TestConfirmPasswordUser_QB onWriteConnection()
     * @method _IH_TestConfirmPasswordUser_QB newQuery()
     * @method static _IH_TestConfirmPasswordUser_QB on(null|string $connection = null)
     * @method static _IH_TestConfirmPasswordUser_QB query()
     * @method static _IH_TestConfirmPasswordUser_QB with(array|string $relations)
     * @method _IH_TestConfirmPasswordUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TestConfirmPasswordUser_C|TestConfirmPasswordUser[] all()
     * @foreignLinks
     * @mixin _IH_TestConfirmPasswordUser_QB
     */
    class TestConfirmPasswordUser extends Model {}

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
     * @method static _IH_TestTwoFactorRecoveryCodeUser_QB onWriteConnection()
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB newQuery()
     * @method static _IH_TestTwoFactorRecoveryCodeUser_QB on(null|string $connection = null)
     * @method static _IH_TestTwoFactorRecoveryCodeUser_QB query()
     * @method static _IH_TestTwoFactorRecoveryCodeUser_QB with(array|string $relations)
     * @method _IH_TestTwoFactorRecoveryCodeUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TestTwoFactorRecoveryCodeUser_C|TestTwoFactorRecoveryCodeUser[] all()
     * @foreignLinks
     * @mixin _IH_TestTwoFactorRecoveryCodeUser_QB
     */
    class TestTwoFactorRecoveryCodeUser extends Model {}
}
