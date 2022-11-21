


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
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('blog/images/popular_news_01.jpg')}}" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                                <a href="#">SPORTS</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('blog/images/popular_news_02.jpg')}}" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-2">
                                                <a href="#">TECHNOLOGY </a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="{{asset('blog/images/popular_news_03.jpg')}}"  alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-3">
                                                <a href="#">HEALTH</a>
                                            </h6>
                                        <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        </div>
                                    </div>
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
                                <img src="{{asset('blog/images/footer-logo.png')}}" class="img-responsive" alt="">
                                <address>
                                    {{-- 14L.E Goulburn St, Sydney 2000NSW
                                    <br> Tell: 01922296392 --}}
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
            
        </body>
        
        
        <!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/home-style-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2022 04:04:40 GMT -->
        </html>