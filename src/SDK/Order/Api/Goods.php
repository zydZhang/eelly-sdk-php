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

namespace Eelly\SDK\Order\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Order\Service\GoodsInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Goods implements GoodsInterface
{
    /**
     * 根据订单id获取订单商品信息
     * 
     * @param array $orderIds
     * @return array
     * 
     * @requestExample({"orderId":[161]})
     * @returnExample({"161":{"orderId":"161","orderSn":"1811635308","refType":"0","fromFlag":"0","extension":"0","batchNumber":"0","chunkNumber":"0","sellerId":"148086","sellerName":"\u83ab\u743c\u5c0f\u5e97","buyerId":"148086","buyerName":"juju12","osId":"1","payTime":"0","shipTime":"0","delayTime":"0","frozenTime":"0","finishedTime":"0","orderAmount":"2","freight":"1","commission":"0","returnFlag":"0","evaluateFlag":"0","deleteFlag":"0","remark":"","createdTime":"1524830823","updateTime":"2018-04-27 22:53:26","orderGoods":[{"ogId":"20000216","orderId":"161","goodsId":"1450168293","gsId":"195022196","price":"1","quantity":"2","goodsName":"\u3010\u83ab\u743c\u5c0f\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg","goodsNumber":"2","spec":"\u989c\u8272:\u5982\u56fe\u8272,\u5c3a\u7801:\u5747\u7801","createdTime":"1524830823","updateTime":"2018-04-27 20:06:57"}]}})
     * 
     * @author wechan
     * @since 2018年05月02日
     */
    public function getOrderGoodsByIds(array $orderIds): array
    {
        return EellyClient::request('order/goods', 'getOrderGoodsByIds', true, $orderIds);
    }

    /**
     * 根据订单id获取订单商品信息
     * 
     * @param array $orderIds
     * @return array
     * 
     * @requestExample({"orderId":[161]})
     * @returnExample({"161":{"orderId":"161","orderSn":"1811635308","refType":"0","fromFlag":"0","extension":"0","batchNumber":"0","chunkNumber":"0","sellerId":"148086","sellerName":"\u83ab\u743c\u5c0f\u5e97","buyerId":"148086","buyerName":"juju12","osId":"1","payTime":"0","shipTime":"0","delayTime":"0","frozenTime":"0","finishedTime":"0","orderAmount":"2","freight":"1","commission":"0","returnFlag":"0","evaluateFlag":"0","deleteFlag":"0","remark":"","createdTime":"1524830823","updateTime":"2018-04-27 22:53:26","orderGoods":[{"ogId":"20000216","orderId":"161","goodsId":"1450168293","gsId":"195022196","price":"1","quantity":"2","goodsName":"\u3010\u83ab\u743c\u5c0f\u5e97\u3011 2018\u65b0\u6b3e \u9488\u7ec7\u886b\/\u6bdb\u8863  \u5305\u90ae","goodsImage":"G02\/M00\/00\/03\/small_ooYBAFqzVV2ICEGRAAER2psay8IAAABggBWRl0AARHy759.jpg","goodsNumber":"2","spec":"\u989c\u8272:\u5982\u56fe\u8272,\u5c3a\u7801:\u5747\u7801","createdTime":"1524830823","updateTime":"2018-04-27 20:06:57"}]}})
     * 
     * @author wechan
     * @since 2018年05月02日
     */
    public function getOrderGoodsByIdsAsync(array $orderIds)
    {
        return EellyClient::request('order/goods', 'getOrderGoodsByIds', false, $orderIds);
    }

    /**
     * 获取订单点赞信息(点赞没点赞各1条)
     * 
     * @param $goodsId 商品id
     * @return array
     * 
     * @requestExample({"goodsId":1450168344})
     * @returnExample([{
	 *      "msg": "朋友帮他点赞成功了",
	 *      "spellingTypeMsg": "集赞成功",
	 *      "spellingType": "1",
	 *      "buyerId": "148086"
     *  }])
     * 
     * @author wechan
     * @since 2018年05月02日
     */
    public function getGoodsLikeInfo($goodsId): array
    {
        return EellyClient::request('order/goods', 'getGoodsLikeInfo', true, $goodsId);
    }

    /**
     * 获取订单点赞信息(点赞没点赞各1条)
     * 
     * @param $goodsId 商品id
     * @return array
     * 
     * @requestExample({"goodsId":1450168344})
     * @returnExample([{
	 *      "msg": "朋友帮他点赞成功了",
	 *      "spellingTypeMsg": "集赞成功",
	 *      "spellingType": "1",
	 *      "buyerId": "148086"
     *  }])
     * 
     * @author wechan
     * @since 2018年05月02日
     */
    public function getGoodsLikeInfoAsync($goodsId)
    {
        return EellyClient::request('order/goods', 'getGoodsLikeInfo', false, $goodsId);
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