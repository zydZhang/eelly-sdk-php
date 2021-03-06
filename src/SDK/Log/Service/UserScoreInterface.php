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

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\UserScoreDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface UserScoreInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserScore(int $UserScoreId): UserScoreDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserScore(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserScore(int $UserScoreId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserScore(int $UserScoreId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserScorePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
