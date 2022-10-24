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
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label"  for="exampleInputEmail1">Tên thương hiệu</label>
                                    <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>                               
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm thương hiệu</button>
                                </form>
                                <script type="text/javascript" src="{{asset('public/vendor/ckeditor/ckeditor.js')}}"></script>
                                <script>CKEDITOR.replace('#description');</script>
                                <!-- /form -->
                                <!-- /.container-fluid -->
                                <!-- Sticky Footer -->
                            </div>
                            <!-- /.content-wrapper -->
                        </div>
@endsection