@extends('home/layout')
@section('home/content')
<div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            
                            <li class="breadcrumb-item active">Cây cảnh</li>
                        </ol>
                        <!-- btn -->
                        <a href="#" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Trở lại </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
        <section class="single_product_details_area section_padding_0_100">
            <div class="container">
                <div class="row">
                @foreach($sp as $dssp)
                    <div class="col-12 col-md-6">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(/karlmaster/img/{{$dssp->Anh}});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(/karlmaster/img/{{$dssp->Anh}});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(/karlmaster/img/{{$dssp->Anh}});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(/karlmaster/img/{{$dssp->Anh}});">
                                    </li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="/karlmaster/img/{{$dssp-> Anh}}">
                                        <img class="d-block w-100" src="/karlmaster/img/{{$dssp-> Anh}}" alt="First slide">
                                    </a>    
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="/karlmaster/img/{{$dssp-> Anh}}">
                                        <img class="d-block w-100" src="/karlmaster/img/{{$dssp-> Anh}}" alt="Second slide">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="/karlmaster/img/{{$dssp-> Anh}}">
                                        <img class="d-block w-100" src="/karlmaster/img/{{$dssp-> Anh}}" alt="Third slide">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="/karlmaster/img/{{$dssp-> Anh}}">
                                        <img class="d-block w-100" src="/karlmaster/img/{{$dssp-> Anh}}" alt="Fourth slide">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">

                            <h4 class="title"><a href="#">{{$dssp->Tensanpham}}</a></h4>

                            <h4 class="price">{{number_format($dssp-> Gia)}},000 VNĐ</h4>

                            <p class="available">Tình trạng: <span class="text-muted">Còn hàng</span></p>

                            <div class="single_product_ratings mb-15">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                           

                            <!-- Add to Cart Form -->
                            <form action="{{ route('cart.store') }}" class="cart clearfix mb-50 d-flex" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="quantity">
                                    <!-- <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span> -->
                                    <!-- <span class="qty-minus" onclick=""><i class="fa fa-minus" aria-hidden="true"></i></span> -->
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                    <!-- <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span> -->
                             </div>

                                
                        
                        <input type="hidden" value="{{$dssp-> id }}" name="id">
                        <input type="hidden" value="{{$dssp-> Tensanpham}}" name="Tensanpham">
                        <input type="hidden" value="{{$dssp-> Gia}}" name="Gia">
                        <input type="hidden" value="{{$dssp-> Anh}}"  name="Anh">
                        <input type="hidden" value="1" name="Soluong">
                        <div class="product-description">
                        <!-- <button class="add-to-cart-btn" style="border: none;background-color: #fff;">THÊM VÀO GIỎ HÀNG</button> -->
                        <!-- <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Thêm vào giỏ</button> -->
                        </div>
                    
                                <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Thêm vào giỏ</button>
                            </form>

                            <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Thông tin</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>{{$dssp->Mota}}</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Chi tiết giỏ hàng</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p> {{$dssp->Mota}} </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Vận chuyển và trả hàng</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Khách hàng có thể nhận hàng từ 3 cho đến 5 ngày </p>
                                            <p>Khách hàng được kiểm tra hàng và đổi trả trong 3 ngày</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </section>
        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

        <!-- ****** Quick View Modal Area Start ****** -->
       
        <!-- ****** Quick View Modal Area End ****** -->

        <section class="you_may_like_area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>SẢN PHẨM LIÊN QUAN</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="you_make_like_slider owl-carousel">

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="/karlmaster/img/cayday.webp" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">Từ 10.328.363 VNĐ</h4>
                                    <p>Cây si</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">THÊM VÀO GIỎ</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="/karlmaster/img/cayday.webp" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">Từ 5.801.091 VNĐ</h4>
                                    <p>Cây si</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">THÊM VÀO GIỎ</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="/karlmaster/img/cayday.webp" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">Từ 1.688.363 VNĐ</h4>
                                    <p>Cây si</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">THÊM VÀO GIỎ</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="/karlmaster/img/cayday.webp" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">Từ 7.859.273 VNĐ</h4>
                                    <p>Cây si</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">THÊM VÀO GIỎ</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="/karlmaster/img/cayday.webp" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">Từ 3.942.909 VNĐ</h4>
                                    <p>Cây si</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">THÊM VÀO GIỎ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection


