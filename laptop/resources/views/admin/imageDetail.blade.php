@extends('admin_layout')
@section('admin_content')
<div id="content-wrapper">
     <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
           <li class="breadcrumb-item">
              <a href="index.php">Quản lý</a>
           </li>
           <li class="breadcrumb-item">Hình ảnh</li>
           <li class="breadcrumb-item active"><?=$product->product_name?></li>
        </ol>
        <!-- DataTables Example -->
        <div class="action-bar">
           
           <label style="cursor: pointer;" for="delete" class="btn btn-danger btn-sm">Xóa</label>
        </div>
        <div class="card mb-3">
           <div class="card-body">
              <div class="table-responsive">
                 <form action="index.php?c=imageItem&a=deletes" method="POST">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                       <thead>
                          <tr>
                             <th>Hình ảnh</th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                         @foreach($all_image as $imageItem) 
                          <tr>

                             <td><img src="{{asset('public/uploads/product/'.$imageItem->name)}}"></td>
                             <td><a href="{{URL::to('image-delete/'.$imageItem->id)}}" class="btn btn-danger" onclick="return confirm('Bạn muốn xóa hình này không?')">Xóa</a></td>
                          </tr>
                          @endforeach
                       </tbody>
                    </table>
                    <input type="hidden" name="product_id" value="<?=$product->product_id?>">
                    <input type="submit" id="delete" hidden>
                 </form>
              </div>
           </div>
  
        </div>
          <form action="{{URL::to('add-image/'.$product->product_id)}}" method="POST" enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="form-group">
                    <label class="control-label"  for="exampleInputEmail1">Hình ảnh chi tiết sản phẩm</label>
                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
               </div>
                    <button type="submit" name="add-image" class="btn btn-info">Upload</button>
          </form>
     </div>
   @endsection  