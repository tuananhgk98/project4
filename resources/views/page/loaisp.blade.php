@extends('master')
@section('content')
      <div class="container_fullwidth" style="background-color: #EEE9E9">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="category leftbar">
                <h3 class="title">
                  Hướng dẫn đi giày cao gót cho người mới bắt đầu
                </h3>
                <iframe width="220" height="315" src="https://www.youtube.com/embed/IOy-NqV8lmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="clearfix">
              </div>
              <div class="branch leftbar">
                <h3 class="title">
                  Video hướng dẫn làm sạch giày
                </h3>
                <iframe width="250" height="315" src="https://www.youtube.com/embed/MyHFzTOGxp8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="source/images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="source/images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
               <div class="clearfix">
              </div>
              <div class="leftbanner">
                <img src="source/images/banner-small-01.png" alt="">
              </div>
            </div>
            <div class="col-md-9">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 
  <div class="carousel-inner" >
    <div class="item active ">
      <img src="source/images/products/slide/slide6.jpg" alt="" >
    </div>
    <div class="item">
      <img src="source/images/products/slide/slide9.jpg" alt="" >
    </div>
    <div class="item">
      <img src="source/images/products/slide/slide8.jpg" alt="" >
    </div>
  </div>
 
  

  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Trước</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Sau</span>
  </a>
</div>
              <div class="clearfix">
              </div>
              <div class="products-grid">
                <div class="clearfix">
                </div>
                <div class="row">
                  @foreach($sptheoloai as $sp)
                  <div class="col-md-3 col-sm-2">
                    <div class="products">
                      <div class="thumbnail">
                        <a href="details.html">
                          <img src="source/images/products/small/{{$sp->hinhanh}}" alt="Product Name">
                        </a>
                      </div>
                      <div class="productname">
                        {{$sp->tensp}}
                      </div>
                      <h4 class="price">
                        {{number_format($sp->gia)}}.000<sup>đ</sup>
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                         <a href="{{asset('cart/add/'.$sp->id)}}">Add To Cart</a>
                        </button>
                        {{-- <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button> --}}
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="row"><center>{{$sptheoloai->links()}}</center></div>
                <div class="clearfix">
                </div>
              </div>
            </div>
          </div>
@endsection