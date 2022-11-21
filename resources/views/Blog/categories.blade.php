@extends('BlogLayouts.bloglayouts')


@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="bg-dark myOwn">
                   <a href="{{asset('storage/'. $cat->Images)}}" download><img src="{{asset('storage/'.$cat->Images)}}" class="myImg" alt=""></a> 
                </div>
                <div class="ti">
                   <p><span>{{$cat->Content}}</span></p>
                </div>
      <div class="p">
          <p class="des">
              {{$cat->Description}}
     </p>
      </div>
    <form action="/cat_comm/{{$cat->id}}" method="post">
                @csrf
                        <div class="myText ">
                              <div class="mb-3">
                                 <label for="exampleFormControlTextarea1" class="form-label">Leave us a Comment</label>
                                  <textarea class="form-control tArea" placeholder="Add your Comment" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
                              </div>
                                <div class="btn">
                                  <button type="" class="btn-comm">Comment</button>
                                    <button type="" class="btn-can">Cancel</button>
                                </div>
                        </div>
              </form>
              @if(count($reqq) > 0)
              @foreach ($reqq as $item)

                  <small>Anonymous</small>
                <div class="newText">
              <div>
                <img src="{{asset('blog/images/default-img2.jpg') }}" class= "img-thumbnail user-img rounded-circle admin_img3" width="35" alt="">
              </div>
              <p class="comm">{{ $item->Comments }}</p>
                      
              </div>
              @endforeach
              @else
                <p class="r">0 Comments</p>
                @endif
            </div>

            <div class="tab-inner">
                <ul class="tabs">
                    <li><a href="#">POPULAR <span class="color-1">NEWS</span></a></li>
                    {{-- <li><a href="#">MOST VIEWED</a></li> --}}
                </ul>
                <hr>
                <!-- tabs -->

                 <!-- Weekly News Area
        ============================================ -->
    <section class="weekly-news-inner">
            <div class="container">
                <div class="row row-margin">
                    <h3 class="category-headding ">MORE <span class="color-1">NEWS</span></h3>
                    <div id="content-slide-4" class="owl-carousel">
                            @foreach($post as $post)
                        
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="/blog/{{ $post->id }}">
                                    <img class="entry-thumb" src="{{asset('storage/'.$post->Images)}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-4">{{ $post->Categories }} </span>
                                    <h3 class="post-title"><a href="/blog/{{ $post->id }}" rel="bookmark">{{ $post->Title }} </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{ $post->created_at }} 
                                        </div>
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                       
                      
                        
                    </div>
                </div>
            </div>
        </section>
        
        </div>
    
</div>


@endSection