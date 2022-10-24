@extends('admin_layout')
@section('admin_content')
<div id="content-wrapper">
	<div class="container-fluid">
        <?php
            $message = Session::get('message');
            if($message){
                echo '<span class="notifi" style="font-size: 20px; color: red; font-weight : bold;">'.$message.'</span>';
                Session::put('message',null);
            }
        ?>
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/dashboard">Quản lý</a>
                </li>
                <li class="breadcrumb-item active">Sản phẩm</li>
        </ol>
                            @foreach($edit_brand_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" >
                                </div>                               
                                <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật danh mục</button>
                                </form>
                            </div>
                            @endforeach
                            <script type="text/javascript" src="public/vendor/ckeditor/ckeditor.js"></script>
                            <script>CKEDITOR.replace('description');</script>
                            <!-- /form -->
                            <!-- /.container-fluid -->
                            <!-- Sticky Footer -->
                        <!-- /.content-wrapper -->
    </div>
 </div>
@endsection