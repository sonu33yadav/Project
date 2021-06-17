<?php

namespace App\Http\Controllers;
use Mail;
use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mailcontroller extends Controller
{
    public function attachment_email(Request $data){
    $Name = User::get('name');
    $Email = User::get('email');
    $Product = User::get('products');

    $data = array('name'=>$Name, 'email'=>$Email, 'products'=>$Product);
        // $data = array('name'=>);
        Mail::send('temp', $data, function ($message) use ($Name,$Product) {
             $message->from('sk1533884@gmail.com',$Name);
        
             $message->to('cloudeshope.sonu@gmail.com')->cc('sk1533884@gmail.com');
            //  $message->attach('\Project\resource\views\temp.blade.php');
        });
        echo "Email Sent with attachment. Check your inbox.";
     }
}
