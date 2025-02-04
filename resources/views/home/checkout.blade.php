@extends('home/layout')


@section('home/content')
 <!-- ****** Checkout Area Start ****** -->
 <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading">
                                <h5>ĐỊA CHỈ THANH TOÁN</h5>
                               
                            </div>

                            <form action="{{ route('cart.checkoutpost') }}" method="post">
                                @csrf
                                <div class="row">
                                    <!-- <div class="col-md-6 mb-3">
                                        <label for="first_name">TÊN <span>*</span></label>
                                        <input type="text" class="form-control" name="Hoten" value="" required>
                                    </div> -->
                                    <div class="col-12 mb-3">
                                        <label for="first_name">TÊN<span>*</span></label>
                                        <input type="text" class="form-control mb-3" name="Hoten" value="">
                                     
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <label for="street_address">ĐỊA CHỈ<span>*</span></label>
                                        <input type="text" class="form-control mb-3"name="Diachi" value="">
                                     
                                    </div>
                                   
                                   
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">SỐ ĐIỆN THOẠI<i></i><span>*</span></label>
                                        <input type="number" class="form-control" id="phone_number" name="Sdt" min="0" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Email Address <span>*</span></label>
                                        <input type="email" class="form-control" id="email_address" name="Email" value="">
                                    </div>

                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
<button type="submit" style="float: right" class="btn karl-checkout-btn">Đặt Hàng</button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">

                            <div class="cart-page-heading">
                                <h5>ĐƠN ĐẶT HÀNG CỦA BẠN</h5>
                                <p>Các chi tiết</p>
                            </div>
                            @foreach ($cartItems as $item)
                            <ul class="order-details-form mb-4">
                                
                                <li><span>Sản phẩm</span> <span>Total</span></li>
                                
                                <li><span>{{$item->name}}</span> <span>{{number_format($item->price)}},000 VNĐ</span></li>
                                <li><span>Tổng phụ</span> <span>{{number_format($item->price)}},000 VNĐ</span></li>
                                <li><span>Phí vận chuyển</span> <span>Free</span></li>
                              
                                <li><span>Tổng tiền</span> <span>{{ config('settings.currency_symbol') }}{{ number_format(\Cart::getSubTotal()) }},000 đ</span></li>
                            </ul>
                            @endforeach
                           


                            <div id="accordion" role="tablist" class="mb-4">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>Paypal</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>TIỀN MẶT</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>THẺ TÍN DỤNG</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fa fa-circle-o mr-3"></i>cHUYỂN KHOẢN</a>
                                        </h6>
                                    </div>
                                    <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est cum autem eveniet saepe fugit, impedit magni.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <a href="#" class="btn karl-checkout-btn">ĐẶT HÀNG</a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection


