<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

class Product extends Model
{
    public  $title;
    public $price;

    use HasFactory;


    public function __construct( $title, $price)
    {
        $this->title = $title;
        $this->price = $price;

    }

    public function title(){
        return $this->title;
    }

    public function price (){
        return $this->price;
    }
}
