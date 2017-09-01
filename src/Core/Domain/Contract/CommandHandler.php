<?php

namespace App\Core\Domain\Contract;


/**
 * Interface Command
 *
 * @package App\Core\Domain\Contract
 *
 * @author  Ramon Soares <developer@ramonsoares.com>
 */
interface CommandHandler
{
    /**
     * @param mixed $command
     * @return void
     */
    public function handle($command): void;
}
