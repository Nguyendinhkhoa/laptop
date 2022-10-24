<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function addBrand(){
        $this->AuthLogin();
    	return view('admin.addBrand');
    }
    public function allBrand(){
        $this->AuthLogin();
        $all_brand_product = Brand::orderBy('brand_id','DESC')->get();
        return view('admin.allBrand')->with('all_brand_product',$all_brand_product);
    }

    public function saveBrand(Request $request){
        $this->AuthLogin();
        $data = $request->all();
        $brand = new Brand();
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_slug = $data['brand_product_name'];
        $brand->save();
    	Session::put('message','Add Brand Product Successful');
    	return Redirect::to('add-brand-product');
    }
    public function updateBrand(Request $request,$brand_product_id){
        $this->AuthLogin();
        $data = $request->all();
        $brand = Brand::find($brand_product_id);
        // $brand = new Brand();
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_slug= $data['brand_product_name'];
        $brand->save();
        Session::put('message','Update Brand Successful');
        return Redirect::to('all-brand-product');
    }
    public function deleteBrand($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Delete Brand Successful');
        return Redirect::to('all-brand-product');
    }
    public function editBrand($brand_product_id){
        $this->AuthLogin();
        $all_brand_product = DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->get(); 
        return view('admin.editBrand')->with('edit_brand_product', $all_brand_product); 
    }

}
