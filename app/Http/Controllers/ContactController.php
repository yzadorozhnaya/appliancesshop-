<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{	
    public  function contact() {    
        return view('contact');
    }

    public function buy(Request $request) {
    
        $body = '';

        if (auth()->check()) {
            $name = Auth::user()->name;
            $email = Auth::user()->email;
            $body.="\r\n".$name."\r\n".$email."\r\n";
        }
        $name=$request->name;
        $email=$request->email;
        $message=$request->message;
        
        $body.="\r\n".$name."\r\n".$email."\r\n".$message."\r\n";
        $res = \Mail::raw($body, function($message){
             $message->from('domanytskya@gmail.com','domanytskya@gmail.com');
             $message->to('katya.zadorognay@gmail.com');
         });
       
         return redirect(route('contact'))->with('success','Ви успішно зробили своє замовлення!');
     }
}
