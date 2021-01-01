<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ExampleTest extends TestCase
{
    protected  $product;


    public function setUp(): void
    {
        $this->product = new Product('title', 20);    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testMyfun(){
        $this->assertTrue(true);
    }

     /** @test */
    public  function a_produt_has_a_price(){


        $this->assertEquals(20,$this->product->price());
    }
}
