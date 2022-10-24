<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Session;
session_start();
class CustomerController extends Controller
{
    public function add_customer(Request $request){
        $data = $request->all();
        $customer = new Customer();
        $customer->name = $data['fullname'];
        $customer->email = $data['email'];
        $customer->mobile = $data['mobile'];
        $customer->password = bcrypt($data['password']); 
        $customer->save();
        $urlBack = $request->urlPrevious;
        // echo  $urlBack ;
        return view('login')->with('urlBack',$urlBack);
    }
    public function login(Request $request){
        $urlBack =$request->urlPrevious;

            $email=$request->email ;
            $password=$request->password ;
            if(Auth::attempt(['email' => $email, 'password' => $password])){
                Session::put('customer_name',Auth::user()->name);
                return redirect($urlBack);
            }
            else{
                return view('login')->with('urlBack',$urlBack);
            }
    }
}
