<?php

namespace App\Http\Controllers;
use Mail;
use PDF;
use App\Models\products;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $data)
    {  $name = $data->name;//form  filed name
    	$email = $data->email;
    	$password = $data->password;
        $products=$data->products;

    	$obj = new user;

    	$obj->name = $name;//database  field name
    	$obj->email = $email;
    	$obj->password = $password;
        $obj->products =$products;

    	if($obj->save())
    	{

             $data = array('name'=>$name, 'email'=>$email, 'products'=>$products);
             
            Mail::send('temp', $data, function ($message) use ($name,$products,$email) {
                 $message->from('adarshyadaviitr@gmail.com','Sonu Kumar');
            
                 $message->to($email)->cc('sk1533884@gmail.com')->subject('Product conformation');
                //  $message->attach('\Project\resource\views\temp.blade.php');
            });

            //  $pdf = PDF::loadView('temp',compact('name','products'));
            // download PDF file with download method
            // return $pdf->download('temp.pdf'); 
            return view('temp')->with(['name'=>$name])->with(['products'=>$products]);
            // return $pdf->download('temp.pdf'); 
            // echo "Email Sent with attachment. Check your inbox.";
         }

    	
    	else
    	{
    		echo "data not insrted";
    	}

        //  return view('temp')->with(['name'=>$name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    //  print_r($data);die;
     return view('sineup');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
