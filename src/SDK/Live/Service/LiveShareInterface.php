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

namespace Eelly\SDK\Live\Service;

use Eelly\DTO\UidDTO;

/**
 * 直播间分享.
 *
 * @author sunanzhi<sunanzhi@hotmail.com>
 */
interface LiveShareInterface
{
    /**
     * 直播间分享.
     *
     * @param int    $liveId     当前进入的直播间id
     * @param string $uniqueFlag 分享的唯一标识 
     * @param string $type       直播间的类型 [app-分享、pc端-分享、小程序-分享]
     * @param int    $laId       活动id
     * @param UidDTO $user       当前登陆的用户 
     * 
     * @return string
     * 
     * @requestExample({
     *     "liveId":1,
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序-分享",
     *     "laId":"4"
     * })
     * @returnExample({
     *     "code":200,
     *     "msg":"分享信息记录成功"
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function share(int $liveId, string $uniqueFlag, string $type, int $laId = 0, UidDTO $user = null):string;

    /**
     * 进入分享反馈.
     *
     * @param string $uniqueFlag 直播间分享提供的唯一标识
     * @param string $type       进入直播间的类型 [小程序进入、pc端进入]
     * @param string $clientInfo 客户端信息
     * @param int    $laId       活动id 
     *
     * @return string
     * 
     * @requestExample({
     *     "uniqueFlag":"5b0932c4c0fe9c000f131f96",
     *     "type":"小程序进入",
     *     "clientInfo":'{"ip":"127.0.0.1","brand":"apple", "model":"iphone x", "version":"6.42", "system":"os 12.01", "platform":"nothing"}',
     *     "laId":"4"
     * })
     *
     * @returnExample({
     *     "code":200,
     *     "msg":"反馈记录成功"
     * })
     *
     * @author sunanzhi<sunanzhi@hotmail.com>
     *
     * @since 2018年5月25日
     */
    public function shareFeedback(string $uniqueFlag, string $type, string $clientInfo, int $laId = 0):string;

    /**
     * 分享记录用户
     *
     * @param string $uniqueFlag 唯一标示
     * @param UidDTO $user|null 登录用户才可以使用这个接口
     * @return boolean
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function shareRecordUser(string $uniqueFlag, UidDTO $user = null):bool;

    /**
     * 获取直播间分享的拉新用户数量
     *
     * @param integer $liveId 直播间id
     * @return integer
     * 
     * @author sunanzhi <sunanzhi@hotmail.com>
     * @since 2019.3.28
     */
    public function getShareNewUser(int $liveId):int;

    /**
     * 获取用户在店铺的拉新时间
     *
     * @internal
     *
     * @param int $userId
     * @param int $storeId
     * @return int
     * @author zhangyangxun
     * @since 2019/5/8
     */
    public function getShareNewUserTime(int $userId, int $storeId): int;
}
