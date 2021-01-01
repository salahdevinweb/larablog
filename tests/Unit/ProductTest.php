<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public  function testProductHasTitle(){

        $product = new Product('title', 20);
        $this->assertEquals('title',$product->title());
    }
}
