@extends('master')
@section('content')
<script type="text/javascript" src="source/js/script.min.js" ></script>
<div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Triển lãm tại Pari năm 2014</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Bộ sưu tập giày cao gót dành cho các quý cô</h1>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="source/images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Chất liệu da thật 100%</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2><br>Evashoes đã làm nên thương hiệu được các quý cô tin tưởng và yêu thích</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="source/images/slider-image-03.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Cập nhật xu hướng thời trang 2019</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p><br><br>Luôn làm hài lòng các quý cô trong mọi sản phẩm</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="source/images/slider-image-02.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
<!-- banner -->
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img style="height: 150px;" src="source/images/products/slide/slide3.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img style="height: 150px;" src="source/images/products/slide/slide2.jpg" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img style="height: 150px;" src="source/images/products/slide/slide4.jpg" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Main -->
         <div class="clearfix"></div>
         <div class="container_fullwidth" style="background-color: #EEE9E9">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title">Sản Phẩm <strong>Mới</strong></h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">
                           @foreach($newsp as $new)
                           <div class="col-md-3 col-sm-2">
                              <div class="products">
                                 <div class="offer">new</div>
                                 <div class="thumbnail"><a href="{{route('chitietsp',$new->id)}}"><img src="source/images/products/small/{{$new->hinhanh}}" alt="Product Name"></a></div>
                                 <div class="productname">{{$new->tensp}}</div>
                                 <h4 class="price">{{number_format($new->gia)}}.000<sup>đ</sup></h4>
                                 <div style="margin-left: 50px">
                                 <a class="review_num" href="#">
                                     Đánh giá:
                                 </a>
                                 <img alt="" src="source/images/star.png">
                                </div>
                                 <div class="button_group">
                                    <button class="button add-cart" type="button"><a href="{{asset('cart/add/'.$new->id)}}">Add To Cart</a></button>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title">Sản Phẩm <strong>Nổi Bật</strong></h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           @foreach($topsp as $top )
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="{{route('chitietsp',$top->id)}}"><img src="source/images/products/small/{{$top->hinhanh}}" alt="Product Name"></a></div>
                                 <div class="productname">{{$top->tensp}}</div>
                                 <h4 class="price">{{number_format($top->gia)}}.000<sup>đ</sup></h4>
                                 <div style="margin-left: 50px">
                                 <a class="review_num" href="#">
                                     Đánh giá:
                                 </a>
                                 <img alt="" src="source/images/star.png">
                                </div>
                                 <div class="button_group">
                                    <button class="button add-cart" type="button"><a href="{{asset('cart/add/'.$top->id)}}">Add To Cart</a></button>
                                  {{--   <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                                    <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button> --}}
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </li>
                  </ul>
               </div>
        @endsection