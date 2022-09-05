<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigTest extends TestCase
{
    public function testConfig()
    {
        $firstName = config("contoh.author.first");
        $lastName = config("contoh.author.last");
        $email = config("contoh.email");
        $web = config("contoh.web");

        self::assertEquals("Rai", $firstName);
        self::assertEquals("Stalins", $lastName);
        self::assertEquals("satriabaguse@gmail.com", $email);
        self::assertEquals("kodingindonesia.com", $web);
    }
}
