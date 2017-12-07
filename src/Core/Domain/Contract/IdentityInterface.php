<?php

namespace App\Core\Domain\Contract;

interface IdentityInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param IdentityInterface $value
     *
     * @return bool
     */
    public function equals(self $value): bool;

    /**
     * @return string
     */
    public function __toString(): string;
}
