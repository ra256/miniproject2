<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountUserTest()
    {
        $user= User::all();
        $this->assertGreaterThanOrEqual(0, count($user));
        $this->assertEquals(50, count($user));
        $this->assertLessThanOrEqual(50, count($user));
    }
}