@extends('admin_layout')
@section('admin_content')
<div id="content-wrapper">
    <div class="container-fluid">
       <!-- Breadcrumbs-->
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="index.php">Quản lý</a>
          </li>
          <li class="breadcrumb-item active">Hình ảnh</li>
       </ol>
       <!-- DataTables Example -->
       
       <div class="card mb-3">
          <div class="card-body">
             <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>Tên </th>
				     <th>Hình ảnh</th>
                         
                      </tr>
                   </thead>
                   <tbody>
                   	@foreach ($all_product as $product)
                      <tr>
                        <td><a href="{{URL::to('/image-detail/'.$product->product_id)}}">{{$product->product_name}}</a></td>
                        <td><img src="{{asset('public/uploads/product/'.$product->product_image)}}"></td>
                         
                      </tr>
                     @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection
