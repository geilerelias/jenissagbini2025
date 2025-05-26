<?php //dc790930a7740779400e1ff0aa92a163
/** @noinspection all */

namespace Illuminate\Broadcasting {

    /**
     * @method static void dispatch(array|Channel|string $channels)
     * @method static PendingBroadcast broadcast(array|Channel|string $channels)
     */
    class AnonymousEvent {}
}

namespace Illuminate\Bus {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(PendingBatch $batch)
     * @method static mixed dispatchSync(PendingBatch $batch)
     */
    class ChainedBatch {}
}

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static mixed dispatchSync(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Foundation\Events {

    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch(array $stubs)
     * @method static PendingBroadcast broadcast(array $stubs)
     */
    class PublishingStubs {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;

    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static mixed dispatchSync(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Illuminate\Tests\Integration\Database {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(string $email)
     * @method static mixed dispatchSync(string $email)
     */
    class EloquentTransactionWithAfterCommitTestsJob {}
}

namespace Illuminate\Tests\Integration\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(string $id)
     * @method static mixed dispatchSync(string $id)
     */
    class BatchJob {}

    /**
     * @method static PendingDispatch dispatch(MyTestModel $model)
     * @method static mixed dispatchSync(MyTestModel $model)
     */
    class DeleteMissingModelJob {}

    /**
     * @method static PendingDispatch dispatch($value)
     * @method static mixed dispatchSync($value)
     */
    class Job {}

    /**
     * @method static PendingDispatch dispatch(string $id)
     * @method static mixed dispatchSync(string $id)
     */
    class JobChainAddingAppendingBatch {}

    /**
     * @method static PendingDispatch dispatch(string $id)
     * @method static mixed dispatchSync(string $id)
     */
    class JobChainAddingPrependedBatch {}

    /**
     * @method static PendingDispatch dispatch(string $id)
     * @method static mixed dispatchSync(string $id)
     */
    class JobChainingNamedTestJob {}

    /**
     * @method static PendingDispatch dispatch(string $id, int $times = 0)
     * @method static mixed dispatchSync(string $id, int $times = 0)
     */
    class JobChainingTestBatchedJob {}
}

namespace Laravel\Fortify\Events {

    use App\Models\User;
    use Illuminate\Broadcasting\PendingBroadcast;
    use Illuminate\Contracts\Auth\Authenticatable;

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class PasswordUpdatedViaController {}

    /**
     * @method static void dispatch(Authenticatable $user, string $code)
     * @method static PendingBroadcast broadcast(Authenticatable $user, string $code)
     */
    class RecoveryCodeReplaced {}

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class RecoveryCodesGenerated {}

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationChallenged {}

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationConfirmed {}

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationDisabled {}

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationEnabled {}

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationFailed {}

    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class ValidTwoFactorAuthenticationCodeProvided {}
}

namespace Laravel\Jetstream\Events {

    use App\Models\Team;
    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch($owner)
     * @method static PendingBroadcast broadcast($owner)
     */
    class AddingTeam {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class AddingTeamMember {}

    /**
     * @method static void dispatch($team, $email, $role)
     * @method static PendingBroadcast broadcast($team, $email, $role)
     */
    class InvitingTeamMember {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class RemovingTeamMember {}

    /**
     * @method static void dispatch(Team $team)
     * @method static PendingBroadcast broadcast(Team $team)
     */
    class TeamCreated {}

    /**
     * @method static void dispatch(Team $team)
     * @method static PendingBroadcast broadcast(Team $team)
     */
    class TeamDeleted {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberAdded {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberRemoved {}

    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberUpdated {}

    /**
     * @method static void dispatch(Team $team)
     * @method static PendingBroadcast broadcast(Team $team)
     */
    class TeamUpdated {}
}
