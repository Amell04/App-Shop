<?php

namespace App\Http\Controllers\Admin; 
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function traercat(){

        $categories = Category::all();
        return view('Admin.product.create')->with(compact('categories'));


     }
    public function index()
    {
        //muestra listado de productos
        //$products= Product::paginate(10);
       
        $products= Product::where('condicion','=',1)->paginate(10);
       return view('Admin.product.index')->with(compact('products'));
    
        }

        public function selectproducts()
    {
        //muestra listado de productos
        //$products= Product::paginate(10);
        $products= Product::where('condicion','=',1)->paginate(10);
    
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validaciones
        $messages = [
            'name.required' => 'Es necesario registrar un nombre para el producto',
            'name.min' => 'EL nombre del producto debe tener al menos 3 caracteres',
            'description.required' => 'El campo descripcion es obligatorio',
            'description.max' => 'El campo descripcion debe tener maximo 200 caracteres',
            'price.required'=> 'Ingrese un numero valido.',
            'price.min' => 'Solo se admiten valores positivos',
        ];
         $rules=[
            'name'=>'required|alpha|min:3',
            'description'=>'required|max:200',
            'price'=>'required|numeric|min:0',
         ];
        $this->validate($request, $rules,$messages);
        //registrar nuevo producto
      //  dd($request->all());
      $product = new Product();
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->condicion='1';
      $product->categoria_id;
      $product->long_description = $request->input('long_description');
      $product->price = $request->input('price');
      $product->save();
    
      return redirect('/Admin/product');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('Admin.product.edit')->with(compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->save();//Update
      
        return redirect('/Admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function activar($id)
    {
       
        $product = Product::find($id);
        $product-> condicion ='1';
        $product-> update();
        return Redirect::to('/Admin/product/');


    }



    public function desactivar($id)
    {
       
        $product = Product::find($id);
        $product-> condicion ='0';
        $product-> update();
        return Redirect::to('/Admin/product/');


    }
}
