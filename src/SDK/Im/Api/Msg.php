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
use Eelly\SDK\Im\Service\MsgInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Msg implements MsgInterface
{
    /**
     * 保存IM消息
     *
     * @param array $msg
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2019-03-13
     */
    public function saveNeteaseMsg(array $msg)
    {
        return EellyClient::request('im/msg', 'saveNeteaseMsg', true, $msg);
    }

    /**
     * 保存IM消息
     *
     * @param array $msg
     * @return mixed
     *
     * @author zhangyangxun
     * @since 2019-03-13
     */
    public function saveNeteaseMsgAsync(array $msg)
    {
        return EellyClient::request('im/msg', 'saveNeteaseMsg', false, $msg);
    }

    /**
     * 发送自定义系统通知
     *
     * @param array $msg
     * @return mixed
     * @author zhangyangxun
     * @since 2019/6/11
     */
    public function sendAttachMsg(array $msg)
    {
        return EellyClient::request('im/msg', 'sendAttachMsg', true, $msg);
    }

    /**
     * 发送自定义系统通知
     *
     * @param array $msg
     * @return mixed
     * @author zhangyangxun
     * @since 2019/6/11
     */
    public function sendAttachMsgAsync(array $msg)
    {
        return EellyClient::request('im/msg', 'sendAttachMsg', false, $msg);
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