@extends('layout')
@section('content')
    <!-- end header  -->
    <main style="background-color : white; margin-bottom: 20px;">
        <div id="slide-show"></div>
        <div class="container">
            <div class="row product-info">
                <div class="col-md-5">
                    <img class="img-thumbnail" src="{{asset('public/uploads/product/'.$product->product_image)}}" width="450px" height="450px" alt="">
                    <div class="product-detail-carousel-slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img class="img-thumbnail" src="" alt="">
                            </div>
                            <div class="item">
                                <img class="img-thumbnail" src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h1 class="product-name">{{$product->product_name}}</h1>
                         <?php 
                               if ($product->price != $product->sale_price) {
                         ?>
                              <span class="product-item-regular" >{{number_format($product->price)}}₫</span>
                         <?php 
                              }
                         ?> 
                              <span class="product-item-discount">{{number_format($product->sale_price)}}₫</span>
                 <br>
                    <div class="quantity" style="margin-bottom: 15px;">
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            {{csrf_field() }}
                        <label for="inputZip" style="color: #777777; margin-top: 20px; margin-right: 20px;" class="demo">Quantity:</label>
                        <input type="number" value="1" min="1" class="qty form-control" name="qty">
                        <input name="product_id_hidden" type="hidden" value="{{$product->product_id}}">
                        <button type="submit" class="button nutslide fontoswald btn btn-warning mt-2">ADD TO CART</button>
                    </form>
                    </div>
                    <p style="margin-bottom: 5px;"> <b>Availability:</b>
                         <?php 
                              if($product->inventory_qty>0){
                         ?>
                                   In Stock
                          <?php 
                              }
                              else{
                         ?>
                                   Out Stock
                         <?php
                              }
                          ?>    
                         </p>
                    <p style="margin-bottom: 5px;"><b>Condition:</b> New</p>
                    <p style="margin-bottom: 5px;"><b>Brand: </b>{{$product->brand_name}}</p>
                </div>
                <div class="col-md-3">
                    <div class="frame-right">
                        <div class="streng-product">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-left">
                                        <i class="fas fa-user-cog" style="font-size: 25px;"></i>
                                    </div>
                                    <div class="item-right">
                                        <strong class="name">
                                            Đổi trả trong <font>30 ngày</font> , thủ tục đơn giản nhanh chóng
                                        </strong>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-left">
                                        <i class="fas fa-truck" style="font-size: 25px;"></i>
                                    </div>
                                    <div class="item-right">
                                        <strong class="name">
                                            Giao hàng nhanh <font>miễn phí trong</font>nội thành
                                        </strong>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-left">
                                        <i class="fas fa-shield-virus" style="font-size: 25px;"></i>
                                    </div>
                                    <div class="item-right">
                                        <strong class="name">
                                           Bảo hành <font>12 tháng </font> tận nơi
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="adv-ddress">
                            <label for="">Để được hỗ trợ tốt nhất hãy gọi</label>
                            <a href="tel:0326737214">0326.737.214</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-description row">
                <div class="des-left col-md-8">
                    <div class="tab-title">
                        <span>Đặc điểm nổi bật</span>
                    </div>

                </div>
                <div class="des-right col-md-4">
                    <div class="tab-title">
                        <span>Thông số kĩ thuật</span>
                    </div>
                    <div class="tab-content-right">
                        <table class="charactestic_table" border="0" bordercolor="#EEE" cellpadding="7" width="100%">
                            <tbody>
                                <tr class="tr-0">
                                    <td class="title_charactestic" width="40%">
                                        CPU </td>
                                    <td class="content_charactestic">
                                        256GB (có thể nâng cấp SSD) </td>
                                </tr>
                                <tr class="tr-1">
                                    <td class="title_charactestic" width="40%">
                                        Ram </td>
                                    <td class="content_charactestic">
                                        8GB DDR4 2133MHz </td>
                                </tr>
                                <tr class="tr-0">
                                    <td class="title_charactestic" width="40%">
                                        Hard Drive </td>
                                    <td class="content_charactestic">
                                        Core™ i5 6300U </td>
                                </tr>
                                <tr class="tr-1">
                                    <td class="title_charactestic" width="40%">
                                        Screen </td>
                                    <td class="content_charactestic">
                                        2.4GHz </td>
                                </tr>
                                <tr class="tr-0">
                                    <td class="title_charactestic" width="40%">
                                        Graphics Card </td>
                                    <td class="content_charactestic">
                                        Intel® HD Graphics 620 </td>
                                </tr>
                                <tr class="tr-1">
                                    <td class="title_charactestic" width="40%">
                                        Size </td>
                                    <td class="content_charactestic">
                                        Ko có </td>
                                </tr>
                                <tr class="tr-0">
                                    <td class="title_charactestic" width="40%">
                                      Connector</td>
                                    <td class="content_charactestic">
                                        1 x USB 3.0 1 x USB 3.0 (Chargeable USB), 4-in-1 SD Card Reader, hdmi, Mic / Headphone Combo Jack </td>
                                </tr>
                                <tr class="tr-1">
                                    <td class="title_charactestic" width="40%">
                                        Network Communication </td>
                                    <td class="content_charactestic">
                                        Wifi, Bluetooth 4.1 LE </td>
                                </tr>
                                <!-- <tr class="tr-1">
                                    <td colspan="2" class="title_charactestic"><span class="readmore" id="readmore_chareactestic"> Xem thêm cấu hình</span></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>


    @endsection
