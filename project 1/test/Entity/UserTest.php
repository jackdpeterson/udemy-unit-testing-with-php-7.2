<?php
/**
 * Created by PhpStorm.
 * User: jpeterson
 * Date: 2/2/18
 * Time: 4:19 PM
 */

namespace Project1\Test\Entity;

use Project1\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function test__construct()
    {
        $emailAddress = 'test@example.com';
        $passwordHash = '123';
        $user = new User($emailAddress, $passwordHash);
        $this->assertInstanceOf(User::class, $user);

    }

    public function testVerifyUser()
    {
        $this->markTestSkipped();
    }
}
