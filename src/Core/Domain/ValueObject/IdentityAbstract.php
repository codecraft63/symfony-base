<?php

namespace App\Core\Domain\ValueObject;

use App\Core\Domain\Contract\IdentityInterface;
use App\Core\Domain\Exception\InvalidIdentityException;
use Ramsey\Uuid\Uuid;

abstract class IdentityAbstract implements IdentityInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * UserId constructor.
     *
     * @param string $id
     *
     * @throws \App\Core\Domain\Exception\InvalidIdentityException
     */
    public function __construct(string $id = null)
    {
        if (null !== $id && !Uuid::isValid($id)) {
            throw new InvalidIdentityException($id);
        }
        $this->id = $id ?: Uuid::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param IdentityInterface $id
     *
     * @return bool
     */
    public function equals(IdentityInterface $id): bool
    {
        return $this->id === $id->getId();
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->id;
    }
}
