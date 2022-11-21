<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/home-style-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 04:00:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/fev-icon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kinx</title>
    <!-- google fonts -->
    <link href="/https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i " rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('blog/css/bootstrap.min.css')}}">
    <!-- Scrollbar css -->
    <link rel="stylesheet" type="text/css" href="{{asset('blog/css/jquery.mCustomScrollbar.css')}}" />
    <!-- Owl Carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('blog/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('blog/owl-carousel/owl.theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('blog/owl-carousel/owl.transitions.css')}}" />
    <!-- youtube css -->
    <link rel="stylesheet" type="text/css" href="{{asset('blog/css/RYPP.css')}}" />
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="{{asset('blog/css/jquery-ui.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('blog/css/animate.min.css')}}">
    <!-- fonts css -->
    <link rel="stylesheet" href="{{asset('blog/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('blog/css/Pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('blog/css/flaticon.css')}}" />

    <!-- Carusel -->
    {{-- <link rel="stylesheet" href="{{asset('carousel/dist/assets.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('carousel/dist/assets/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('carousel/dist/owl.carousel.min.js')}} "> --}}
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('blog/css/style.css')}}">
    <!-- myOwn -->
    <link rel="stylesheet" href="{{asset('blog/css/myOwn.css')}}">
</head>

<body>
    <div class="se-pre-con"></div>
    <header>
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
            <nav class="mobile-menu" id="mobile-menu">
                <div class="sidebar-nav">
                    <ul class="nav side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                        <button class="btn mobile-menu-btn" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                            </div>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Mobile Menu End -->
        <!-- top header -->
        <div class="top_header hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="top_header_menu_wrap">
                               
                                    <li><a href="contact">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--breaking news-->
                        <div class="col-sm-8 col-md-7">
                        <small><strong>
                                <span  class="color-1">Breaking </span>News
                            </strong></small>                            
                            <div class="newsticker-inner">                                
                                <ul class="newsticker">
                                <li><span class="color-1">Blog</span><a href="#">{{Str::limit($post->Title, 20)}}.</a></li>
                                    <li><span class="color-2">{{ $cat->Categories }}</span><a href="#">{{Str::limit($cat->Title, 20)}}.</a></li>
                                    {{-- <li><span class="color-3">Health</span><a href="#">Praesent ornare nisl lorem, ut condimentum lectus gravida ut.</a></li>
                                    <li><span class="color-4">technology</span><a href="#">Nunc ultrices tortor eu massa placerat posuere.</a></li>
                                    <li><span class="color-1">Travel</span><a href="#">Etiam imperdiet volutpat libero eu tristique.imperdiet volutpat libero eu tristique.</a></li> --}}
                                </ul>
                                <div class="next-prev-inner">
                                    <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                                    <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <div class="top_header_icon">
                                <span class="top_header_icon_wrap">
                                        <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </span>
                                <span class="top_header_icon_wrap">
                                        <a target="_blank" href="https://msng.link/o/?Kinx=fm" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </span>
                                <span class="top_header_icon_wrap">
                                        <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                                    </span>
                                <span class="top_header_icon_wrap">
                                        <a target="_blank" href="https://api.whatsapp.com/send?phone=8162942636&text=Hey%20there!" title="WhatsApp"><i class="fa fa-whatsapp"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="block-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Kinx <span  class="color-1">Media</span></h1>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><i class="pe-7s-home"></i> <a href="/index" title="">Home</a></li>
                                    <li><a href="/sports" title="">Categories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </header>


                                <main>
                                    @yield('content')
                                </main>

                                <!-- footer Area
        ============================================ -->
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="footer-box">
                            <h3 class="category-headding">CATEGORIES</h3>
                            <div class="headding-border"></div>
                            <a class="tag" href="/index" title="">BLOG</a>
                            <a class="tag" href="/sports" title="">News</a>
                            <div class="newsletter-inner">
                                <!-- newsletter -->
                                <h3 class="category-headding ">NEWSLETTER</h3>
                                <div class="headding-border"></div>
                                <p>Enter your email address for our mailing list!</p>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                <button type="button" class="btn btn-style">Subscribe</button>
                            </div>
                            <!-- /.newsletter -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-box">
                            <!-- featured news -->
                            <h3 class="category-headding ">FEATURED NEWS</h3>
                            <div class="headding-border bg-color-2"></div>
                            <div class="box-item wow fadeIn" data-wow-duration="2s">
                                
                                {{-- @foreach($Posts as $post) --}}
                                <div class="img-thumb">
                                        <a href="/categories/{{ $cat->id }}" rel="bookmark"><img class="entry-thumb" src="{{asset('storage/'.$cat->Images)}}" alt="" height="80" width="100"></a>
                                    </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                    <a href="/categories/{{ $cat->id }}">{{$cat->Categories}}</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="/categories/{{ $cat->id }}">{{$cat->Title}}</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{$cat->created_at}}
                                        </div>
                                        <!-- post comment -->
                                        {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                               
                                {{-- @endForeach --}}
                               
                            </div>
                        </div>
                        <!-- /.featured news -->
                    </div>
<div class="col-sm-4">
                        <div class="footer-box">
                            <!-- featured news -->
                            <h3 class="category-headding ">BLOG NEWS</h3>
                            <div class="headding-border bg-color-2"></div>
                            <div class="box-item wow fadeIn" data-wow-duration="2s">
                                
                                {{-- @foreach($post as $post) --}}
                                <div class="img-thumb">
                                        <a href="/blog/{{ $post->id }}" rel="bookmark"><img class="entry-thumb" src="{{asset('storage/'.$post->Images)}}" alt="" height="80" width="100"></a>
                                    </div>
                                <div class="item-details">
                                    <h3 class="td-module-title"><a href="/blog/{{ $post->id }}">{{$post->Title}}</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{$post->created_at}}
                                        </div>
                                        <!-- post comment -->
                                        {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                               
                                {{-- @endForeach --}}
                               
                            </div>
                        </div>
                        <!-- /.featured news -->
                    </div>
                  
                    <div class="col-sm-4">
                        <div class="footer-box">
                            <!-- top rated  -->
                            <h3 class="category-headding">TOP RATED</h3>
                            <div class="headding-border bg-color-3"></div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </td>
                                        <td><a href="/sports">Blog</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </td>
                                        <td><a href="/index">News</a></td>
                                    </tr>
                                        <td>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </td>
                                        <td><a href="/sports">Entertainment</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </td>
                                        <td><a href="/sports">Education</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.top rated  -->
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-box footer-logo-address">
                            <!-- address  -->
                            <img src="{{asset('/img/knx4.jpg')}}" class="img-responsive" alt="">
                            <address>
                                <br> Tell: +2348162942636 
                                <br> Email: Iamkelvincole@gmail.com
                            </address>
                        </div>
                        <!-- /.address  -->
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-box">
                            <h3 class="category-headding">categories</h3>
                            <div class="headding-border bg-color-4"></div>
                            <ul>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/index">News</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/sports">Blog</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/sports">Entertainment</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/sports">Education</a></li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-sm-3">
                        <div class="footer-box">
                            <h3 class="category-headding ">POPULAR CATEGORY</h3>
                            <div class="headding-border"></div>
                            <ul>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/index">News</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/sports">Sports</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/sports">Entertainment</a></li>
                                <li><i class="fa fa-dot-circle-o"></i><a href="/sports">Education</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="sub-footer">
            <!-- sub footer -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p><a href="/index" class="color-1">Kelvin Osas</a> Website | All right Reserved <span  class="color-1">2022</span></p>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.sub footer -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="{{asset('blog/js/jquery.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="{{asset('blog/js/bootstrap.min.js')}}"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script type="text/javascript" src="{{asset('blog/js/metisMenu.min.js')}}"></script>
        <!-- Scrollbar js -->
        <script type="text/javascript" src="{{asset('blog/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <!-- animate js -->
        <script type="text/javascript" src="{{asset('blog/js/wow.min.js')}}"></script>
        <!-- Newstricker js -->
        <script type="text/javascript" src="{{asset('blog/js/jquery.newsTicker.js')}}"></script>
        <!--  classify JavaScript -->
        <script type="text/javascript" src="{{asset('blog/js/classie.js')}}"></script>
        <!-- owl carousel js -->
        <script type="text/javascript" src="{{asset('blog/owl-carousel/owl.carousel.js')}}"></script>
        <!-- youtube js -->
        <script type="text/javascript" src="{{asset('blog/js/RYPP.js')}}"></script>
        <!-- jquery ui js -->
        <script type="text/javascript" src="{{asset('blog/js/jquery-ui.js')}}"></script>
        <!-- form -->
        <script type="text/javascript" src="{{asset('blog/js/form-classie.js')}}"></script>
        <!-- custom js -->
        <script type="text/javascript" src="{{asset('blog/js/custom.js')}}"></script>
        <!-- myJs -->
        <script type="text/javascript" src="{{asset('blog/js/myOwn.js')}}"></script>
        

        <!-- MyBootstrap -->
        <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

        
        
    </body>
    
    
    
    </html>