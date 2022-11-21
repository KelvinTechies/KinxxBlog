{{-- @extends('bloglayouts.bloglayouts') --}}
@extends('BlogLayouts.bloglayouts')

@section('content')
<section class="block-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Contact</h1>
                {{-- <div class="breadcrumbs">
                    <ul>
                        <li><i class="pe-7s-home"></i> <a href="/index" title="">Home</a></li>
                        <li><a href="#" title="">Contact</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="contact-title-2">
                <h2>Contact Us</h2>
                <p>We’re here to help and answer any question you might have.
                     <br>We look forward to hearing from you </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="contact-address-2">
                <!-- Address -->
                <div class="contact-icon-inner"><i class="pe-7s-map-2 top-icon"></i></div>
                <h3>Address</h3>
                <ul>
                    <li>Benin City| Edo State</li>
                    <li>Nigeria</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-address-2">
                <!-- Phone -->
                <div class="contact-icon-inner"><i class="pe-7s-headphones top-icon"></i></div>
                <h3>Phone</h3>
                <ul>
                    <li><i class="fa fa-mobile"></i> +2348162942636</li>
                    {{-- <li><i class="fa fa-mobile"></i> +8801821450144</li> --}}
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-address-2">
                <!-- Email -->
                <div class="contact-icon-inner"><i class="pe-7s-global top-icon"></i> </div>
                <h3>Email</h3>
                <ul>
                    <li><i class="fa fa-envelope-o"></i> Iamkelvincole@gmail.com</li>
                    {{-- <li><i class="fa fa-globe"></i> www.companyweb.com</li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="map"></div>
        </div>
        <div class="col-sm-12">
            <div class="contact-form-area-2">
                <div class="contact-title-2">
                    <h2>Send Us A Message</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        <br> has been the industry's standard dummy text ever </p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="input">
                                    <input class="input_field" type="text" id="input-1">
                                    <label class="input_label" for="input-1">
                                        <span class="input_label_content" id="f_name" data-content="First Name">First Name</span>
                            </label>
                            </span>
                            <span class="input">
                                    <input class="input_field" type="text" id="input-2">
                                    <label class="input_label" for="input-2">
                                        <span class="input_label_content" id="l_name" data-content="Last Name">Last Name</span>
                            </label>
                            </span>
                            <span class="input">
                                    <input class="input_field" type="text" id="input-3">
                                    <label class="input_label" for="input-3">
                                        <span class="input_label_content" id="emai" data-content="Your Email">Your Email</span>
                            </label>
                            </span>
                            <span class="input">
                                    <input class="input_field" type="text" id="input-4">
                                    <label class="input_label" for="input-4">
                                        <span class="input_label_content" id="subject" data-content="Subject">Subject</span>
                            </label>
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <span class="input">
                                    <textarea class="input_field" id="message"></textarea>
                                    <label class="input_label" for="message">
                                        <span class="input_label_content" data-content="Your Email">Your Message</span>
                            </label>
                            </span>
                            <button type="button" class="btn btn-style btn-block">Submit</button>
                            <div class="tab-inner">
                                    <ul class="tabs">
                                        <li><a href="#">POPULAR NEWS</a></li>
                                        {{-- <li><a href="#">MOST VIEWED</a></li> --}}
                                    </ul>
                                    <hr>
                                    <!-- tabs -->
                    
                                    <div class="widget-slider-inner">
                                            {{-- <h3 class="category-headding ">Slider Widget</h3> --}}
                                            {{-- <div class="headding-border"></div> --}}
                                            <div id="widget-slider" class="owl-carousel owl-theme">
                                                    @foreach($posts as $post)
                                                
                                                    <!-- widget item -->
                                                    <div class="item">
                                                        <a href="blog/{{ $post->id }}"><img  src="{{'storage/'.$post->Images}}" alt=""></a>
                                                        <h4><a href="blog/{{ $post->id }}">{{$post->Title}}</a></h4>
                                                        <div class="date">
                                                            <ul>
                                                                <li>By<a title="{{$post->Author}}" href="blog/{{ $post->id }}"><span>{{$post->Author}}</span></a> --</li>
                                                                <li><a title="{{$post->created_at}}" href="blog/{{ $post->id }}">{{$post->created_at}}</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>{{$post->Content}}</p>
                                                    </div>
                                                    @endforeach
                        </div>
                    </div>
                </form>
                    </div>
            </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>

            <div class="row row-margin">
                    <h3 class="category-headding ">POPULAR NEWS</h3>
                    <div class="headding-border bg-color-1"></div>
                    <div id="content-slide-4" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            
                            <div class="owl-wrapper" style="width: 4392px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-366px, 0px, 0px);"><div class="owl-item" style="width: 366px;">
                                    @foreach($cats as $cat)
                                
                                <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                
                                {{-- <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="images/weekly-news-01.jpg" alt="">
                                    </a>
                                </div> --}}
                                <div class="post-info">
                                    <span class="color-4">{{$cat->Categories}} </span>
                                    <h3 class="post-title"><a href="#" rel="bookmark">{{$cat->Title}} </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{$cat->created_at}}
                                        </div>
                                        <!-- post comment -->
                                        {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div> --}}
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 366px;"><div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="{{'storage/'.$cat->Images}}" alt="">
                                    </a>
                                </div>
                        </div>
                        {{-- @endforeach --}}
                    
                    </div>
                    @endforeach
                
                </div></div>
                        
                        
                        
                        
                        
                    </div>
                </div>
   
        </div>
        
      
    </div>
    
</div>
@endSection