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
class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function addProduct(){
        $this->AuthLogin();
        $cate_product = Category::orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get(); 
        return view('admin.addProduct')->with('cate_product', $cate_product)->with('brand_product',$brand_product);
    }
    public function allProduct(){
        $this->AuthLogin();
    	$all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
    	// $manager_product  = view('admin.allProduct')->with('all_product',$all_product);
    	// return view('admin_layout')->with('admin.allProduct', $manager_product);
        return view('admin.allProduct')->with('all_product',$all_product);
    }
    public function saveProduct(Request $request){
        $this->AuthLogin();
       $data = array();
       $data['product_name'] = $request->product_name;
       $data['price'] = $request->product_price;
       $data['discount_percentage'] = $request->discount_percentage;
       if( $request->discount_percentage!=0){
        $data['sale_price'] = round($request->product_price*(1- $request->discount_percentage/100)/1000)*1000;
       }
       else{
        $data['sale_price'] = $request->product_price;
       }
       $data['cpu'] = $request->product_cpu;
       $data['hard_drive'] = $request->product_hardDrive;
       $data['ram'] = $request->product_ram;
       $data['screen'] = $request->product_screen;
       $data['graphics_card'] = $request->product_graphicsCard;
       $data['size'] = $request->product_size;
       $data['inventory_qty'] = $request->product_inventoryQty;
       $data['category_id'] = $request->product_cate;
       $data['brand_id'] = $request->product_brand;
       $data['featured'] = $request->product_featured;
       $data['description'] = $request->product_desc;
       $get_image = $request->file('product_image');

       if($get_image){
           $get_name_image = $get_image->getClientOriginalName();
           $name_image = current(explode('.',$get_name_image));
           $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
           $get_image->move('public/uploads/product',$new_image);
           $data['product_image'] = $new_image;
           DB::table('tbl_product')->insert($data);
           Session::put('message','Add Product Successful ');
           return Redirect::to('add-product');
       }
       $data['product_image'] = '';
       DB::table('tbl_product')->insert($data);
       Session::put('message','Add Product Successfull');
       return Redirect::to('all-product');
   }
    public function unactive_product($product_id){
        $this->AuthLogin();
    DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
    Session::put('message','Không kích hoạt sản phẩm thành công');
    return Redirect::to('all-product');
    }
    public function active_product($product_id){
        $this->AuthLogin();
    DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
    Session::put('message','Không kích hoạt sản phẩm thành công');
    return Redirect::to('all-product');
    }
    public function editProduct($product_id){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand_product')->orderby('brand_id','desc')->get(); 
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product  = view('admin.editProduct')->with('edit_product',$edit_product)->with('cate_product',$cate_product)->with('brand_product',$brand_product);
        return view('admin_layout')->with('admin.editProduct', $manager_product);
    }
    public function updateProduct(Request $request , $product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['price'] = $request->product_price;
        $data['discount_percentage'] = $request->discount_percentage;
        if( $request->discount_percentage!=0){
            $data['sale_price'] = round($request->product_price*(1- $request->discount_percentage/100)/1000,0)*1000;
           }
           else{
            $data['sale_price'] = $request->product_price;
           }
        $data['cpu'] = $request->product_cpu;
        $data['hard drive'] = $request->product_hardDrive;
        $data['ram'] = $request->product_ram;
        $data['screen'] = $request->product_screen;
        $data['graphics card'] = $request->product_graphicsCard;
        $data['size'] = $request->product_size;
        $data['inventory_qty'] = $request->product_inventoryQty;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['featured'] = $request->product_featured;
        $data['description'] = $request->product_desc;
        $get_image = $request->file('product_image');
        
        if($get_image){
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move('public/uploads/product',$new_image);
                    $data['product_image'] = $new_image;
                    DB::table('tbl_product')->where('product_id',$product_id)->update($data);
                    Session::put('message','Cập nhật sản phẩm thành công');
                    return Redirect::to('all-product');
        }
            
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Update product successful');
        return Redirect::to('all-product');
    }
    public function deleteProduct($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Delete product successful');
        return Redirect::to('all-product');
    }
    public function showProduct(){
        $all_category_product = Category::orderBy('category_id','DESC')->get();
        $all_brand_product = Brand::orderBy('brand_id','DESC')->get();
        $product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
        return view('page.product.list')->with('products',$product)->with('all_category_product',$all_category_product)->with('all_brand_product',$all_brand_product);

    }


    public function detailProduct($product_id){
        $product = DB::table('tbl_product')->where('product_id',$product_id)
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->first();
        return view('page.product.detail')->with('product',$product);
    }

    public function search(Request $request){
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('tbl_product')
            ->where('product_name', 'LIKE', "%{$query}%")
            ->get();
            $input ='<ul class="suggest_search">';
           foreach($data as $row){
               $input .= '             
               <li class="product_suggest">
               <a href="http://trikhang.com/detail-product/'.$row->product_id .'" >
                   <div class="item-img">
                       <img src="http://trikhang.com/public/uploads/product/' .$row->product_image .' " alt="">
                   </div>
                   <div class="item-info">
                       <h3> ' .$row->product_name .'
                       </h3>
                       <strong class="price"> ' .number_format($row->sale_price) .'₫ </strong>
                   </div>
               </a>
           </li>
               '
               ;
           }
           $input .='</ul>';

           echo $input;
       }
    
    }
}
