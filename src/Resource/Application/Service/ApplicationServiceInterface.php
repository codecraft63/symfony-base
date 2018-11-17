<?php

namespace App\Resource\Application\Service;

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
