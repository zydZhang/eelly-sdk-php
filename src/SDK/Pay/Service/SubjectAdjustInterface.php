<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\SubjectAdjustDTO;

/**
 * 会计科目日核算
 *
 * @author zhangyingdi<zhangyingdi@eelly.net>
 */
interface SubjectAdjustInterface
{

    /**
     * 根据结算日期跟科目代码，获取会计科目日核算记录
     *
     * @param string $subjectCode 科目代码
     * @param string $workDate 结算日期：格式YYYYMMDD
     * @return SubjectAdjustDTO
     *
     * @requestExample({"workDate":"20171109","subjectCode":"eellyPay"})
     * @returnExample({"workDate":"20171109","subjectCode":"eellyPay","subjectMoney":20,"accountMoney":10,"balanceStatus":1,"remark":"","createdTime":135234565})
     *
     * @author zhangyingdi<zhangyingdi@eelly.net>
     * @since  2017-11-20
     */
    public function getSubjectAdjust(string $subjectCode, string $workDate): SubjectAdjustDTO;
}