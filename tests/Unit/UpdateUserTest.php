<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UpdateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testbasicUpdateUserTest()
    {
        $user = User::all()->last();
        $user-> where('name', 'Haley Kub')
            -> update(['name' => 'Steve Smith']);
        $this->assertTrue($user->save());
    }
}