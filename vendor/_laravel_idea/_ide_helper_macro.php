<?php //078883ade479f11032a7d4588a23facc
/** @noinspection all */

namespace  {

    /**
     * @method int diffInDecades(null|string|\SubCarbon $dt = null, $abs = true)
     */
    class SubCarbon {}

    /**
     * @method int diffInDecades(null|string|\SubCarbonImmutable $dt = null, $abs = true)
     */
    class SubCarbonImmutable {}
}

namespace Carbon {

    /**
     * @method string calendarBerlin()
     * @method string calendarBerlinNonStatic()
     * @method $this carbonReturnType()
     * @method string closureWithDocComment()
     * @method void deprecated()
     * @method \DateInterval|false diffFromEaster($year)
     * @method int diffInBusinessDays()
     * @method void discouraged()
     * @method $this|mixed easterDate($year)
     * @method int easterDays($year = 2019)
     * @method string foo($someArg)
     * @method int getSchoolYear()
     * @method void hasSideEffects()
     * @method bool isTenDay()
     * @method string mlpFooBar()
     * @method string myPrefixFooBar()
     * @method void noParameters()
     * @method void noReturnType()
     * @method void notVariadic($params)
     * @method mixed|true otherParameterName($other = true)
     * @method void prototype()
     * @method void setDate($dateString)
     * @method void setSchoolYear($schoolYear)
     * @method void setUserTimezone($timezone)
     * @method void throwType()
     * @method void twoParameters(string $a, $b = 9)
     * @method string userFormat($format)
     * @method void variadic(...$params)
     */
    class Carbon {}

    /**
     * @method \DateInterval|false diffFromEaster($year)
     * @method $this easterDate($year)
     * @method int easterDays($year = 2019)
     * @method string mlpFooBar()
     * @method string myPrefixFooBar()
     * @method mixed|true otherParameterName($other = true)
     * @method void setUserTimezone($timezone)
     * @method string userFormat($format)
     */
    class CarbonImmutable {}

    /**
     * @method $this doMultiply()
     * @method mixed|true otherParameterName($other = true)
     * @method $this quarter()
     * @method $this quarterIfEven($value = 0)
     * @method $this repeatInvert($count = 0)
     * @method $this repeatInvert2($count = 0)
     * @method void setFactor($factor)
     * @method $this twice()
     */
    class CarbonInterval {}
}

namespace Faker {

    /**
     * @mixin \Faker\Provider\Base
     * @mixin \Faker\Provider\pt_PT\Person
     * @mixin \ArrayObject
     * @mixin \Faker\Provider\Miscellaneous
     * @mixin \Faker\Test\Fixture\Provider\FooProvider
     * @mixin \Faker\Test\Fixture\Provider\BarProvider
     */
    class Generator {}
}

namespace Illuminate\Auth {

    /**
     * @method string foo()
     */
    class SessionGuard {}
}

namespace Illuminate\Config {

    /**
     * @method string foo()
     */
    class Repository {}
}

namespace Illuminate\Console\Scheduling {

    /**
     * @method $this everyXMinutes($x)
     */
    class Event {}
}

namespace Illuminate\Cookie {

    /**
     * @method string foo()
     */
    class CookieJar {}
}

namespace Illuminate\Database\Eloquent {

    use Illuminate\Database\Query\Builder as QueryBuilder;
    use Illuminate\Support\HigherOrderTapProxy;

    /**
     * @method QueryBuilder bam()
     * @method Model|HigherOrderTapProxy createOrRestore(array $attributes = [], array $values = [])
     * @method mixed foo($bar)
     * @method mixed fooBar()
     * @method $this onlyTrashed()
     * @method int restore()
     * @method Model|HigherOrderTapProxy restoreOrCreate(array $attributes = [], array $values = [])
     * @method $this withTrashed($withTrashed = true)
     * @method $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Database\Eloquent\Relations {

    /**
     * @method string foo()
     */
    class Relation {}
}

namespace Illuminate\Database\Schema {

    use Illuminate\Support\Fluent;

    /**
     * @method Fluent foo()
     */
    class Blueprint {}

    /**
     * @method string foo()
     * @method bool hasForeignKeyForColumn(string $column, string $table, string $foreignTable)
     */
    class Builder {}
}

namespace Illuminate\Database\Schema\Grammars {

    /**
     * @method true compileReplace()
     */
    class MariaDbGrammar {}

