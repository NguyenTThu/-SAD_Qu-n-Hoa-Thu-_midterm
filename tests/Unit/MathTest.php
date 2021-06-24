<?php

namespace Tests\Unit;


use App\Calculate;


use Tests\TestCase;


class MathTest extends TestCase
{
    private $calculate;
    public function setUp(): void
    {

        $this->calculate = new Calculate();
    }

    public function test_getArea_WhenCalledWithLength2AndWidthWidth4_Return8()
    {

        $response = $this->calculate->getAreaOfRectangle(2, 4);

        $this->assertTrue(is_int($response));
        $this->assertEquals(8, $response);
    }
    public function test_ptbac1(){
        $response = $this->calculate->ptbac1(-1, 1);

    
        $this->assertEquals(1, $response);
    }
}
