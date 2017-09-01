<?php namespace App\Core\Application\Service;


/**
 * Interface ApplicationServiceInterface
 *
 * @package App\Application\Service
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
