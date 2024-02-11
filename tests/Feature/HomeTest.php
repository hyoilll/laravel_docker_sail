<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home(): void
    {
        $resp = $this->get('/home');

        $resp->assertStatus(200);
        $resp->assertSeeText('こんにちは！');
    }
}
