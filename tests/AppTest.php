<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testIndexRedirectsToLogin()
    {
        ob_start();
        include __DIR__ . '/../src/index.php';
        $output = ob_get_clean();

        // Index harus redirect
        $this->assertTrue(headers_sent() === false);
    }

    public function testLoginPageLoads()
    {
        ob_start();
        include __DIR__ . '/../src/login.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("<h1>Login</h1>", $output);
    }

    public function testRegisterPageLoads()
    {
        ob_start();
        include __DIR__ . '/../src/register.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("<h1>Register</h1>", $output);
    }

    public function testDashboardBlocksGuest()
    {
        // pastikan tidak ada session user
        $_SESSION = [];

        ob_start();
        include __DIR__ . '/../src/dashboard.php';
        ob_end_clean();

        // Karena guest, harus redirect
        $this->assertTrue(headers_sent() === false);
    }

    public function testLogoutClearsSession()
    {
        $_SESSION['user'] = "admin";

        ob_start();
        include __DIR__ . '/../src/logout.php';
        ob_end_clean();

        $this->assertArrayNotHasKey('user', $_SESSION);
    }
}
