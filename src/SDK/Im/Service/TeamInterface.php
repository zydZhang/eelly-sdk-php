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

namespace Eelly\SDK\Im\Service;

/**
 * IM群主接口层
 *
 */
interface TeamInterface
{
    /**
     * 获取主播粉丝群列表信息
     * 
     * @param int $stroeId 店铺id
     * @param int $page 分页
     * @param int $limit 每页显示数量, 默认20
     * 
     * @returnExample({"totalMember":0,"teams":[{"tid":"123","logo":"https:\/\/img09.eelly.com","title":"bobo1972-官方直播①群","subTitle":"潜规则","status":0}]})
     * 
     * ### 返回数据说明
     *
     * 字段|类型|说明
     * --------|-------|--------------
     * totalMember | int | 已进群人数
     * teams | array | 群列表
     * teams[]['tid'] | int | 群id
     * teams[]['logo'] | string | 群头像
     * teams[]['title'] | string | 标题
     * teams[]['subTitle'] | string | 进群条件
     * teams[]['status'] | int | 状态: 0:未进群 1:已进群 2:人满
     * 
     * @author wechan
     * @since 2019年04月18日
     */
    public function getFansGroup(int $stroeId, int $page = 1, int $limit = 20): array;
}