<?php
namespace Tests\Unit;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tests\TestCase;

class DeleteUserTest extends TestCase
{
    use SoftDeletes;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testdeleteUserTest()
    {
        $this->assertClassHasAttribute('name', User::class);
    }
}