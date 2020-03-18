@extends('master')
@section('content')
<script type="text/javascript">
    function updateCart(qty,rowId){
      if(qty<=10){
       $.get(
        '{{asset('cart/update')}}',
        {qty:qty,rowId:rowId},
        function(){
            location.reload();
        }
        );
       }
       else{
        alert('Bạn chỉ được mua không quá 10 sản phẩm');
        $.get(
        '{{asset('cart/update')}}',
        {qty:10,rowId:rowId},
        function(){
            location.reload();
        }
        );
       }
    }
</script>
<div class="page-index">
          <div class="container">
            <p>
              Home - Shopping Cart
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Shopping Cart
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>Hình ảnh</th>
                    <th>Chi tiết</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($items as $item)
                  <tr>
                    <td>
                      <img src="source/images/products/small/{{$item->options->img}}" alt="">
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                          Tên sản phẩm:{{$item->name}}
                        </div>
                        <p>
                          <img alt="" src="source/images/star.png">
                          <a class="review_num" href="#">
                            Đánh giá:                          </a>
                        </p>
                        <div class="color-choser">
                          <span class="text">
                           Size : 
                          </span>
                          <select name="size" id="">
                            <option value="{{$item->size}}">35</option>
                            <option value="{{$item->size}}">36</option>
                            <option value="{{$item->size}}">37</option>
                            <option value="{{$item->size}}">38</option>
                            <option value="{{$item->size}}">39</option>
                          </select>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>
                        {{number_format($item->price)}}.000<sup>đ</sup>
                      </h5>
                    </td>
                    <td>
                       <input type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')">
                    </td>
                    <td>
                      <h5>
                        <strong class="red">
                          {{number_format($item->price*$item->qty)}}.000<sup>đ</sup>
                        </strong>
                      </h5>
                    </td>
                    <td>
                      <a href="{{asset('cart/delete/'.$item->rowId)}}">
                        <img src="source/images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-8">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                     Thông tin thanh toán
                    </a>
                    <div class="step-description">
                      <form method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
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
                                <input type="text" class="input namefild" name="tenkh">
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

                              <button type="submit" name="submit" value="Thanh toán">
                                Thanh toán
                              </button>
                            </div>
                          </div>
                        </div>
                        {{csrf_field()}}
                      </form>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <h5>
                       Tổng tiền:
                      </h5>
                      <span>
                       {{$total}}0<sup>đ</sup>
                      </span>
                    </div>
                    <div class="grandtotal">
                      <h5>
                        Số tiền phải thanh toán 
                      </h5>
                      <span>
                        {{$total}}0<sup>đ</sup>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
      @endsection