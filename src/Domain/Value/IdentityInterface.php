<?php namespace App\Domain\Value;


interface IdentityInterface
{
    /**
     * @return string
     */
    public function getValue() : string;

    /**
     * @param IdentityInterface $value
     *
     * @return bool
     */
    public function equals(IdentityInterface $value) : bool;

    /**
     * @return string
     */
    public function __toString() : string ;

}
