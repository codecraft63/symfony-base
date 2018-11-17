<?php

namespace App\Resource\Domain\ValueObject;

use App\Resource\Domain\Contract\EntityIdInterface;
use App\Resource\Domain\Exception\InvalidIdentityException;
use Ramsey\Uuid\Uuid;

class EntityId
    implements EntityIdInterface
{
    /**
     * @var string
     */
    protected $id;

    /**
     * UserId constructor.
     *
     * @param string $id
     * @throws InvalidIdentityException
     *
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
     * @param EntityIdInterface $id
     *
     * @return bool
     */
    public function equals(EntityIdInterface $id): bool
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
