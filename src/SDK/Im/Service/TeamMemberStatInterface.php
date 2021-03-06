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
 * Interface TeamMemberStatInterface.
 *
 * @author zhangyangxun
 */
interface TeamMemberStatInterface
{
    /**
     * 初始化群成员订单数据
     * @internal
     * @Async(route=initMemberStat)
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-23
     */
    public function initMemberStat(array $data): bool;

    /**
     * 订单支付后更新群统计
     * @internal
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-22
     */
    public function afterPayOrderSuccess(array $data): bool;

    /**
     * 订单完成后更新群统计
     * @internal
     *
     * @param array $data
     * @return bool
     *
     * @author zhangyangxun
     * @since 2019-04-23
     */
    public function afterFinishedOrderSuccess(array $data): bool;
}
