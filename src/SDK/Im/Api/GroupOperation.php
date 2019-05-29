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
use Eelly\SDK\Im\Service\UidDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class GroupOperation
{
    public function muteMemberInternal(string $tid, array $members, int $mute): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid' => $tid,
            'members' => $members,
            'mute' => $mute,
        ]);
    }

    public function kickMemberInternal(string $tid, array $members): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid' => $tid,
            'members' => $members,
        ]);
    }

    public function updateManagerInternal(string $tid, array $members, array $itmIds, int $identity): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid' => $tid,
            'members' => $members,
            'itmIds' => $itmIds,
            'identity' => $identity,
        ]);
    }

    public function changeOwnerInternal(string $tid, array $newOwner): bool
    {
        return EellyClient::requestJson('im/groupOperation', __FUNCTION__, [
            'tid' => $tid,
            'newOwner' => $newOwner,
        ]);
    }
}