@extends('category_master')
@section('cat_content')
<title>প্রবাস</title>
{{-- <style>
/* .inner_bgs {
    background-image: url(home_source/153984491589.jpg) !important;
} */
</style> --}}
    <div class="bs-shortcode bs-social-share style-button colored inner_bgs" style="background-image:url({{asset('frontend/home_source/home_source/153984381979.jpg')}});">
        <h3 class="section-heading sh-t2 sh-s1 text-center"> <span class="h-text">{{$not_high_cats->category_name}}</span></h3>
        <ul class="bs-button-list social-list clearfix">
        </ul>
    </div>
    <div class="text-center main-ad">
        <img src="img/ads/main.gif">
    </div>
<div class="content-wrap">
    <div class="slider-container clearfix slider-type-custom-blocks slider-bc-before slider-style-3-container slider-overlay-simple-gr">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="listing listing-modern-grid listing-modern-grid-2 clearfix slider-overlay-simple-gr">
                        
                    @foreach($cat_by_post as $post_by_cat) 
                         <?php if($loop->index == 0) {?>
                        <div class="mg-col mg-col-1">
                            <article class="post-450 type-post format-standard has-post-thumbnail  listing-item-1 listing-item listing-mg-item listing-mg-2-item listing-mg-type-1 main-term-8">
                                <div class="item-content">
                                    <a  class="img-cont b-loaded" href="{{url('singlepost'.$post_by_cat->id)}}=" style="background-image: url({{url('/images/'.$post_by_cat->image)}});"></a>
                                    <div class="term-badges floated"><span class="term-badge term-8"><a href="#">{{$post_by_cat->category_name}}</a></span></div>
                                    <div class="content-container">
                                    <h2 class="title"> <a href="{{url('singlepost'.$post_by_cat->id)}}" class="post-url post-title"> {{$post_by_cat->title}} </a></h2>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php } else{?>
                        <div class="mg-col mg-col-2">
                            <div class="mg-row mg-row-1 clearfix">
                                <div class="item-2-cont">
                                    <article class="post-448 type-post format-standard has-post-thumbnail  listing-item-2 listing-item listing-mg-item listing-mg-2-item listing-mg-type-1 main-term-8">
                                        <div class="item-content">
<a class="img-cont b-loaded" href="{{url('singlepost'.$post_by_cat->id)}}" style="background-image: url({{url('/images/'.$post_by_cat->image)}});"></a>
                                            <div class="term-badges floated"><span class="term-badge term-8"><a href="#">{{$post_by_cat->category_name}}</a></span></div>
                                            <div class="content-container">
<h2 class="title"> <a href="{{url('singlepost'.$post_by_cat->id)}}" class="post-url post-title"> {{$post_by_cat->title}} </a></h2></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!---<div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
            <p class="bsac-caption">- বিজ্ঞাপন -</p>
        </div>
    </div>---->
    <main id="content" class="content-container">
        <div class="container layout-1-col layout-1-col-1 layout-right-sidebar layout-bc-before">
            <div class="row main-section">
                <div class="col-sm-12 content-column">

                 <!---- <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->

                    <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                        <div class="item-inner">
                                                <div id="slider" class="flexslider">
                                                  <ul class="slides">
                                                        @foreach ($picture_cat_main as $cat_main_picture)
                                                        <li class="bg-black">
                                                           <div class="column-1">
                                                               <article class="post-450 type-post format-standard has-post-thumbnail  listing-item-1 listing-item listing-mg-item listing-mg-2-item listing-mg-type-1 main-term-8">
                                                                   <div class="item-content">
                                                                   <a class="img-cont b-loaded" href="{{url('galery/'.$cat_main_picture->postid)}}" style="background-image:url({{url('/images/'.$cat_main_picture->image)}});"></a>
                                                                   </div>
                                                               </article>
                                                           </div>
                                                           <div class="column-2">
                                                           <a href="gallery.html?id=0&amp;sb=72"><h2 class="text-white"><i class="item-icon fa fa-camera"></i>   ছবিঘর</h2></a>
                                                           <h2 class="title"> <a href="{{url('galery/'.$cat_main_picture->postid)}}" class="post-url post-title text-white"> {{$cat_main_picture->title}} </a></h2>
                                                           </div>
                                                       </li>
                                                      
                                                       @endforeach
                                                   
                                                  </ul>
                                                </div>

                                                
                                                 @foreach ($picture_cat_small as $cat_small_picture)
                                                    <div class="col-md-3">
                                                            <div class="small_image">
                                                                <a href="{{url('galery/'.$cat_small_picture->postid)}}"><img src="{{url('/images/'.$cat_small_picture->image)}}" alt="Avatar" class="slider_small_img"></a>
                                                                                                                        <div class="overlay">
                                                                <a href="" class="icon" title="User Profile">
                                                                  <i class="fa fa-camera"></i>
                                                                </a>
                                                              </div>
                                                            </div>
                                                            <p class="title"> <a href="{{url('galery/'.$cat_small_picture->postid)}}" class="post-title post-url"> {{$cat_small_picture->title}}</a></p>
                                                        </div>
                                                        @endforeach
                                          </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection