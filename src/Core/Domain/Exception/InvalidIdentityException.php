<?php
/*
 * This file is part of the Visite o Brasil package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Core\Domain\Exception;


class InvalidIdentityException extends \RuntimeException
{
    private $identity;

    /**
     * {@inheritdoc}
     */
    public function getMessageKey()
    {
        return 'Invalid identity format';
    }

    /**
     * Get the identity.
     *
     * @return string
     */
    public function getid()
    {
        return $this->identity;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageData()
    {
        return array('{{ identity }}' => $this->identity);
    }
}
