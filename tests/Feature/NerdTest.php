<?php

namespace Tests\Feature;

use App\Nerd;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NerdTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations;

    public function testIndex()
    {
        $this->get("/nerds")->assertOk();
    }

    public function testShow()
    {
        $nerd = factory(Nerd::class)->create();

        $this->get("/nerds/{$nerd->id}")->assertOk();
    }

    public function testCreate() {
        $this->json('POST', '/nerds', [
            'email' => 'emailInTesting@test.com',
            'name' => 'NameOfTester',
            'nerd_level' => 1
        ])->assertSessionHasNoErrors();
    }
}
