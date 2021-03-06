<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Im\Api;

use Eelly\SDK\EellyClient;

/**
 * @author shadonTools<localhost.shell@gmail.com>
 */
class GroupOperation
{
    public static function muteMemberInternal(string $tid, array $accids, int $mute): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid'    => $tid,
            'accids' => $accids,
            'mute'   => $mute,
        ]);
    }

    public static function kickMemberInternal(string $tid, array $accids): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid'    => $tid,
            'accids' => $accids,
        ]);
    }

    public static function updateManagerInternal(string $tid, array $accids, int $identity): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid'      => $tid,
            'accids'   => $accids,
            'identity' => $identity,
        ]);
    }

    public static function changeOwnerInternal(string $tid, array $newOwner): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid'      => $tid,
            'newOwner' => $newOwner,
        ]);
    }

    public static function leaveTeam(string $tid):bool 
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid'      => $tid
        ]);
    }
}
