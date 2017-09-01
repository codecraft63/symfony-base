<?php

namespace App\Core\Domain\ValueObject;


use App\Core\Domain\Contract\IdentityInterface;
use Ramsey\Uuid\Uuid;

abstract class IdentityAbstract
    implements IdentityInterface
{
    /**
     * @var string
     */
    private $value;

    /**
     * UserId constructor.
     *
     * @param $value
     */
    public function __construct($value = null)
    {
        $this->value = (string) $value ?: Uuid::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }


    /**
     * @param IdentityInterface $id
     *
     * @return bool
     */
    public function equals(IdentityInterface $id) : bool
    {
        return $this->value === $id->getValue();
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->value;
    }
}
