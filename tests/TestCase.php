<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    public function loginUser($user = null)
    {
        $user = $user ? $user : User::factory()->create();

        $this->actingAs($user);

        return $user;
    }
}
