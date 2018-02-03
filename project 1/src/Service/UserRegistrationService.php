<?php
declare(strict_types=1);

namespace project1;

use Project1\Entity\User;
use Project1\Repository\UserRepository;

final class UserRegistrationService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function registerUser(string $emailAddress, string $password): User
    {

    }

}