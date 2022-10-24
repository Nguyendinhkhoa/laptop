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
			<li class="breadcrumb-item active">Sản phẩm</li>
		</ol>

                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label" for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                     <div class="form-group">
                                    <label class="control-label" for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="number" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="product_price" class="form-control" id="" placeholder="Tên danh mục">
                                </div>
                                  <div class="form-group">
                                    <label class="control-label"  for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">Khuyến mãi (%)</label>
                                    <input type="number" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="discount_percentage" class="form-control" id="" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">CPU</label>
                                    <input type="text"  data-validation-error-msg="Please insert" name="product_cpu" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">Ram</label>
                                    <input type="text"  data-validation-error-msg="Please insert" name="product_ram" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">Hard Drive</label>
                                    <input type="text"  data-validation-error-msg="Please insert" name="product_hardDrive" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">Screen</label>
                                    <input type="text"  data-validation-error-msg="Please insert" name="product_screen" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">Graphics Card</label>
                                    <input type="text"  data-validation-error-msg="Please insert" name="product_graphicsCard" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label  class="control-label" for="exampleInputPassword1">Size</label>
                                    <input type="text"  data-validation-error-msg="Please insert" name="product_size" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                 <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">Inventory_qty</label>
                                    <input type="number"  data-validation-error-msg="Please insert" name="product_inventoryQty" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>

                                 <div class="form-group">
                                    <label class="control-label"  for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach                                           
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label" for="exampleInputPassword1">Thương hiệu</label>
                                      <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endforeach                                    
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-md-12 control-label" for="description">Mô tả sản phẩm</label>
                                    <div class="col-md-12">
                                    <textarea style="resize: none" rows="10" cols="80" class="form-control" name="product_desc"  id="description" placeholder="Nội dung sản phẩm"></textarea>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nổi bật hay không</label>
                                      <select name="product_featured" class="form-control input-sm m-bot15">
                                            <option value="0">Không</option>
                                            <option value="1">Có</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                                <script type="text/javascript" src="{{asset('public/backend/vendor/ckeditor/ckeditor.js')}}"></script>
                                <script>CKEDITOR.replace('description');</script>
                                <!-- /form -->
                                <!-- /.container-fluid -->
                                <!-- Sticky Footer -->
                            </div>
                            <!-- /.content-wrapper -->
                        </div>
@endsection