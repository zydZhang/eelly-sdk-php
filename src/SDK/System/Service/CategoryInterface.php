<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

use Eelly\SDK\System\DTO\CategoryDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface CategoryInterface
{

    /**
     * 获取指定id文章分类
     *
     * @param int $categoryId 文章id
     *
     * @return \Eelly\SDK\System\DTO\CategoryDTO
     * @requestExample({"categoryId":1})
     * @returnExample({"categoryId":1,"name":"分类名称","code":"分类编码","parentId":2,"sort":1,"status":1,"checkFlag":1,"remark":"分类备注"})
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function getCategory(int $categoryId): CategoryDTO;

    /**
     * 新增文章分类
     *
     * @param array  $data              文章分类数据
     * @param int    $data['name']      分类名称
     * @param string $data['code']      分类编码
     * @param string $data['parentId']  父分类ID
     * @param int    $data['sort']      排序
     * @param int    $data['status']    状态 0:无效 1:有效
     * @param int    $data['checkFlag'] 分类文章审核标志：0:需审核 1:不需审核
     * @param int    $data['remark']    分类备注
     *
     * @return bool 新增结果
     * @requestExample({"data":{"name":"分类名称","code":"分类编码","parentId":1,"sort":1,"status":1,"checkFlag":1,"remark":"分类备注"}})
     * @returnExample(true)
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function addCategory(array $data): bool;

    /**
     * 修改文章分类
     *
     * @param int    $categoryId        文章分类id
     * @param array  $data              文章分类数据
     * @param int    $data['name']      分类名称
     * @param string $data['code']      分类编码
     * @param string $data['parentId']  父分类ID
     * @param int    $data['sort']      排序
     * @param int    $data['status']    状态 0:无效 1:有效
     * @param int    $data['checkFlag'] 分类文章审核标志：0:需审核 1:不需审核
     * @param int    $data['remark']    分类备注
     *
     * @return bool 修改结果
     * @requestExample({"categoryId":1,"data":{"name":"分类名称","code":"分类编码","parentId":1,"sort":1,"status":1,"checkFlag":1,"remark":"分类备注"}})
     * @returnExample(true)
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function updateCategory(int $categoryId, array $data): bool;

    /**
     * 删除文章分类
     *
     * @param int $categoryId 文章分类id
     *
     * @return bool 删除结果
     * @requestExample({"categoryId":1})
     * @returnExample(true)
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function deleteCategory(int $categoryId): bool;

    /**
     * 获取文章分类列表
     *
     * @return array 分类列表
     * @requestExample()
     * @returnExample({"categoryId":"1","name":"分类1","parentId":"0","status":"1","checkFlag":"1","son":[{"categoryId":"3","name":"分类3","parentId":"1","status":"1","checkFlag":"1"},{"categoryId":"4","name":"分类4","parentId":"1","status":"1","checkFlag":"1"}]})
     * @throws \Eelly\SDK\System\Exception\SystemException
     * @author wujunhua<wujunhua@eelly.net>
     * @since 2017-08-31
     */
    public function listCategory(): array;

}
