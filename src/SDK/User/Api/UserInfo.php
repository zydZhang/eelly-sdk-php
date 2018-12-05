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

namespace Eelly\SDK\User\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\User\Service\UserInfoInterface;
use Eelly\DTO\UidDTO;

/**
 * Class UserInfo.
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class UserInfo implements UserInfoInterface
{
    /**
     * 获取一条用户信息.
     *
     * @param int $userId 用户id
     *
     * @return array
     *
     *@author hehui<runphp@dingtalk.com>
     */
    public function getOne(int $userId): array
    {
        return EellyClient::request('user/userInfo', 'getOne', true, $userId);
    }

    /**
     * 获取一条用户信息.
     *
     * @param int $userId 用户id
     *
     * @return array
     *
     *@author hehui<runphp@dingtalk.com>
     */
    public function getOneAsync(int $userId)
    {
        return EellyClient::request('user/userInfo', 'getOne', false, $userId);
    }

    /**
     * 获取多条用户信息.
     *
     * @param array $userIds 用户id列表
     *
     * @return array
     *
     * @author hehui<runphp@dingtalk.com>
     */
    public function getList(array $userIds): array
    {
        return EellyClient::request('user/userInfo', 'getList', true, $userIds);
    }

    /**
     * 获取多条用户信息.
     *
     * @param array $userIds 用户id列表
     *
     * @return array
     *
     * @author hehui<runphp@dingtalk.com>
     */
    public function getListAsync(array $userIds)
    {
        return EellyClient::request('user/userInfo', 'getList', false, $userIds);
    }

    /**
     * 获取申请提现的用户的信息
     *
     * @param array $userIds
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-21
     */
    public function getWithdrawUserInfo(array $userIds): array
    {
        return EellyClient::request('user/userInfo', 'getWithdrawUserInfo', true, $userIds);
    }

    /**
     * 获取申请提现的用户的信息
     *
     * @param array $userIds
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-11-21
     */
    public function getWithdrawUserInfoAsync(array $userIds)
    {
        return EellyClient::request('user/userInfo', 'getWithdrawUserInfo', false, $userIds);
    }

    /**
     * 根据条件批量获取用户信息
     *
     * @param array  $condition
     * @param string $fieldScope
     * @param UidDTO $uidDTO
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-12-04
     */
    public function getListByCondition(array $condition, string $fieldScope, UidDTO $uidDTO = null): array
    {
        return EellyClient::request('user/userInfo', 'getListByCondition', true, $condition, $fieldScope, $uidDTO);
    }

    /**
     * 根据条件批量获取用户信息
     *
     * @param array  $condition
     * @param string $fieldScope
     * @param UidDTO $uidDTO
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-12-04
     */
    public function getListByConditionAsync(array $condition, string $fieldScope, UidDTO $uidDTO = null)
    {
        return EellyClient::request('user/userInfo', 'getListByCondition', false, $condition, $fieldScope, $uidDTO);
    }

    /**
     * 后台会员列表
     *
     * @param array  $condition
     * @param string $orderBy
     * @param int    $page
     * @param int    $limit
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-12-05
     */
    public function getManageUserPage(array $condition, string $orderBy, int $page = 1, int $limit = 10): array
    {
        return EellyClient::request('user/userInfo', 'getManageUserPage', true, $condition, $orderBy, $page, $limit);
    }

    /**
     * 后台会员列表
     *
     * @param array  $condition
     * @param string $orderBy
     * @param int    $page
     * @param int    $limit
     * @return array
     *
     * @author zhangyangxun
     * @since 2018-12-05
     */
    public function getManageUserPageAsync(array $condition, string $orderBy, int $page = 1, int $limit = 10)
    {
        return EellyClient::request('user/userInfo', 'getManageUserPage', false, $condition, $orderBy, $page, $limit);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}
