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

namespace Eelly\SDK\Live\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Live\Service\LiveInterface;
use SDK\Live\DTO\LiveDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Live implements LiveInterface
{
    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLive(int $liveId): LiveDTO
    {
        return EellyClient::request('live/live', 'getLive', true, $liveId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getLiveAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'getLive', false, $liveId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLive(array $data): bool
    {
        return EellyClient::request('live/live', 'addLive', true, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addLiveAsync(array $data)
    {
        return EellyClient::request('live/live', 'addLive', false, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLive(int $liveId, array $data): bool
    {
        return EellyClient::request('live/live', 'updateLive', true, $liveId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateLiveAsync(int $liveId, array $data)
    {
        return EellyClient::request('live/live', 'updateLive', false, $liveId, $data);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLive(int $liveId): bool
    {
        return EellyClient::request('live/live', 'deleteLive', true, $liveId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteLiveAsync(int $liveId)
    {
        return EellyClient::request('live/live', 'deleteLive', false, $liveId);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLivePage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('live/live', 'listLivePage', true, $condition, $currentPage, $limit);
    }

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listLivePageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('live/live', 'listLivePage', false, $condition, $currentPage, $limit);
    }

    /**
     * 直播管理列表.
     *
     * @param array $condition 查询条件
     * @param array $condition['storeIds'] 店铺ID一维数据
     * @param array $condition['inStatus'] 查询状态
     * @param int $condition['scheduleDate'] 开播日期
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @param string $order 排序
     * @return array
     * @requestExample({"data":["storeIds":[148086,148087],"inStatus":[0,1],"scheduleDate":"1516291200"],"currentPage":1,"limit":10,"order":"base"})
     * @returnExample({"items":[{"liveId":1,"userId":2,"buyerId":148086,"storeId":148086,"title":"11","image":"1111","scheduleTime":1516353883,"sort":255,"status":0,"createdTime":1516204800,"userCount":2}],"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月22日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getLiveList(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'base'): array
    {
        return EellyClient::request('live/live', 'getLiveList', true, $condition, $currentPage, $limit, $order);
    }

    /**
     * 直播管理列表.
     *
     * @param array $condition 查询条件
     * @param array $condition['storeIds'] 店铺ID一维数据
     * @param array $condition['inStatus'] 查询状态
     * @param int $condition['scheduleDate'] 开播日期
     * @param int $currentPage 第几页
     * @param int $limit 每页条数
     * @param string $order 排序
     * @return array
     * @requestExample({"data":["storeIds":[148086,148087],"inStatus":[0,1],"scheduleDate":"1516291200"],"currentPage":1,"limit":10,"order":"base"})
     * @returnExample({"items":[{"liveId":1,"userId":2,"buyerId":148086,"storeId":148086,"title":"11","image":"1111","scheduleTime":1516353883,"sort":255,"status":0,"createdTime":1516204800,"userCount":2}],"page":{"totalPages":1,"totalItems":2,"current":1,"limit":10}})
     * @author 肖俊明<xiaojunming@eelly.net>
     * @since 2018年01月22日
     * @Validation(
     *  @PresenceOf(0,{message : "数据不能为空"}),
     *  @OperatorValidator(1,{message:"非法第几页",operator:["gt",0]}),
     *  @OperatorValidator(2,{message:"非法每页条数",operator:["gt",0]})
     *)
     */
    public function getLiveListAsync(array $condition, int $currentPage = 1, int $limit = 10, string $order = 'base')
    {
        return EellyClient::request('live/live', 'getLiveList', false, $condition, $currentPage, $limit, $order);
    }

    /**
     * 根据传过来的条件返回对应的数据
     *
     * @param array $condition 传递参数
     * @param string $field  字段
     * @param string $order  排序
     * @return array
     *
     * @requestExample({
     *         "condition":["gteScheduleTime":1516353823, "ltScheduleTime":1516353883],
     *         "field":"base",
     *         "order":"base"
     * })
     *
     * @returnExample({
     *   [{"liveId":"1","userId":"0","storeId":"148086","title":"11","image":"1111","region":"11","pushUrl":"111","share":"11","scheduleTime":"1516353883","startTime":"1421510400","endTime":"1516031999","sort":"1","status":"2","createdTime":"1516204800"}]
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.22
     */
    public function getLiveListByCondition(array $condition, string $field = 'base', string $order = 'base')
    {
        return EellyClient::request('live/live', 'getLiveListByCondition', true, $condition, $field, $order);
    }

    /**
     * 根据传过来的条件返回对应的数据
     *
     * @param array $condition 传递参数
     * @param string $field  字段
     * @param string $order  排序
     * @return array
     *
     * @requestExample({
     *         "condition":["gteScheduleTime":1516353823, "ltScheduleTime":1516353883],
     *         "field":"base",
     *         "order":"base"
     * })
     *
     * @returnExample({
     *   [{"liveId":"1","userId":"0","storeId":"148086","title":"11","image":"1111","region":"11","pushUrl":"111","share":"11","scheduleTime":"1516353883","startTime":"1421510400","endTime":"1516031999","sort":"1","status":"2","createdTime":"1516204800"}]
     * })
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2018.01.22
     */
    public function getLiveListByConditionAsync(array $condition, string $field = 'base', string $order = 'base')
    {
        return EellyClient::request('live/live', 'getLiveListByCondition', false, $condition, $field, $order);
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