@extends('master') @section('content')
<div class="page-index">
          <div class="container">
            <p>
              Home - Products Details
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="products-details">
                <div class="preview_image">
                  <div class="preview-small">
                    <img id="zoom_03" src="source/images/products/medium/{{$ctsp->hinhanh}}" data-zoom-image="source/images/products/large/{{$ctsp->hinhanh}}" alt="">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="#">
                          <img src="source/images/products/medium/2.jpg" alt="">
                        </a>
                      </li>
                     <li>
                        <a href="#">
                          <img src="source/images/products/medium/5.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="source/images/products/medium/7.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="source/images/products/medium/8.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="source/images/products/medium/10.jpg" alt="">
                        </a>
                      </li>
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="products-description">
                  <h5 class="name">
                    Thông tin chi tiết về sản phẩm
                  </h5>
                  <p style="font-size: 15px;color: black">Tên sản phẩm:{{$ctsp->tensp}}</p>
                  <p  style="font-size: 15px;">Nhà sản xuất:{{$ctsp->tenhang}}</p>
                  <p>
                    <img alt="" src="source/images/star.png">
                    <a class="review_num" href="#">
                      02 Đánh giá(s)
                    </a>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Price :<span class="new_price"> {{number_format($ctsp->gia)}}.000<sup>đ</sup>
                    </span>
                    <span class="old_price">
                      450.00
                      <sup>
                        đ
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Số lượng &nbsp;&nbsp;: 
                      <select>
                        <option>
                          1
                        </option>
                      </select>
                    </div>
                    <div class="button_group">
                      <button class="button" >
                        <a href="{{asset('cart/add/'.$ctsp->id)}}">Add To Cart</a>
                      </button>
                      <button class="button compare">
                        <i class="fa fa-exchange">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-envelope-o">
                        </i>
                      </button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#Descraption">
                       Hướng dẫn bảo quản
                      </a>
                    </li>
                    <li>
                      <a href="#Reviews">
                       Chính sách đổi trả
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <b style="font-weight: bold;color: #000">- Khử mùi bên trong giày</b>
                    <p>                     
                    Mang giày suốt cả ngày dài đôi khi sẽ bị mồ hôi chân gây ẩm ướt, mùi hôi. Bạn hãy đặt túi đựng viên chống ẩm vào bên trong giày để hút ẩm và rắc phấn rôm (có thể thay bằng cách đặt vào bên trong giày gói trà túi lọc chưa qua sử dụng) để khử mùi, giúp giày luôn khô thoáng.</p>
                    <p>
                    Để hạn chế mùi hôi và sự ẩm ướt cho giày, hãy chọn vớ chân loại tốt, có khả năng thấm hút cao. Ngoài ra, dùng các loại lót giày khử mùi cũng là một phương pháp tốt.</p>
                    <b style="font-weight: bold;color: #000">- Làm mềm giày da</b>
                    <p>Giày da để quá lâu không được sử dụng, đôi khi sẽ bị co cứng lại, dễ gây cảm giác đau chân khi dùng. Để làm mềm giày, đối với giày da, si, bạn có thể thoa một lớp vaseline lên giày, để một vài tiếng, giày sẽ mềm trở lại. Đối với các loại giày da lộn, bạn có thể dùng vải mềm ẩm lau qua toàn bộ giày, để qua đêm, da giày sẽ mềm hơn hẳn.</p>

                    <p>Để da giày được bền lâu, bạn nhớ hạn chế làm ướt giày. Khi giày bị ướt, không nên hơ bằng lửa, phơi nắng hoặc dùng máy sấy nóng, sẽ làm giày bị cứng, co lại hoặc hỏng bề mặt da. Hãy dùng giấy khô vò lại đặt vào trong giày để hút ẩm, phơi giày ở nơi râm mát. Sau khi khô, với giày da thì nên thoa vaseline, đánh si để da mềm và bóng đẹp trở lại.</p>
                    <b style="font-weight: bold;color: #000">- Bảo quản giày khi không sử dụng</b>
                    <p> Khi bạn mua giày tại Evashoes, giày sẽ được đặt trong một hộp giày kèm với túi chống ẩm. Khi sử dụng giày, bạn đừng vội vứt hộp đi mà hãy cất lại để dành. Khi không sử dụng, hãy nhét một ít giấy vụn vào bên trong giày để giữ cho dáng giày luôn chuẩn, đẹp. Sau đó đặt giày vào hộp bảo quản cùng túi hút ẩm.</p>
                    <p>Khi cần mang ra sử dụng, hãy áp dụng những cách làm mềm giày da bên trên, như vậy đôi giày của bạn sẽ luôn bền đẹp như mới.</p>
                    </p>
                  </div>
                  <div class="tab-content" >
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
            
              <div class="clearfix">
              </div>
            </div>
            <div class="col-md-3">
              <div class="special-deal leftbar">
                <h4 class="title">
                Liên Quan
                  <strong>
                  Sản Phẩm
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="source/images/products/small/3.jpg" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="source/images/products/small/5.jpg" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="source/images/products/small/7.jpg" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="product-tag leftbar">
                <h3 class="title">
                  Products 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      Lincoln us
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      SDress for Girl
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Corner
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Window
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PG
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Oscar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Bath room
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PSD
                    </a>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Get 
                  <strong>
                    newsletter
                  </strong>
                </h3>
                <p>
                  Casio G Shock Digital Dial Black.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Your Email...">
                  <input class="submit" type="submit" value="Submit">
                </form>
              </div>
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
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
    @endsection