<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TestController extends Controller
{
    
   public function index(){
      $products = Product::paginate(8);
       return view('produc.index')->with(compact('products'));//Crea un arreglo asociativo de lo que se quiere mostrar
   }



    public function wellcome(){

    
    }


}
