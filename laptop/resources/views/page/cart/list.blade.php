@extends('layout')
@section('content')
<main style="background-color : white; margin-bottom: 20px;">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{URL::to('/trang-chu')}}"><i class="fa fa-home"></i> Home</a>
                        <i class="fas fa-angle-double-right"></i>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="" style="width: 1200px ; margin : auto;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        @php
                        $content = Cart::content();
                        @endphp
                        <table>
                            <thead>
                                <tr>
                                    <th class="duongke">Image</th>
                                    <th class="p-name duongke">Product Name</th>
                                    <th class="duongke">Price</th>
                                    <th class="duongke">Quantity</th>
                                    <th class="duongke">Total</th>
                                    <th> Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($content as $v_content) 
                                <tr class="item-cart">
                                    <td class="cart-pic first-row duongke"><img src="{{"public/uploads/product/" . $v_content->options->image}}" alt=""></td>
                                    <td class="cart-title first-row duongke" style="font-family: inherit;font-weight: 500;">
                                       {{$v_content->name}}
                                    </td>
                                    <td class="product-price d-none">{{$v_content->price}}</td>
                                    <td class="p-price first-row duongke">{{number_format($v_content->price)}} ₫</td>
                                    <td class="qua-col first-row duongke">
                                        <div class="quantity-cart">
                                                <input id='test-input' class="form-control" type="number" min='1' name="{{$v_content->rowId}}" value="{{$v_content->qty}}">
                                        </div>
                                    </td>
                                    <td class="total-price first-row duongke">{{Cart::subtotal()}}</td>
                                    <td class="close-td first-row"><i class="ti-close"></i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal" id="cart-subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span id="cart-total">$240.00</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->	

    <!-- Footer Section Begin -->

    @endsection