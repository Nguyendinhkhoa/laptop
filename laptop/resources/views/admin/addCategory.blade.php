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
          <li class="breadcrumb-item active">Thêm danh mục</li>
       </ol>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label  class="control-label" for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" required>
                                </div>                        
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
            </div>
            </div>
@endsection