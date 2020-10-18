<?php


namespace App\Security;


use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class LoggedUser
{
    /**
     * @var TokenStorageInterface
     */
    private $storage;

    /**
     * LoggedUser constructor.
     * @param TokenStorageInterface $storage
     */
    public function __construct(TokenStorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function loggedUser(){
        dump($this->storage->getToken()->getUser());
    }
}