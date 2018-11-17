<?php
/*
 * This file is part of the symfony-base package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Resource\Domain\Contract;


use App\Core\Domain\Contract\EntityIdInterface;

interface EntityInterface
{
    public function getId(): EntityIdInterface;
}
