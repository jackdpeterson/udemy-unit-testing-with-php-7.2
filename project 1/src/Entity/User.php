<?php
declare(strict_types=1);

namespace Project1\Entity;

final class User
{
    private $emailAddress;

    private $passwordHash;

    private $isVerified;

    public function __construct(string $emailAddress, string $passwordHash)
    {
        $this->emailAddress = $emailAddress;
        $this->passwordHash = $passwordHash;
        $this->isVerified = false;
    }

    public function verifyUser()
    {
        $this->isVerified = true;
    }
}