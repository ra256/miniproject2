<?php
namespace Tests\Unit;
use App\Car;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tests\TestCase;
class DeleteCarTest extends TestCase
{
    use SoftDeletes;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCarTest()
    {
        $this->assertClassHasAttribute('Make', Car::class);
    }
}