    /**
     * @method string compileFoo()
     * @method true compileReplace()
     */
    class MySqlGrammar {}

    /**
     * @method true compileReplace()
     */
    class PostgresGrammar {}

    /**
     * @method true compileReplace()
     */
    class SQLiteGrammar {}

    /**
     * @method true compileReplace()
     */
    class SqlServerGrammar {}
}

namespace Illuminate\Events {

    /**
     * @method string foo()
     */
    class Dispatcher {}
}

namespace Illuminate\Filesystem {

    /**
     * @method string getFoo()
     */
    class Filesystem {}

    /**
     * @method mixed|string getFoo()
     */
    class FilesystemAdapter {}
}

namespace Illuminate\Foundation {

    /**
     * @method bool|string foo()
     */
    class Application {}

    /**
     * @method string image($asset, $buildDir = null)
     */
    class Vite {}
}

namespace Illuminate\Foundation\Testing {

    /**
     * @method $this assertInertia(\Closure|null $callback = null)
     * @method array inertiaPage()
     */
    class TestResponse {}
}

namespace Illuminate\Http {

    /**
     * @method $this banner($message)
     * @method $this dangerBanner($message)
     * @method $this warningBanner($message)
     */
    class RedirectResponse {}

    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method true inertia()
     */
    class Request {}
}

namespace Illuminate\Http\Client {

    /**
     * @method string customMethod()
     */
    class Request {}

    /**
     * @method string customMethod()
     */
    class ResponseSequence {}
}

namespace Illuminate\Mail {

    /**
     * @method $this fromInvoice($name)
     * @method int size()
     */
    class Attachment {}

    /**
     * @method string test(string $str)
     */
    class MailManager {}

    /**
     * @method string foo()
     */
    class Mailer {}
}

namespace Illuminate\Redis {

    /**
     * @mixin \Illuminate\Redis\Connections\PhpRedisConnection
     * @mixin \Redis
     */
    class RedisManager {}
}

namespace Illuminate\Redis\Connections {

    /**
     * @method string foo()
     */
    class Connection {}
}

namespace Illuminate\Routing {

    /**
     * @method $this breadcrumb($breadcrumb)
     */
    class Route {}

    /**
     * @method Route inertia($uri, $component, $props = [])
     * @method void webhook()
     */
    class Router {}
}

namespace Illuminate\Support {

    /**
     * @method int diffInDecades(Carbon|null $dt = null, $abs = true)
     * @method $this twoDaysAgoAtNoon()
     */
    class Carbon {}

    /**
     * @method string returnNonDate()
     */
    class DateFactory {}

    /**
     * @method $this foo()
     */
    class Fluent {}

    /**
     * @method $this present()
     */
    class Optional {}

    /**
     * @method $this andSomeMoreGranularControl()
     * @method $this forSomeConfiguredAmountOfTime()
     * @method $this setDuration($duration)
     * @method $this useSomeOtherAmountOfTime()
     */
    class Sleep {}

    /**
     * @method $this myMacro()
     */
    class Uri {}
}

namespace Illuminate\Support\Testing\Fakes {

    /**
     * @method string foo()
     */
    class EventFake {}

    /**
     * @method string test(string $str)
     */
    class MailFake {}
}

namespace Illuminate\Testing {

    /**
     * @method string foo()
     */
    class TestComponent {}

    /**
     * @method $this assertInertia(\Closure|null $callback = null)
     * @method string foo()
     * @method array inertiaPage()
     */
    class TestResponse {}
}

namespace Illuminate\Testing\Fluent {

    /**
     * @method mixed myCustomMacro()
     */
    class AssertableJson {}
}

namespace Illuminate\Tests\Support {

    /**
     * @method string flushMethod()
     * @method \Closure methodOne($value)
     * @method string methodThree()
     * @method mixed|string tryInstance()
     * @method mixed tryStatic()
     */
    class TestMacroable {}
}

namespace Illuminate\Validation {

    /**
     * @method string maxLength(int $length)
     * @method string phone()
     */
    class Rule {}
}

namespace Illuminate\Validation\Rules {

    /**
     * @method mixed laravelEmployee()
     */
    class Email {}

    /**
     * @method mixed toDocument()
     */
    class File {}
}

namespace Illuminate\View {

    /**
     * @method string getFoo()
     */
    class Factory {}
}

namespace Inertia {

    /**
     * @method string foo()
     */
    class Response {}

    /**
     * @method string foo()
     */
    class ResponseFactory {}
}
