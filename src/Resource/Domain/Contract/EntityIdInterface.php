<?php

namespace App\Core\Domain\Contract;

interface EntityIdInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param self $value
     *
     * @return bool
     */
    public function equals(self $value): bool;

    /**
     * @return string
     */
    public function __toString(): string;
}
