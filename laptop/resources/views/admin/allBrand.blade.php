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
                                <th><input type="checkbox" name="" onclick=checkAll(this)></th>
                                <th>Tên thương hiệu</th>        
                                <th ></th>
                                <th ></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_brand_product as $key => $brand_pro)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]" value="{{$brand_pro->brand_id}}"><i></i></label></td>
                                <td>{{ $brand_pro->brand_name }}</td>
                                <td><a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit btn btn-warning btn-sm" ui-toggle-class="" >Edit</a></td>
                                <td><a onclick="return confirm('Bạn có chắc là muốn xóa thương hiệu này ko?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit btn btn-danger btn-sm btn-delete-brand" ui-toggle-class="">Delete </a></td>
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