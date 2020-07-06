<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NerdTest extends TestCase
{
    public function testNerdCreate() {
        $this->json('POST', '/nerds', [
            'email' => 'emailInTesting@test.com',
            'name' => 'NameOfTester',
            'nerd_level' => 1
        ])->assertOk();
    }
}
