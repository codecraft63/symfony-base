<?php

namespace App\Core\Application\Service;

/**
 * Interface ApplicationServiceInterface.
 */
interface ApplicationServiceInterface
{
    /**
     * @param $request
     *
     * @return mixed
     */
    public function execute($request = null);
}
