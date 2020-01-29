<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);//parqa obtener un producto x atravez de ID
        $images = $product->images;
        $imgL = collect();
        $imgR = collect();
        foreach ($images as $key => $image) {
            if ($key%2==0) 
                $imgL->push($image);
            else
                $imgR->push($image);
            }
            
        
        // para retornar una vista del controlador hacia la vista indicada
        return view('produc.show')->with(compact('product','imgL','imgR')); 
    }
}
