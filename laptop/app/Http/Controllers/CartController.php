<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requets;
use Cart ;
use Session ;
use Illuminate\Support\Facades\Redirect;

session_start();
class CartController extends Controller
{
    public function index(){
        $product =  DB::table('tbl_product')->get();
        // dd($product);
        return view('page.cart.list')->with('product',$product);
    }
    public function showCart(Request $request){
        //seo 
       $meta_desc = "Giỏ hàng của bạn"; 
       $meta_keywords = "Giỏ hàng Ajax";
       $meta_title = "Giỏ hàng Ajax";
       $url_canonical = $request->url();
       //--seo
       $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); 
       $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get(); 

       return view('page.cart.list')->with('category',$cate_product)->with('brand',$brand_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
   }
   public function save_cart(Request $request){
        $productId = $request->product_id_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id',$productId)->first(); 
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get();
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->sale_price;
        $data['weight'] = 0;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
         return Redirect::to('/show-cart');
   }
   public function show_cart(){
       return view('page.cart.list');
   }
}