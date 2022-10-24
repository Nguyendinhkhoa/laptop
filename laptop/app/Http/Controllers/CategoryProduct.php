<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requets;
use Session ;
use Illuminate\Support\Facades\Redirect;

session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function addCategory(){
        $this->AuthLogin();
        return view('admin.addCategory');
    }
    public function allCategory(){
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')->get(); 
        return view('admin.allCategory')->with('all_category_product', $all_category_product); 
    }

    public function editCategory($cate_product_id){
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')->where('category_id',$cate_product_id)->get(); 
        return view('admin.editCategory')->with('edit_category_product', $all_category_product); 
    }

    public function updateCategory(Request $request , $cate_product_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_slug'] = str_replace(' ','-',$request->category_product_name);
        DB::table('tbl_category_product')->where('category_id',$cate_product_id)->update($data);
        Session::put('message','Update Category Product Successful');
        return Redirect::to('all-category-product');
    }
    

    public function deleteCategory($cate_product_id){
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id',$cate_product_id)->delete();
        Session::put('message','Delete Category Product Successful');
        return Redirect::to('all-category-product');
       }

    public function saveCategory(Request $request){
        $this->AuthLogin();
       $data = array();
       $data['category_name']   = $request->category_product_name;
       $data['category_slug'] = str_replace(' ','-',$request->category_product_name);
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','add categories product successful');
        return Redirect::to('add-category-product');
    }
}
