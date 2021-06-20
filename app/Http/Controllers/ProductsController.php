<?php

namespace App\Http\Controllers;
use Session;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        return view('addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproducts(Request $data)
    {
        // print_r($data);die;
        $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new products ;
               $name = $data->name;
               $products = $data->products;
               $products_detail = $data->products_detail;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj->name = $name;
                   $obj->products = $products;
                   $obj->products_detail = $products_detail;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       # echo "data inserted";
                       Session::flash('message', 'Successfully Added!');
                       return  redirect('show/');
                   }

                   }
               else
               {
                    #echo "invalid data";
                   Session::flash('message', 'Invalid data');
               }
           }
           else
           {
                 $obj= new products;
	               $name = $data->name;
	               $products = $data->products;
	               $products_detail = $data->products_detail;

	               $obj->name = $name;
                 $obj->products = $products;
                 $obj->products_detail = $products_detail;

                 if($obj->save())
                 {
                      #echo "data inserted";
                      Session::flash('message', 'Successfully Added!');
                     return redirect('show/');
                 }

           }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = products::get();
        return view('product',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
