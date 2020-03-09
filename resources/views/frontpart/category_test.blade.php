@extends('category_master')
@section('cat_content')

<title>বাংলাদেশ</title>
<div class="bs-shortcode bs-social-share style-button colored inner_bgs" style="background-image:url({{asset('frontend/home_source/153984544823.jpg')}});">
<h3 class="section-heading sh-t2 sh-s1 text-center"> <span class="h-text">{{$category_banner_name_image->category_name}}</span></h3>
    <ul class="bs-button-list social-list clearfix">
    @foreach ($category_banner as $banner_cat)
     <span class="social-item facebook has-title">
        <a href="">{{$banner_cat->sub_category}}</a></span>
   @endforeach
 </ul>
</div>
<div class="text-center main-ad">
        <img src="{{asset('frontend/img/ads/main.gif')}}">
        </div>
<div class="content-wrap">
<div class="slider-container clearfix slider-type-custom-blocks slider-bc-before slider-style-3-container slider-overlay-simple-gr">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="listing listing-modern-grid listing-modern-grid-2 clearfix slider-overlay-simple-gr">
                        <div class="mg-col mg-col-1">
                            @foreach ($cat_by_post_bg as $cat_post_bg)    
                            <article class="post-450 type-post format-standard has-post-thumbnail  listing-item-1 listing-item listing-mg-item listing-mg-2-item listing-mg-type-1 main-term-8">
                                <div class="item-content">
                                    <a class="img-cont b-loaded" style="background-image:url({{url('/images/'.$cat_post_bg->image)}});"></a>
                                <div class="term-badges floated"><span class="term-badge term-8"><a href="#">{{$cat_post_bg->category_name}}</a></span></div>
                                    <div class="content-container">
                                    <h2 class="title"> <a href="" class="post-url post-title">{{$cat_post_bg->title}}</a></h2>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        <div class="mg-col mg-col-2">
                            <div class="mg-row mg-row-1 clearfix">
                                @foreach ($cat_by_post as $cat_post)
                                <div class="item-2-cont">
                                    <article class="post-448 type-post format-standard has-post-thumbnail  listing-item-2 listing-item listing-mg-item listing-mg-2-item listing-mg-type-1 main-term-8">
                                        <div class="item-content">6
                                    <a class="img-cont b-loaded" href="" style="background-image: url({{url('/images/'.$cat_post->image)}})"></a>
                                        <div class="term-badges floated"><span class="term-badge term-8"><a href="#">{{$cat_post->category_name}}</a></span></div>
                                            <div class="content-container">
                                            <h2 class="title"> <a href="" class="post-url post-title"> {{$cat_post->title}}</a></h2></div>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <main id="content" class="content-container">
    <div class="container layout-1-col layout-1-col-1 layout-right-sidebar layout-bc-before">
        <div class="row main-section">

                @foreach ($category_banner as $sub_cat_news)
                    
                   <div class="col-sm-12 content-column">
                    <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                        <div class="callout callout-red mb-4">
                            <div class="callout-container">
                                <span class="callout-shape">
                                <a class="callout-link" href="#">{{$sub_cat_news->sub_category}}</a>
                            </span>
                            </div>
                        </div>
                        
                       <?php
                       
                       $sub_by_post_top = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','subcategories.id as subcatid')
                                        ->join('subcategories','posts.subcat_id','=','subcategories.id')
                                        ->where('posts.subcat_id','=',$sub_cat_news->subid)
                                        ->where('posts.position','=','cat-top')
                                        ->orderBy('postid', 'DESC')
                                        ->take(1)
                                        ->get();

                        $sub_by_post_right = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','subcategories.id as subcatid')
                                        ->join('subcategories','posts.subcat_id','=','subcategories.id')
                                        ->where('posts.subcat_id','=',$sub_cat_news->subid)
                                        ->where('posts.position','=','cat-right')
                                        ->orderBy('postid', 'DESC')
                                        ->take(4)
                                        ->get();

                        $sub_by_post_bottom_col1 = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','subcategories.id as subcatid')
                                        ->join('subcategories','posts.subcat_id','=','subcategories.id')
                                        ->where('posts.subcat_id','=',$sub_cat_news->subid)
                                        ->where('posts.position','=','cat-bottom1')
                                        ->orderBy('postid', 'DESC')
                                        ->take(4)
                                        ->get();
                        $sub_by_post_bottom_col2 = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','subcategories.id as subcatid')
                                        ->join('subcategories','posts.subcat_id','=','subcategories.id')
                                        ->where('posts.subcat_id','=',$sub_cat_news->subid)
                                        ->where('posts.position','=','cat-bottom2')
                                        ->orderBy('postid', 'DESC')
                                        ->take(4)
                                        ->get();
                        $sub_by_post_bottom_col3 = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','subcategories.id as subcatid')
                                        ->join('subcategories','posts.subcat_id','=','subcategories.id')
                                        ->where('posts.subcat_id','=',$sub_cat_news->subid)
                                        ->where('posts.position','=','cat-bottom3')
                                        ->orderBy('postid', 'DESC')
                                        ->take(4)
                                        ->get();
                        $sub_by_post_bottom_col4 = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','subcategories.id as subcatid')
                                        ->join('subcategories','posts.subcat_id','=','subcategories.id')
                                        ->where('posts.subcat_id','=',$sub_cat_news->subid)
                                        ->where('posts.position','=','cat-bottom4')
                                        ->orderBy('postid', 'DESC')
                                        ->take(4)
                                        ->get();
                        // echo "<pre>";
                        // print_r($subby_post);
                        // echo "</pre>";
                       ?>
                       
                        
                           <div class="listing listing-mix-6 clearfix ">
                              <div class="item-inner">
                                @foreach ($sub_by_post_top as $post_sub_top)
                                        
                                        <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                                <div class="item-inner">
                                                    <div class="featured clearfix">
                                                    <a title="টেকনাফে ‘বন্দুকযুদ্ধে’ ইয়াবা কারবারি’ নিহত" data-src="{{url('/images/'.$post_sub_top->image)}}" class="img-holder" href="{{url('/singlepost/'.$post_sub_top->postid)}}"></a>
                                                    </div>
                                                <h2 class="title"> <a href="{{url('/singlepost/'.$post_sub_top->postid)}}" class="post-title post-url">{{$post_sub_top->title}}</a></h2>
                                                </div>
                                            </article>
                                        </div>
                                       
                                @endforeach
                                 @foreach ($sub_by_post_right as $sub_right)
                                    <div class="column-2" >
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                            <div class="item-inner clearfix mb-8" style="margin-bottom: 12px">
                                                    <div class="featured">
                                                    <a title="নরসিংদীতে অপারেশন ‘গর্ডিয়ান নট’ সমাপ্ত ঘোষণা, নিহত" data-src="{{url('/images/'.$sub_right->image)}}" class="img-holder" href="{{url('/singlepost/'.$sub_right->postid)}}"></a>
                                                    </div>
                                                    <p class="title">
                                                    <a class="post-url" href="{{url('/singlepost/'.$sub_right->postid)}}" title="নরসিংদীতে অপারেশন ‘গর্ডিয়ান নট’ সমাপ্ত ঘোষণা, নিহত"><span class="post-title"></span> {{$sub_right->title}} </a>
                                             </p>
                                       </div>
                                    </div>
                                    </div>
                                @endforeach
                             </div>
                        </div>
                           <div class="row vc_row wpb_row vc_row-fluid">
                                <div class="bs-vc-wrapper">
                                      <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                            <div class="bs-vc-wrapper wpb_wrapper">
                                                <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                    <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                     <div class="item-inner">
                                                         @foreach ($sub_by_post_bottom_col1 as $bottom_col1)
                                                            
                                                         @if($loop->index == 0)
                                                                <div class="row-1">
                                                                    <div class="listing listing-grid-1 clearfix columns-1">
                                                                        <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                            <div class="item-inner">
                                                                                <div class="featured clearfix">
                                                                                <a title="" data-src="{{url('/images/'.$bottom_col1->image)}}" class="img-holder" href="{{url('/singlepost/'.$bottom_col1->postid)}}"></a>
                                                                                </div>
                                                                             <h2 class="title"> <a href="{{url('/singlepost/'.$bottom_col1->postid)}}">{{$bottom_col1->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
                                                                        <h2 class="title">
                                                                        <a href="{{url('/singlepost/'.$bottom_col1->postid)}}" class="post-title post-url font-bold">{{$bottom_col1->title}}</a></h2>
                                                                    </div>
                                                                </article>
                                                              </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                                <div class="bs-vc-wrapper wpb_wrapper">
                                                    <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                        <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                         <div class="item-inner">
                                                             @foreach ($sub_by_post_bottom_col2 as $bottom_col2)
                                                                
                                                             @if($loop->index == 0)
                                                                    <div class="row-1">
                                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                                <div class="item-inner">
                                                                                    <div class="featured clearfix">
                                                                                    <a title="" data-src="{{url('/images/'.$bottom_col2->image)}}" class="img-holder" href="{{url('/singlepost/'.$bottom_col2->postid)}}"></a>
                                                                                    </div>
                                                                                 <h2 class="title"> <a href="{{url('/singlepost/'.$bottom_col2->postid)}}">{{$bottom_col2->title}}</a></h2>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                    </div>
                                                                @endif
    
                                                                <div class="row-2">
                                                                    <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                    <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                        <div class="item-inner">
                                                                            <h2 class="title">
                                                                            <a href="{{url('/singlepost/'.$bottom_col2->postid)}}" class="post-title post-url font-bold">{{$bottom_col2->title}}</a></h2>
                                                                        </div>
                                                                    </article>
                                                                  </div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                                    <div class="bs-vc-wrapper wpb_wrapper">
                                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                             <div class="item-inner">
                                                                 @foreach ($sub_by_post_bottom_col3 as $bottom_col3)
                                                                    
                                                                 @if($loop->index == 0)
                                                                        <div class="row-1">
                                                                            <div class="listing listing-grid-1 clearfix columns-1">
                                                                                <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                                    <div class="item-inner">
                                                                                        <div class="featured clearfix">
                                                                                        <a title="" data-src="{{url('/images/'.$bottom_col3->image)}}" class="img-holder" href="{{url('/singlepost/'.$bottom_col3->postid)}}"></a>
                                                                                        </div>
                                                                                     <h2 class="title"> <a href="{{url('/singlepost/'.$bottom_col3->postid)}}">{{$bottom_col3->title}}</a></h2>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    @endif
        
                                                                    <div class="row-2">
                                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                <h2 class="title">
                                                                                <a href="{{url('/singlepost/'.$bottom_col3->postid)}}" class="post-title post-url font-bold">{{$bottom_col3->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                      </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                                        <div class="bs-vc-wrapper wpb_wrapper">
                                                            <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                                <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                                 <div class="item-inner">
                                                                     @foreach ($sub_by_post_bottom_col4 as $bottom_col4)
                                                                        
                                                                     @if($loop->index == 0)
                                                                            <div class="row-1">
                                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                                        <div class="item-inner">
                                                                                            <div class="featured clearfix">
                                                                                            <a title="" data-src="{{url('/images/'.$bottom_col4->image)}}" class="img-holder" href="{{url('/singlepost/'.$bottom_col4->postid)}}"></a>
                                                                                            </div>
                                                                                         <h2 class="title"> <a href="{{url('/singlepost/'.$bottom_col4->postid)}}">{{$bottom_col4->title}}</a></h2>
                                                                                        </div>
                                                                                    </article>
                                                                                </div>
                                                                            </div>
                                                                        @endif
            
                                                                        <div class="row-2">
                                                                            <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                            <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                                <div class="item-inner">
                                                                                    <h2 class="title">
                                                                                    <a href="{{url('/singlepost/'.$bottom_col4->postid)}}" class="post-title post-url font-bold">{{$bottom_col4->title}}</a></h2>
                                                                                </div>
                                                                            </article>
                                                                          </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                 </div>
                            </div>
                           
                   
                    </div>
           
        </div>
 @endforeach
        </div>
    </div>
</main>
</div>   
@endsection