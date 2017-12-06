<?php

namespace App\Core\Domain\Contract;

/**
 * Interface Command.
 *
 *
 * @author  Ramon Soares <developer@ramonsoares.com>
 */
interface CommandHandler
{
    /**
     * @param mixed $command
     */
    public function handle($command): void;
}
