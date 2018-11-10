<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class ModelStringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModelStringTest()
    {
        $car= Car::all()->first();
        $this->assertInternalType('string', $car->year);
    }
}