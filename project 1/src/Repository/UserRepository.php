<?php
declare(strict_types=1);

namespace Project1\Repository;


use Project1\Entity\User;

final class UserRepository
{
    private $adapter;

    public function __construct($storageAdapterImpl)
    {
        $this->adapter = $storageAdapterImpl;
    }

    public function save(User $user): User
    {

    }

    public function find(string $emailAddress): User
    {

    }
}