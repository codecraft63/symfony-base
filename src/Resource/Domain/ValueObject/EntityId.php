<?php

namespace App\Core\Domain\ValueObject;

use App\Core\Domain\Contract\EntityIdInterface;
use App\Core\Domain\Exception\InvalidIdentityException;
use Ramsey\Uuid\Uuid;

class EntityId implements EntityIdInterface
{
    /**
     * @var string
     */
    protected $id;

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
     *
     * @param self $id
     *
     * @return bool
     */
    public function equals(self $id): bool
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
