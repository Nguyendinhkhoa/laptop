@extends('admin_layout')
@section('admin_content')
<div id="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
                                 <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="notifi"  style="font-size: 20px; color: red; font-weight : bold;">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Quản lý</a>
			</li>
			<li class="breadcrumb-item active">Sản phẩm</li>
		</ol>
                                @foreach($edit_product as $key => $pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}">
                                </div>
                                     <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" value="{{$pro->price}}" name="product_price" class="form-control" id="exampleInputEmail1" >
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1">{{$pro->product_desc}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_content" id="exampleInputPassword1" >{{$pro->product_content}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            @if($cate->category_id==$pro->category_id)
                                            <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                            @else
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                            @endif
                                        @endforeach
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Thương hiệu</label>
                                      <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                             @if($cate->category_id==$pro->category_id)
                                            <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                             @else
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                             @endif
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                                </form>
                                @endforeach
                                <script type="text/javascript" src="public/vendor/ckeditor/ckeditor.js"></script>
                                <script>CKEDITOR.replace('description');</script>
                                <!-- /form -->
                                <!-- /.container-fluid -->
                                <!-- Sticky Footer -->
                            </div>
                            <!-- /.content-wrapper -->
                        </div>
            </div>
@endsection