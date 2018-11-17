<?php
/*
 * This file is part of the symfony-base package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Resource\Domain\Repository;


use App\Resource\Domain\Contract\EntityInterface;
use Doctrine\Common\Persistence\ObjectRepository;

interface RepositoryInterface extends ObjectRepository
{
    public function add(EntityInterface $resource): void;

    public function remove(EntityInterface $resource): void;
}
