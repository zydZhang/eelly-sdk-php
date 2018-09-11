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

namespace Eelly\SDK\Store\Service;



/**
 * 店铺二维码信息表.
 *
 * @author wechan
 */
interface QrcodeInterface
{
    /**
     * 通过二维码编号,返回已经绑定状态的店铺id
     * 
     * @param string $qrcode 二维码编号
     * 
     * @author wechan
     * @since 2018年09月10日
     * 
     */
    public function getStoreIdByQrCode(string $qrcode):int;

    /**
     * 添加店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @param array $qrcode  二维码数据
     * @return bool
     *
     * @requestExample({"storeId": 8888, "qrcode": {"qrcodeId": 10000, "status": 1}})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since 2018年09月11日
     */
    public function saveStoreQrCode(int $storeId, array $qrcode): bool;

    /**
     * 删除店铺二维码
     *
     * @param int   $storeId 店铺ID
     * @return bool
     *
     * @requestExample({"storeId": 8888})
     * @returnExample(true)
     *
     * @author zhangyangxun
     * @since 2018年09月11日
     */
    public function dropStoreQrcode(int $storeId): bool;
}
