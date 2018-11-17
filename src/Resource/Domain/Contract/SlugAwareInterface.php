<?php
/*
 * This file is part of the symfony-base package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Resource\Domain\Contract;


interface SlugAwareInterface
{
    /**
     * @return null|string
     */
    public function getSlug(): ?string;

    /**
     * @param null|string $slug
     */
    public function setSlug(?string $slug): void;
}
