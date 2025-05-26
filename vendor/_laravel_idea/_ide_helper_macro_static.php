<?php //e32a772e6a3160d4dd190784be2a4225
/** @noinspection all */

namespace  {

    /**
     * @method static int diffInDecades(null|string|\SubCarbon $dt = null, $abs = true)
     */
    class SubCarbon {}

    /**
     * @method static int diffInDecades(null|string|\SubCarbonImmutable $dt = null, $abs = true)
     */
    class SubCarbonImmutable {}
}

namespace Carbon {

    /**
     * @method static string calendarBerlin()
     * @method static string calendarBerlinNonStatic()
     * @method static $this carbonReturnType()
     * @method static string closureWithDocComment()
     * @method static void deprecated()
     * @method static \DateInterval|false diffFromEaster($year)
     * @method static int diffInBusinessDays()
     * @method static void discouraged()
     * @method static $this|mixed easterDate($year)
     * @method static int easterDays($year = 2019)
     * @method static string foo($someArg)
     * @method static int getSchoolYear()
     * @method static void hasSideEffects()
     * @method static bool isTenDay()
     * @method static string mlpFooBar()
     * @method static string myPrefixFooBar()
     * @method static void noParameters()
     * @method static void noReturnType()
     * @method static void notVariadic($params)
     * @method static mixed|true otherParameterName($other = true)
     * @method static void prototype()
     * @method static void setDate($dateString)
     * @method static void setSchoolYear($schoolYear)
     * @method static void setUserTimezone($timezone)
     * @method static void throwType()
     * @method static void twoParameters(string $a, $b = 9)
     * @method static string userFormat($format)
     * @method static void variadic(...$params)
     */
    class Carbon {}

    /**
     * @method static \DateInterval|false diffFromEaster($year)
     * @method static $this easterDate($year)
     * @method static int easterDays($year = 2019)
     * @method static string mlpFooBar()
     * @method static string myPrefixFooBar()
     * @method static mixed|true otherParameterName($other = true)
     * @method static void setUserTimezone($timezone)
     * @method static string userFormat($format)
     */
    class CarbonImmutable {}

    /**
     * @method static $this doMultiply()
     * @method static mixed|true otherParameterName($other = true)
     * @method static $this quarter()
     * @method static $this quarterIfEven($value = 0)
     * @method static $this repeatInvert($count = 0)
     * @method static $this repeatInvert2($count = 0)
     * @method static void setFactor($factor)
     * @method static $this twice()
     */
    class CarbonInterval {}
}

namespace Illuminate\Auth {

    /**
     * @method static string foo()
     */
    class SessionGuard {}
}

namespace Illuminate\Config {

    /**
     * @method static string foo()
     */
    class Repository {}
}

namespace Illuminate\Console\Scheduling {

    /**
     * @method static $this everyXMinutes($x)
     */
    class Event {}
}

namespace Illuminate\Cookie {

    /**
     * @method static string foo()
     */
    class CookieJar {}
}

namespace Illuminate\Database\Eloquent {

    use Illuminate\Database\Query\Builder as QueryBuilder;
    use Illuminate\Support\HigherOrderTapProxy;

    /**
     * @method static QueryBuilder bam()
     * @method static Model|HigherOrderTapProxy createOrRestore(array $attributes = [], array $values = [])
     * @method static mixed foo($bar)
     * @method static mixed fooBar()
     * @method static $this onlyTrashed()
     * @method static int restore()
     * @method static Model|HigherOrderTapProxy restoreOrCreate(array $attributes = [], array $values = [])
     * @method static $this withTrashed($withTrashed = true)
     * @method static $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Database\Eloquent\Relations {

    /**
     * @method static string foo()
     */
    class Relation {}
}

namespace Illuminate\Database\Schema {

    use Illuminate\Support\Fluent;

    /**
     * @method static Fluent foo()
     */
    class Blueprint {}

    /**
     * @method static string foo()
     * @method static bool hasForeignKeyForColumn(string $column, string $table, string $foreignTable)
     */
    class Builder {}
}

namespace Illuminate\Database\Schema\Grammars {

    /**
     * @method static true compileReplace()
     */
    class MariaDbGrammar {}

    /**
     * @method static string compileFoo()
     * @method static true compileReplace()
     */
    class MySqlGrammar {}

