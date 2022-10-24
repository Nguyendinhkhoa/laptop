@extends('admin_layout')
@section('admin_content')

<div id="content-wrapper">
    <div class="container-fluid">
       <!-- Breadcrumbs-->
       
       <?php
       $message = Session::get('message');
       if($message){
           echo '<span class="notifi" style="font-size: 20px; color: red; font-weight : bold;">'.$message.'</span>';
           Session::put('message',null);
       }
       ?>
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="index.php">Quản lý</a>
          </li>
          <li class="breadcrumb-item">Danh mục</li>
       </ol>
                            @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" value="{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" >
                                </div>                               
                                <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
                                </form>
                            </div>
                            @endforeach
                    </section>
    </div>
            </div>
@endsection