<!DOCTYPE html>
<html lang="en">
   <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Tổng quan</title>
<!-- Create favicon -->
{{-- <link rel="shortcut icon" type="image/x-icon" href="public/backend/images/logo.jpg" /> --}}
<!-- Custom fonts for this template-->
<link href="{{asset('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->
<link href="{{asset('public/backend/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="{{asset('public/backend/css/sb-admin.css')}}" rel="stylesheet">
<link href="{{asset('public/backend/css/admin.css')}}" rel="stylesheet">
</head>
<body id="page-top">
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
   <a class="navbar-brand mr-1" href="/dashboard">Laptop Trí Khang</a>
   <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
   <i class="fas fa-bars"></i>
   </button>
   <!-- Navbar Search -->
   <!-- Navbar -->
   <ul class="navbar-nav ml-auto">
      <li class="nav-item no-arrow text-white">
         <span >Chào Nguyễn Đình Khoa</span> |
         <a class="text-white nounderline" href="#" data-toggle="modal" data-target="#logoutModal">Thoát</a>
      </li>
   </ul>
</nav>
<div id="wrapper">
   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
      <li class="nav-item active">
         <a class="nav-link" href="/dashboard"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Tổng quan</span></a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-shopping-cart"></i> <span>Đơn hàng</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/order/list.html">Danh sách</a>
            <a class="dropdown-item" href="public/backend/pages/order/add.html">Thêm</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fab fa-product-hunt"></i> <span>Sản Phẩm</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="{{URL::to('/all-product')}}">Danh sách</a>
            <a class="dropdown-item" href="{{URL::to('/add-product')}}">Thêm</a>
         </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-folder"></i> <span>Danh Mục</span></a>
          <div class="dropdown-menu" aria-labelledby="">
             <a class="dropdown-item" href="{{URL::to('/all-category-product')}}">Danh sách</a>
             <a class="dropdown-item" href="{{URL::to('/add-category-product')}}">Thêm</a>
          </div>
       </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-folder"></i> <span>Thương Hiệu</span></a>
          <div class="dropdown-menu" aria-labelledby="">
             <a class="dropdown-item" href="{{URL::to('/all-brand-product')}}">Danh sách</a>
             <a class="dropdown-item" href="{{URL::to('/add-brand-product')}}">Thêm</a>
          </div>
       </li>
      {{-- <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-comments"></i> <span>Comment</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/comment/list.html">Danh sách</a>
         </div>
      </li> --}}

      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="far fa-image"></i> <span>Hình ảnh</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="/imageItem">Danh sách</a>
         </div>
      </li>
      {{-- <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-user-alt"></i> <span>Khách hàng</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/customer/list.html">Danh sách</a>
            <a class="dropdown-item" href="public/backend/pages/customer/add.html">Thêm</a>
         </div>
      </li> --}}

      {{-- <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-percentage"></i> <span>Khuyến mãi</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/promotion/list.html">Danh sách</a>
            <a class="dropdown-item" href="public/backend/pages/promotion/add.html">Thêm</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-shipping-fast"></i> <span>Phí giao hàng</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/transport/list.html">Danh sách</a>
            <a class="dropdown-item" href="public/backend/pages/transport/add.html">Thêm</a>
         </div>
      </li> --}}
      {{-- <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-users"></i> <span>Nhân viên</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/staff/list.html">Danh sách</a>
            <a class="dropdown-item" href="public/backend/pages/staff/add.html">Thêm</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-user-shield"></i> <span>Phân quyền</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/permission/roles.html">Danh sách vai trò</a>
            <a class="dropdown-item" href="public/backend/pages/permission/add_role.html">Thêm vai trò</a>
            <a class="dropdown-item" href="public/backend/pages/permission/actions.html">Danh sách tác vụ</a>
         </div>
      </li> --}}
      <li class="nav-item">
         <a class="nav-link" href="public/backend/pages/order_status/list.html"><i class="fas fa-star-half-alt"></i> <span>Trạng thái đơn hàng</span></a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id=""><i class="fas fa-file-alt"></i> <span>News letter</span></a>
         <div class="dropdown-menu" aria-labelledby="">
            <a class="dropdown-item" href="public/backend/pages/newsletter/list.html">Danh sách</a>
            <a class="dropdown-item" href="public/backend/pages/newsletter/send.html">Gởi mail</a>
         </div>
      </li>
   </ul>

   @yield('admin_content')


   <footer class="sticky-footer">
    <div class="container my-auto">
       <div class="copyright text-center my-auto">
          <span>Copyright © Đình Khoa 2021</span>
       </div>
    </div>
 </footer>
</div>
<!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
    <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bạn muốn thoát?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
       </div>
       <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
          <a class="btn btn-primary" href="/admin">Thoát</a>
       </div>
    </div>
 </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{asset('public/backend/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/backend/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('public/backend/js/sb-admin.min.js')}}"></script>
<!-- Demo scripts for this page-->
<script src="{{asset('public/backend/js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('public/backend/js/admin.js')}}"></script>
</body>
</html>