    /**
     * @method static true compileReplace()
     */
    class PostgresGrammar {}

    /**
     * @method static true compileReplace()
     */
    class SQLiteGrammar {}

    /**
     * @method static true compileReplace()
     */
    class SqlServerGrammar {}
}

namespace Illuminate\Events {

    /**
     * @method static string foo()
     */
    class Dispatcher {}
}

namespace Illuminate\Filesystem {

    /**
     * @method static string getFoo()
     */
    class Filesystem {}

    /**
     * @method static mixed|string getFoo()
     */
    class FilesystemAdapter {}
}

namespace Illuminate\Foundation {

    /**
     * @method static bool|string foo()
     */
    class Application {}

    /**
     * @method static string image($asset, $buildDir = null)
     */
    class Vite {}
}

namespace Illuminate\Foundation\Testing {

    /**
     * @method static $this assertInertia(\Closure|null $callback = null)
     * @method static array inertiaPage()
     */
    class TestResponse {}
}

namespace Illuminate\Http {

    /**
     * @method static $this banner($message)
     * @method static $this dangerBanner($message)
     * @method static $this warningBanner($message)
     */
    class RedirectResponse {}

    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method static true inertia()
     */
    class Request {}
}

namespace Illuminate\Http\Client {

    /**
     * @method static string customMethod()
     */
    class Request {}

    /**
     * @method static string customMethod()
     */
    class ResponseSequence {}
}

namespace Illuminate\Mail {

    /**
     * @method static $this fromInvoice($name)
     * @method static int size()
     */
    class Attachment {}

    /**
     * @method static string test(string $str)
     */
    class MailManager {}

    /**
     * @method static string foo()
     */
    class Mailer {}
}

namespace Illuminate\Redis\Connections {

    /**
     * @method static string foo()
     */
    class Connection {}
}

namespace Illuminate\Routing {

    /**
     * @method static $this breadcrumb($breadcrumb)
     */
    class Route {}

    /**
     * @method static Route inertia($uri, $component, $props = [])
     * @method static void webhook()
     */
    class Router {}
}

namespace Illuminate\Support {

    /**
     * @method static int diffInDecades(Carbon|null $dt = null, $abs = true)
     * @method static $this twoDaysAgoAtNoon()
     */
    class Carbon {}

    /**
     * @method static string returnNonDate()
     */
    class DateFactory {}

    /**
     * @method static $this foo()
     */
    class Fluent {}

    /**
     * @method static $this present()
     */
    class Optional {}

    /**
     * @method static $this andSomeMoreGranularControl()
     * @method static $this forSomeConfiguredAmountOfTime()
     * @method static $this setDuration($duration)
     * @method static $this useSomeOtherAmountOfTime()
     */
    class Sleep {}

    /**
     * @method static $this myMacro()
     */
    class Uri {}
}

namespace Illuminate\Support\Testing\Fakes {

    /**
     * @method static string foo()
     */
    class EventFake {}

    /**
     * @method static string test(string $str)
     */
    class MailFake {}
}

namespace Illuminate\Testing {

    /**
     * @method static string foo()
     */
    class TestComponent {}

    /**
     * @method static $this assertInertia(\Closure|null $callback = null)
     * @method static string foo()
     * @method static array inertiaPage()
     */
    class TestResponse {}
}

namespace Illuminate\Testing\Fluent {

    /**
     * @method static mixed myCustomMacro()
     */
    class AssertableJson {}
}

namespace Illuminate\Tests\Support {

    /**
     * @method static string flushMethod()
     * @method static \Closure methodOne($value)
     * @method static string methodThree()
     * @method static mixed|string tryInstance()
     * @method static mixed tryStatic()
     */
    class TestMacroable {}
}

namespace Illuminate\Validation {

    /**
     * @method static string maxLength(int $length)
     * @method static string phone()
     */
    class Rule {}
}

namespace Illuminate\Validation\Rules {

    /**
     * @method static mixed laravelEmployee()
     */
    class Email {}

    /**
     * @method static mixed toDocument()
     */
    class File {}
}

namespace Illuminate\View {

    /**
     * @method static string getFoo()
     */
    class Factory {}
}

namespace Inertia {

    /**
     * @method static string foo()
     */
    class Response {}

    /**
     * @method static string foo()
     */
    class ResponseFactory {}
}
