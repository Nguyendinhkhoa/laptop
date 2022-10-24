@extends('admin_layout  ')
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
           <a href="dashboard">Quản lý</a>
        </li>
        <li class="breadcrumb-item active">Sản phẩm</li>
     </ol>
     <!-- DataTables Example -->

     <div class="card mb-3">
        <div class="card-body">
           <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                    <tr>
                      <th><input type="checkbox" onclick="checkAll(this)" name="" id=""></th>
                      <th>Tên sản phẩm</th>
                      <th>Hình Ảnh</th>
                      <th>Giá</th>
                      <th>% giảm giá</th>
                      <th>Lượng tồn</th>
                      <th>Nổi bật</th>
                      <th>Danh Mục</th>
                      <th>Thương hiệu</th>
                      <th>CPU</th>
                      <th>Ram</th>
                      <th>Ổ Cứng</th>
                      <th>Card Màn Hình</th>
                      <th>Màn Hình</th>
                      <th>Kích Thước</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
        <tbody>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]" value="{{$pro->product_id}}"><i></i></label></td>
            <td>{{ $pro->product_name }} </td>
            <td><img src="public/uploads/product/{{ $pro->product_image }}" height="100" width="100"></td>
            <td>{{number_format( $pro->price )}}</td>
            <td>{{$pro->discount_percentage}} %</td>

            <td>{{$pro->inventory_qty}}</td>
            <td>{{$pro->featured ==1 ? "Nổi Bật" : " "}}</td>

            <td>{{ $pro->category_name }}</td>
            <td>{{ $pro->brand_name }}</td>
            <td>{{ $pro->cpu}}</td>
             <td>{{ $pro->ram }}</td>
            <td>{{ $pro->hard_drive }}</td>
            <td>{{ $pro->graphics_card }}</td>
            <td>{{ $pro->screen }}</td>
            <td>{{ $pro->size}}</td>
            <td><a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit btn btn-warning btn-sm" ui-toggle-class="" >Edit</a></td>
            <td><a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit btn btn-danger btn-sm btn-delete-category" ui-toggle-class="">Delete</a></td>

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