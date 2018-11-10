<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testCreate()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue($user->save());
    }
}