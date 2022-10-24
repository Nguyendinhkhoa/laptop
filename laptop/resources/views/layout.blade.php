<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapTop Trí Khang</title>
         {{-- cart template  --}}
         <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}" type="text/css">
         <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
         <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
         <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
         <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
         <link rel="stylesheet" href="{{asset('public/frontend/css/style1.css')}}" type="text/css">

         
    <link rel="icon" href="{{('public/frontend/images/favicon.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    

</head>
<body>
    <header id="home" class="home">
        <div class="top-header d-none d-md-block ">
            <div class="container ">
                <div class="row ">
                    <div class="col-xs-12 col-sm-6 header-left ">
                        <div class="social float-sm-left text-xs-center text-sm-left ">
                            <a href="https://youtube.com " target="_blank "><i class="fab fa-youtube "></i> Youtube</a>
                            <a href="https://www.facebook.com " target="_blank "><i class="fab fa-facebook-square "></i> Facebook</a>
                            <a href="https://www.instagram.com/ "><i class="fab fa-instagram-square " target="_blank "></i> Instagram</a>
                            <a href="https://shopee.vn/ "><i class="fas fa-shopping-bag "></i> Shoppe</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 header-right ">
                        <?php 
                        if(Session::get('customer_name' )!=null){
                        ?>
                        <a href="{{URL::to('/123')}}" class="lienhe float-sm-right ">{{Session::get('customer_name' ) }}</a>
                        <?php 
                        }else { 
                        ?>
                        <a href="{{URL::to('/login')}}" class="lienhe float-sm-right ">Sign in / Sign up</a>
                        <?php }?>
                        </div>
                </div>
            </div>
        </div>
        <!-- end top-header -->
        <div class="middle-header">
            <div class="container">
                <div class="nav_block">
                    <a class="navbar-brand ml-md-5" href="{{URL::to('/trang-chu')}}">
                        <img src="{{asset('public/frontend/images/logo.png')}}" alt="">
                    </a>
                    <div class="product_search_form">
                        <form>
                            @csrf
                            <div class="input-group">
                                <input class="form-control" name="product_name" id="product_name" placeholder="Search Product..." required="" type="text">
                                <button type="submit" class="search_btn"><i class="fas fa-search"></i></button>
                            </div>
                            <div id="search-result"></div>
                        </form>
                    </div>
                    <div class="contact_phone order-md-last mr-md-5">
                        <span style="font-size : 170% ;   color: #29a07e;">
                            <a style="color: #29a07e;" href="tel:0326737214"> <i class="fas fa-phone-square-alt"></i><b> 0326737214</b></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light destop-menu ">
                <div class="container">
                    <a class="navbar-brand" href="{{URL::to('/trang-chu')}}">Trí Khang</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{URL::to('/trang-chu')}}"><i class="fas fa-home" style="margin-right :1px;"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{URL::to('/product')}}">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="cart"><a href="show-cart" class="btn-cart-detail" title="Giỏ Hàng"><span class="lnr lnr-cart" style="font-size: 20px;"></span> <span class="number-total-product">3</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header  -->

    {{-- MAIN  --}}
            @yield('content')
    </main>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="support">
                        <ul class="menu-bottom">
                            <li class="  level0  first-item">
                                <input type="checkbox" id="item_1"> <label class="label_nolink" for="item_1" data-id="item_1">	Policy 	</label>
                                <ul id="menu-sub1">
                                    <li class="  level1  first-sitem ">
                                        <a href="" title="Vê chúng tôi">	About Us	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Chính sách quy định chung">	Policy general provisions	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Chính sách quy định chung">	Delivery policy	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Chính sách bảo hành">	Warranty Policy 	</a>
                                    </li>
                                    <li class="  level1  mid-sitem ">
                                        <a href="" title="Liên hệ">	Contact 	</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="address_re">
                        <div class="title_footer">Showroom</div>
                        <div class="info_bottom cls">
                            <div class="item_info">
                                <div class="address">
                                    <i style="font-size: 18px; padding-right: 3px; color: #BB483E;" class="fas fa-map-marked-alt"></i><span style="color: #BB483E; font-size: 18px;">Address :</span>
                                    <span class="box-content">262/2/30 Phan Anh , Phường Hiệp Tân , Quận Tân Phú , TP. Hồ Chí Minh</span>
                                </div>
                            </div>
                            <div class="item_info">
                                <div class="phone">
                                    <i style="font-size: 18px; padding-right: 3px; color: #BB483E;" class="fas fa-mobile-alt"></i><span style="color: #BB483E; font-size: 18px;">Phone :</span>
                                    <span class="box-content"><a href="tel:0326737214">0326737214</a></span>
                                </div>
                            </div>
                            <div class="item_info">
                                <div class="email"><i style="font-size: 18px; padding-right: 3px; color: #BB483E;" class="fas fa-map-marked-alt"></i><span>Email :</span>
                                    <span class="box-content">  <a href="mailto:nguyendinhkhoa1234@gmail.com">nguyendinhkhoa1234@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="title_footer">Open Hours</div>
                    <div class="opening1">
                        <div class="right float-right">9:00am - 23:00pm</div>
                        <div class="left float-left">Mon-Fri</div>

                    </div>
                    <div class="opening1 ">
                        <div class="right float-right">10:00am - 22:00pm</div>
                        <div class="left float-left">Saturday</div>
                    </div>
                    <div class="opening1">
                        <div class="right float-right">10:00am - 21:00pm</div>
                        <div class="left float-left">Sungday</div>
                    </div>
                </div>
                <div class="col-md-3"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLaptop-Tr%25C3%25AD-Khang-101294645429168&tabs=timeline&width=500&height=120&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1350363191983263"
                        width="340" height="120" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>

    </footer>
    <div class="back-to-top" class="bg-color">
        <i class="fas fa-angle-up"></i>
    </div>

    <!-- CART DIALOG -->
    {{-- <div class="modal fade" id="modal-cart-detail" role="dialog">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content " style="text-align : center; ">
                <div class="modal-header bg-color">
                    <h5 class="modal-title" id="exampleModalLabel">GIỎ HÀNG</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-content">
                    <div class="modal-body ">
                        <div class="page-content">
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-4">
                                    <div class="header">
                                        Sản phẩm
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="header">
                                        Đơn giá
                                    </div>
                                </div>
                                <div class="label_item col-lg-2">
                                    <div class="header">
                                        Số lượng
                                    </div>
                                </div>
                                <div class="lcol-lg-1">
                                </div>
                            </div>
                            <div class="cart-product">
                                <hr>
                                <div class="clearfix text-center">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-2">
                                            <div><img style="width:130px" class="img-responsive" src="{{('public/frontend/images/product/ideapad_5i.jpg')}}" alt="Laptop Lenovo IdeaPad Slim 5"></div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 align-items-center"><a class="product-name" href="#">Laptop Lenovo IdeaPad Slim 5</a></div>
                                        <div class="col-sm-6 col-lg-3"><span class="product-item-discount">190,000₫</span></div>
                                        <div class="col-sm-6 col-lg-2"><input type="hidden" value="1"><input style="width : 60px" type="number" onchange="updateProductInCart(this,2)" min="1" value="1"></div>
                                        <div class="col-sm-6 col-lg-1"><a class="remove-product" href="javascript:void(0)" onclick="deleteProductInCart(2)"><i class="fas fa-trash-alt"></i></a></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="clearfix  ">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-2">
                                            <div><img style="width:130px" class="img-responsive" src="{{('public/frontend/images/product/lenovo_thinkbook.jpg')}}" alt="Laptop Lenovo IdeaPad Slim 5"></div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4 align-items-center"><a class="product-name" href="#"> Lenovo ThinkBook 14s Yoga</a></div>
                                        <div class="col-sm-6 col-lg-3"><span class="product-item-discount">250,000₫</span></div>
                                        <div class="col-sm-6 col-lg-2"><input type="hidden" value="1"><input style="width : 60px" type="number" onchange="updateProductInCart(this,4)" min="1" value="2"></div>
                                        <div class="col-sm-6 col-lg-1"><a class="remove-product" href="javascript:void(0)" onclick="deleteProductInCart(4)"><i class="fas fa-trash-alt"></i></a></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="clearfix ">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-2">
                                            <div><img style="width:130px" class="img-responsive" src="{{('public/frontend/images/product/lenovo_v15.jpg')}}" alt="Lenovo v15"></div>
                                        </div>
                                        <div class="col-sm-6 col-lg-4"><a class="product-name" href="#">Lenovo v15</a></div>
                                        <div class="col-sm-6 col-lg-3"><span class="product-item-discount">180,000₫</span></div>
                                        <div class="col-sm-6 col-lg-2"><input type="hidden" value="1"><input style="width : 60px" type="number" onchange="updateProductInCart(this,7)" min="1" value="3"></div>
                                        <div class="col-sm-6 col-md-1"><a class="remove-product" href="javascript:void(0)" onclick="deleteProductInCart(7)"><i class="fas fa-trash-alt"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="clearfix">
                            <div class="col-xs-12 text-right">
                                <p>
                                    <span>Tổng tiền</span>
                                    <span class="price-total">1,230,000₫</span>
                                </p>
                                <input type="button" name="checkout" class="btn btn-primary" value="Đặt hàng">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- END CART DIALOG -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.zoom.min.j')}}s"></script>
    <script src="{{asset('public/frontend/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>


    <script src="{{asset('public/frontend/js/script.js')}}"></script>
    {{-- <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id = $(this).data('id');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(data){

                        alert(data);

                    }

                });
            });
        });
    </script> --}}
    
    <script>
            $(document).ready(function() {
        $('#product_name').keyup(function() {
            var query = $(this).val(); //lấy gía trị ng dùng gõ
            $('#search-result').html("");
            if (query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
            {
                var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                $.ajax({
                    url: "{{ route('searchajax')}}" ,
                    method: "POST", // phương thức gửi dữ liệu.
                    data: { query: query, _token: _token },
                    success: function(data) { //dữ liệu nhận về
                        if (data == null) {
                            $('#search-result').html("");
                        } else {
                            $('#search-result').fadeIn();
                            $('#search-result').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
                        }
                    }
                });
                $(document).on('click', 'li', function(){  
                 $('#product_name').val($(this).text());  
                 $('#search-result').fadeOut();  
                 });  
            }

        })
    });
    </script>
</body>

</html>