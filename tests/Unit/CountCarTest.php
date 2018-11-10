<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCountTest()
    {
        $car= Car::all();
        $this->assertGreaterThanOrEqual(0, count($car));
        $this->assertEquals(50, count($car));
        $this->assertLessThanOrEqual(50, count($car));
    }
}