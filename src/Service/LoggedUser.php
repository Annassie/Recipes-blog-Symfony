<?php


namespace App\Service;


class LoggedUser
{
    /**
     * @var
     */
    private $storage;

    /**
     * LoggedUser constructor.
     * @param $storage
     */
    public function __construct($storage)
    {
        $this->storage = $storage;
    }


    public function loggedUser()
    {
        dump($this->storage->getToken->getId());
    }
}