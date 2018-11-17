<?php

namespace App\Resource\Domain\Contract;

/**
 * Interface Command.
 *
 *
 * @author  Ramon Soares <developer@ramonsoares.com>
 */
interface CommandHandlerInterface
{
    /**
     * @param mixed $command
     */
    public function handle($command): void;
}
