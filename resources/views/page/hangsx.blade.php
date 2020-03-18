@extends('master')
@section('content')
<div class="page-index">
          <div class="container">
            <p>
              Home - Products List
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
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
              <div class="price-filter leftbar">
                <h3 class="title">
                  Giá
                </h3>
                <form class="pricing">
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <span class="separate">
                    - 
                  </span>
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <input type="submit" value="Go">
                </form>
              </div>
              <div class="clearfix">
              </div>
             {{--  <div class="clolr-filter leftbar">
                <h3 class="title">
                  Màu sắc
                </h3>
                <ul>
                  <li>
                    <a href="#" class="red-bg">
                      light red
                    </a>
                  </li>
                  <li>
                    <a href="#" class=" yellow-bg">
                      yellow"
                    </a>
                  </li>
                  <li>
                    <a href="#" class="black-bg ">
                      black
                    </a>
                  </li>
                  <li>
                    <a href="#" class="pink-bg">
                      pink
                    </a>
                  </li>
                  <li>
                    <a href="#" class="dkpink-bg">
                      dkpink
                    </a>
                  </li>
                  <li>
                    <a href="#" class="chocolate-bg">
                      chocolate
                    </a>
                  </li>
                  <li>
                    <a href="#" class="orange-bg">
                      orange-bg
                    </a>
                  </li>
                  <li>
                    <a href="#" class="off-white-bg">
                      off-white
                    </a>
                  </li>
                  <li>
                    <a href="#" class="extra-lightgreen-bg">
                      extra-lightgreen
                    </a>
                  </li>
                  <li>
                    <a href="#" class="lightgreen-bg">
                      lightgreen
                    </a>
                  </li>
                  <li>
                    <a href="#" class="biscuit-bg">
                      biscuit
                    </a>
                  </li>
                  <li>
                    <a href="#" class="chocolatelight-bg">
                      chocolatelight
                    </a>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div> --}}
             
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
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
                <img src="images/banner-small-01.png" alt="">
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
              <div class="clearfix">
              </div>
              <div class="products-list">
                <div class="toolbar">
                  <div class="sorter">
                </div>
                <ul class="products-listItem">
                  @foreach($sptheohang as $sp)
                  <li class="products">
                    <div class="offer">
                      new
                    </div>
                    <div class="thumbnail">
                      <img src="source/images/products/small/{{$sp->hinhanh}}" alt="Product Name">
                    </div>
                    <div class="product-list-description">
                      <div class="productname">
                        {{$sp->tensp}}
                      </div>
                      <p>
                        <img src="source/images/star.png" alt="">
                        <a href="#" class="review_num">
                          02 Review(s)
                        </a>
                      </p>
                      <div class="list_bottom">
                        <div class="price">
                          <span class="new_price">
                             {{number_format($sp->giakm)}}.000<sup>đ</sup>
                          </span>
                          <span class="old_price">
                             {{number_format($sp->gia)}}.000<sup>đ</sup>
                          </span>
                        </div>
                        <div class="button_group">
                          <button class="button">
                            <a href="{{asset('cart/add/'.$sp->id)}}">Add To Cart</a>
                          </button>
                          <button class="button compare">
                            <i class="fa fa-exchange">
                            </i>
                          </button>
                          <button class="button favorite">
                            <i class="fa fa-heart-o">
                            </i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="row"><center>{{$sptheohang->links()}}</center></div>
            </div>
          </div>
           @endsection