<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarIntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarIntegerTest()
    {
        $car= Car::all()->first();
        $this->assertInternalType('int', $car->model);
    }
}