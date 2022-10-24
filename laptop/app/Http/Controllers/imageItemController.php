<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Category;
use App\Brand;
use Illuminate\Support\Facades\Redirect;
session_start();

class imageItemController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function show(){
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')->get();
        return view('admin.allImage')->with('all_product',$all_product);
    }
    public function showImageDetail($product_id){
        $this->AuthLogin();
        $all_image= DB::table('image_item')->where('product_id',$product_id)->get();
        $product = DB::table('tbl_product')->where('product_id',$product_id)->first();
        return view('admin.imageDetail')->with('all_image',$all_image)->with('product',$product);
    }
    public function deleteImage($id){
        $this->AuthLogin();
        $image= DB::table('image_item')->where('id',$id)->delete();
        return view('admin.imageDetail');
    }
    public function addImage(Request $request , $product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_id']=$product_id ;
        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['name'] = $new_image;
            DB::table('image_item')->insert($data);
            Session::put('message','Add Image Successful ');
            return Redirect::to('image-detail/'.$product_id);
        }
    }
}
