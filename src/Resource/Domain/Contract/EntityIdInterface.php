<?php

namespace App\Resource\Domain\Contract;

interface EntityIdInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param EntityIdInterface $value
     *
     * @return bool
     */
    public function equals(EntityIdInterface $value): bool;

    /**
     * @return string
     */
    public function __toString(): string;
}
