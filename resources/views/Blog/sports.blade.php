@extends('BlogLayouts.bloglayouts')

@section('content')

<!-- Mobile Menu End -->
     <!-- top header -->
     
         <div class="container">
                 <div class="row">
                     <div class="col-sm-8">
                    <div class="articale-list">
                         
         @foreach ($cats as $cat)
                         
                         <!--Post list-->
                         <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                            <div class="ImgBx">
                         <a href="categories/{{$cat->id }}"><img src="{{ asset('storage/'.$cat->Images) }}" class="img-responsive" alt=""></a>
                            </div>
                             <div class="post-style2-detail">
                             <h3><a href="categories/{{$cat->id }}" title="{{$cat->Title}}">{{$cat->Title}}</a></h3>
                                 <div class="date">
                                     <ul>
                                     <li><img src="{{asset('storage/'.$cat->Images)}}" class="img-responsive" alt=""></li>
                                     <li>By <a title="{{$cat->Author}}" href="categories/{{$cat->id }}"><span>{{$cat->Author}}</span></a> --</li>
                                         <li><a title="{{$cat->created_at}}" href="categories/{{$cat->id }}">{{$cat->created_at}}</a> --</li>
                                         {{-- <li><a title="" href="#"><span>275 Comments</span></a></li> --}}
                                     </ul>
                                 </div>
                                 <p>{{Str::limit($cat->Description, 50)}}...</p>
                                     <a href="categories/{{$cat->id }}" type="button" class="btn btn-style"> Reade more</a>
                             </div>
                         </div>
         @endforeach
         
         
                     </div>
                     <div class="col-sm-12">
                        <ul class="pagination">
                            <li>
                                {{-- <a href="#" class="prev"> --}}
                                    {{-- <i class="pe-7s-angle-left"> --}}
                           {{ $cats->links() }}
                                        
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                 </div>
         {{-- </div> --}}
        
                         
                     {{-- </div> --}}

                
                 <aside class="col-sm-4 left-padding">
                        
                     <!-- social icon -->
                     <h3 class="category-headding ">SOCIAL</h3>
                     <div class="headding-border"></div>
                     <div class="social">
                         <ul>
                                
                             <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i></a></li>
                             <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                             <li><a href="https://api.whatsapp.com/send?phone=8162942636&text=Hey%20there!" class="google whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                             {{-- <li><a href="https://api.whatsapp.com/send?phone=8162942636&text=Hey%20there!" ><i class="fa fa-whatsapp" class="whatsapp"></i></a></li> --}}
                         </ul>
                     </div>
                     <!-- /.social icon -->
                     <div class="tab-inner">
                         <ul class="tabs">
                             <li><a href="#">POPULAR</a></li>
                             {{-- <li><a href="#">MOST VIEWED</a></li> --}}
                         </ul>
                         <hr>
                         <!-- tabs -->
                         @foreach ($posts as $post)
                         
                         <div class="tab_content">
                             <div class="tab-item-inner">
                                 <div class="box-item wow fadeIn" data-wow-duration="1s">
                                     <div class="img-thumb">
                                         <a href="/blog/{{ $post->id }}" rel="bookmark"><img class="entry-thumb"  src="{{'storage/'.$post->Images}}" alt="" height="80" width="90"></a>
                                     </div>
                                     <div class="item-details">
                                         {{-- <h6 class="sub-category-title bg-color-1">
                                         <a href="#"></a>
                                             </h6> --}}
                                            <h3 class="td-module-title"><a href="/blog/{{ $post->id }}">{{$post->Title}}</a></h3>
                                         <div class="post-editor-date">
                                             <!-- post date -->
                                             <div class="post-date">
                                                 <i class="pe-7s-clock"></i> 
                                                 {{ $post->created_at }}
                                             </div>
                                             <!-- post comment -->
                                             {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div> --}}
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                                                      <!-- / tab item -->
                             <div class="tab-item-inner">
                                 <div class="box-item">
                                     <div class="img-thumb">
                                         <a href="#" rel="bookmark"><img class="entry-thumb"  src="{{asset('blog/images/popular_news_01.jpg')}}" alt="" height="80" width="90"></a>
                                     </div>
                                     <div class="item-details">
                                         <h6 class="sub-category-title bg-color-5">
                                                 <a href="#">BUSINESS</a>
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
                                 <div class="box-item">
                                     <div class="img-thumb">
                                         <a href="#" rel="bookmark"><img class="entry-thumb"  src="{{asset('blog/images/popular_news_02.jpg')}}" alt="" height="80" width="90"></a>
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
                                 <div class="box-item">
                                     <div class="img-thumb">
                                         <a href="#" rel="bookmark"><img class="entry-thumb"  src="{{asset('blog/images/popular_news_03.jpg')}}" alt="" height="80" width="90"></a>
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
                                 <div class="box-item">
                                     <div class="img-thumb">
                                         <a href="#" rel="bookmark"><img class="entry-thumb"  src="{{asset('blog/images/popular_news_04.jpg')}}" alt="" height="80" width="90"></a>
                                     </div>
                                     <div class="item-details">
                                         <h6 class="sub-category-title bg-color-4">
                                                 <a href="#">FASHION</a>
                                             </h6>
                                         <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
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
                             <!-- / tab item -->
                         </div>
                         <!-- / tab_content -->
                     </div>
                     <!-- / tab -->
                     <div class="banner-add">
                         <!-- add -->
                         <span class="add-title">- Advertisement -</span>
                         <a href="#"><img  src="{{asset('blog/images/ad-banner.jpg')}}" class="img-responsive center-block" alt=""></a>
                     </div>
                     <!-- comments -->
                     <div class="latest-comments-inner">
                         <h3 class="category-headding ">LATEST COMMENT</h3>
                         <div class="headding-border"></div>
                         <!-- latest comment post -->
                         <div class="post-style2 latest-com">
                             {{-- <img  src="{{asset('blog/images/comment-01.jpg')}}" alt=""> --}}
                             <div class="latest-com-detail">
                                 @foreach ($Comm as $comments)
                                     
                             <h5><a href="categories/{{$comments->Cat_id}} " title="">{{ $comments->Comments  }}</a></h5>
                                 {{-- <span>Nec sagittis sem nibh dictionary...</span>
                                 <p>Proin gravida nibh vel velit auctor aliquet. </p> --}}
                                 @endforeach
                                 
                             </div>
                         </div>
                     </div>
                     <!-- slider widget -->
                     <div class="widget-slider-inner">
                         {{-- <h3 class="category-headding ">Slider Widget</h3> --}}
                         {{-- <div class="headding-border"></div> --}}
                         <div id="widget-slider" class="owl-carousel owl-theme">
                             <!-- widget item -->
                     @foreach($pos as $pos)
                             
                             <div class="item">
                                 <a href="#"><img  src="{{'storage/'.$pos->Images}}" alt=""></a>
                                 <h4><a href="#">{{$pos->Title}}</a></h4>
                                 <div class="date">
                                     <ul>
                                     <li>By<a title="" href="#"><span>{{$pos->Author}}</span></a> --</li>
                                         <li><a title="" href="#">11 Nov 2015</a></li>
                                     </ul>
                                 </div>
                                 <p>{{$pos->Content}}</p>
                             </div>
                             @endforeach
                             <!-- widget item -->
                             
                         </div>
                     </div>
                 </aside>
             </div>
            
                     <div class="col-sm-12">
                         <div class="banner">
                             <img   src="{{asset('blog/images/top-bannner2.jpg')}}" class="img-responsive center-block" alt="">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         
@endSection