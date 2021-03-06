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

namespace Eelly\SDK\EellyOldCode\Api\Common;

use Eelly\SDK\EellyClient;

/**
 * Class MallSetting.
 *
 *  modules/Common/Service/MallSettingService.php
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
class MallSetting
{
    /**
     * 获取测试店铺id的数组.
     *
     * @return array
     *
     * @author 敖卓超<aozhuochao@eelly.net>
     * @author zhangyingdi<zhangyingdi@eelly.net>
     *
     * @since  2018.12.04
     */
    public function getTestStoreId()
    {
        return EellyClient::request('eellyOldCode/common/mallSetting', __FUNCTION__, true);
    }

    /**
     * 获取登录页广告.
     *
     * @return mixed
     *
     * @author zhangyangxun
     *
     * @since 2018-12-18
     */
    public function getLoginAd()
    {
        return EellyClient::request('eellyOldCode/Common/MallSetting', __FUNCTION__, true);
    }

    /**
     * 获取直播推荐店铺ID.
     *
     * @param $remark
     *
     * @throws \ErrorException
     *
     * @return bool|int|mixed|null|string
     *
     * @author zhangyangxun
     *
     * @since 2019/6/18
     */
    public function getLiveRecomStore($remark)
    {
        return EellyClient::request('eellyOldCode/Common/MallSetting', __FUNCTION__, true, $remark);
    }

    /**
     * 获取市场或者楼层的信息
     *
     * @param $type  类型 (1:市场 2:楼层)
     * @param $id    市场ID或地区ID
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since 2019.07.19
     */
    public function getMarketOrFloor($type, $id)
    {
        return EellyClient::request('eellyOldCode/Common/MallSetting', __FUNCTION__, true, $type, $id);
    }
}
