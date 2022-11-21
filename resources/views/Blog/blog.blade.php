@extends('BlogLayouts.bloglayouts')


@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="bg-dark myOwn">
                   <a href="{{asset('storage/'. $post->Images)}}" download><img src="{{asset('storage/'.$post->Images)}}" class="myImg" alt=""></a> 
                </div>
                <div class="ti">
                   <p><span>{{$post->Content}}</span></p>
                </div>
      <div class="p">
          <p class="des">
              {{$post->Description}}
     </p>
      </div>
              <form action="/comments/{{$post->id}}" method="post">
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
       <div class="former">
            @if(count($comments) > 0)
            @foreach($comments as $it)
                      <small>Anonymous</small>
                  <div class="newText">
                  <div>
                    <img src="{{asset('blog/images/default-img2.jpg') }}" width="30" alt="">
                  </div>
                  <p class="comm">{{ $it->Comment }}</p>
                          
                  </div>
                  @endforeach
                  @else
                  <p class="r">0 Comments</p>
                  @endif
                </div>
       </div>

     
        </div>
        <!-- Weekly News Area
        ============================================ -->
    <section class="weekly-news-inner">
            <div class="container">
                <div class="row row-margin">
                    <h3 class="category-headding ">MORE <span class="color-1">NEWS</span></h3>
                    <div id="content-slide-4" class="owl-carousel">
                            @foreach($cat as $cat)
                        
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    {{-- @foreach($post as $post) --}}
                                
                                <div class="post-thumb img-zoom-in">
                                    <a href="/categories/{{ $cat->id }}">
                                    <img class="entry-thumb" src="{{asset('storage/'.$cat->Images)}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-4">{{ $cat->Categories }} </span>
                                    <h3 class="post-title"><a href="/categories/{{ $cat->id }}" rel="bookmark">{{ $cat->Title }} </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{ $cat->created_at }} 
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


@endSection


{{-- @section('script')
<script>

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4 
                }
            }
    })
    </script>
@endSection --}}