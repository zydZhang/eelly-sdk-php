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

namespace Eelly\SDK\EellyOldCode\Api\Member\Profile;

use Eelly\SDK\EellyClient;

/**
 * Class Profile.
 *
 *  modules/Member/Service/Profile/ProfileService.php
 *
 * @author hehui<hehui@eelly.net>
 */
class Profile
{
    /**
     * @param $userIds
     * @param $role
     * @param $paramType
     * @param $type
     *
     * @return mixed
     */
    public function getUserCommonInfo($userIds, $role, $paramType = [1], $type = 3)
    {
        return EellyClient::request('eellyOldCode/member/profile/profile', __FUNCTION__, true, $userIds, $role, $paramType, $type);
    }

    /**
     * @param $userId
     *
     * @throws \ErrorException
     *
     * @return mixed
     */
    public function myInfoIndex($userId)
    {
        return EellyClient::request('eellyOldCode/member/profile/profile', __FUNCTION__, true, $userId);
    }

    /**
     * 获取平台黑名单.
     *
     * @return array
     *
     * @author sunanzhi <sunanzhi@hotmail.com>
     *
     * @since 2019.2.14
     */
    public function getAllBlackList()
    {
        return EellyClient::request('eellyOldCode/member/profile/profile', __FUNCTION__, true);
    }
}
