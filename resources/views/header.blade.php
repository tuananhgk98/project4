<div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="{{route('trangchu')}}" style="color: white;font-size: 35px;font-weight: bold;font-family: initial;">EVASHOES</a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
                                 <li><a href="#">Tin tức</a></li>
                                 <li><a href="#">Dịch vụ</a></li>
                                 <li><a href="#">Tuyển dụng</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="{{asset('login')}}" class="log">Login</a></li>
                                 <li><a href="checkout2.html" class="reg">Register</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form role="search" method="get" id="searchform" action="{{route('search')}}">
                                 <input class="search-submit" type="submit" value="">
                                 <input class="search-input" placeholder="Enter your search term..." type="text" value="" name="key"></form>
                           </li>
                           <li class="option-cart">
                              <a href="{{asset('cart/show/')}}" class="cart-icon">cart <span class="cart_no">{{Cart::count()}}</span></a>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li><a href="{{route('trangchu')}}">Home</a></li>
                              @foreach($loaisp as $sp)
                              <li><a href="{{route('loaisanpham',$sp->id)}}">{{$sp->tenlsp}}</a></li>
                              @endforeach
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                 <div class="dropdown-menu mega-menu">
                                       <div>
                                          <ul class="mega-menu-links">
                                             @foreach($hang_sx as $hang)
                                             <li><a href="{{route('hangsanxuat',$hang->tenhang)}}">{{$hang->tenhang}}</a></li>
                                             @endforeach
                                          </ul>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="{{route('lienhe')}}">Liên Hệ</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>