<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCarTest()
    {
        $car= Car::all();
        $this->assertGreaterThanOrEqual(0, count($car));
        $this->assertEquals(50, count($car));
        $this->assertLessThanOrEqual(50, count($car));
    }
}