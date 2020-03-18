@extends('master')
@section('content')
<div class="page-index">
          <div class="container">
            <p>
              Home - CheckOut
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
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
              {{-- <div class="product-tag leftbar">
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
              </div> --}}
              <div class="clearfix">
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Nhận
                  <strong>
                    Phản Hồi
                  </strong>
                </h3>
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
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                     Thông tin thanh toán
                    </a>
                    <div class="step-description">
                      <form>
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Họ và tên
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Full Name: 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="ten">
                              </div>
                              <h5>
                                Email:
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="email">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Địa chỉ của bạn
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Address:
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="diachi">
                              </div>
                              <h5>
                                Số điện thoại
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  telephone
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="sodt">
                              </div>
                              <h5>
                                Ghi chú:
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  ghi chú
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="ghichu">
                              </div>

                              <button>
                                Continue
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>
                  <li class="steps">
                    <a href="checkout2.html" class="step-title">
                      03. Shipping information
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      04. shipping method 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      05. payment information 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      06. oder review
                    </a>
                  </li>
                </ol>
              </div>
            </div>
                  <li class="steps">
                    <a href="checkout2.html" class="step-title">
                      03. Shipping information
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      04. shipping method 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      05. payment information 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      06. oder review
                    </a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
@endsection