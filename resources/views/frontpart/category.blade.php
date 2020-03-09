@extends('category_master')
@section('cat_content')
<title>{{$category_banner_name_image->category_name}}</title>
<div class="bs-shortcode bs-social-share style-button colored inner_bgs" style="background-image:url({{asset('/frontend/home_source/154038238422.jpg')}});">
<h3 class="section-heading sh-t2 sh-s1 text-center"> <span class="h-text">{{$category_banner_name_image->category_name}}</span></h3>
    <ul class="bs-button-list social-list clearfix">
    @foreach ($category_banner as $banner_cat)
     <span class="social-item facebook has-title">
        <a href="">
        {{$banner_cat->sub_category}}</a></span>
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
                                    <a  class="img-cont b-loaded" href="bangladesh-detail.html?data=2215&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" style="background-image: url({{url('/images/'.$cat_post_bg->image)}})"></a>
                                <div class="term-badges floated"><span class="term-badge term-8"><a href="#">{{$cat_post_bg->category_name}}</a></span></div>
                                    <div class="content-container">
                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2215&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-url post-title">{{$cat_post_bg->title}}</a></h2>
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
            <div class="col-sm-12 content-column">
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">অপরাধ</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                        <div class="item-inner">
                         @foreach ($crime_sub_cat_main as $sub_cat_main)
                            <div class="column-1">
                               <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                    <div class="item-inner">
                                        <div class="featured clearfix">
                                        <a title="টেকনাফে ‘বন্দুকযুদ্ধে’ ইয়াবা কারবারি’ নিহত" data-src="{{url('/images/'.$sub_cat_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2272&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                        </div>
                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2272&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url">{{$sub_cat_main->title}}</a></h2>
                                    </div>
                                </article>
                             @endforeach
                            </div>
                            @foreach ($crime_sub_cat_right as $right_sub_cat)
                            <div class="column-2">
                                <div class="listing listing-text listing-text-2 clearfix columns-1">
                                       <div class="item-inner clearfix mb-8">
                                            <div class="featured">
                                            <a title="নরসিংদীতে অপারেশন ‘গর্ডিয়ান নট’ সমাপ্ত ঘোষণা, নিহত" data-src="{{url('/images/'.$right_sub_cat->image)}}" class="img-holder" href="bangladesh-detail.html?data=2091&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                                                        <a class="post-url" href="" title="নরসিংদীতে অপারেশন ‘গর্ডিয়ান নট’ সমাপ্ত ঘোষণা, নিহত"> <span class="post-title"> {{$right_sub_cat->title}}} </span> </a>
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
                                            @foreach ($crime_sub_cat_news as $cat_sub_news1)
                                                <div class="item-inner">
                                                

                                                  <?php if($loop->index == 0) { 
                                                      
                                                    //   dd($loop->index);
                                                    //   exit;
                                                      ?>
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                     {{-- @foreach ($crime_sub_cat_news_main as $cat_news_sub_main) --}}
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
                                                                    <a title="" data-src="{{url('/images/'.$cat_sub_news1->image)}}" class="img-holder" href=""></a>
                                                                    </div>
                                                                <h2 class="title"> <a href="">{{$cat_sub_news1->title}}</a></h2>
                                                                </div>
                                                            </article>
                                                      {{-- @endforeach --}}
                                                        </div>
                                                    </div>
                                                <?php } else {?>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
                                                                    <h2 class="title">
                                                                    <a href="" class="post-title post-url font-bold">{{$cat_sub_news1->title}}</a></h2>
                                                                   </div>
                                                         </article>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                  
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

{{-- 
                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                                {{-- <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                                {{-- <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">অর্থ-উন্নয়ন</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                        <div class="item-inner">

                        @foreach ($ortho_main_section as $ortho_main)
                            <?php if($loop->index == 0){?>
                            <div class="column-1">
                                <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                    <div class="item-inner">
                                        <div class="featured clearfix">
                                        <a title="বাংলাদেশে আরো বিনিয়োগ করুন: সৌদি ব্যবসায়ীদের প্রতি" data-src="{{url('/images/'.$ortho_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2124&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="" class="post-title post-url"> {{$ortho_main->title}}</a></h2>
                                    </div>
                                </article>
                            </div>
                        <?php }  else {?>
                            <div class="column-2">
                                <div class="listing listing-text listing-text-2 clearfix columns-1">
                                       <div class="item-inner clearfix mb-8">
                                            <div class="featured">
                                            <a title="নরসিংদীতে অপারেশন ‘গর্ডিয়ান নট’ সমাপ্ত ঘোষণা, নিহত" data-src="{{url('/images/'.$ortho_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2091&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                                                        <a class="post-url" href="" title="নরসিংদীতে অপারেশন ‘গর্ডিয়ান নট’ সমাপ্ত ঘোষণা, নিহত"> <span class="post-title">{{$ortho_main->title}} </span> </a>
                                            </p>
                                        </div>
                                </div>
                            </div>
                        <?php }?>
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
                                                    @foreach ($ortho_bottom_section as $ortho_bottom)
                                                        
                                                    <?php if($loop->index == 0){?>
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
                                                                    <a title="" data-src="{{url('/images/'.$ortho_bottom->image)}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> {{$ortho_bottom->title}} </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                <?php }  else {?>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                           <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                              <div class="item-inner">
                                                            <h2 class="title">
                                                            <a href="" class="post-title post-url font-bold"> {{$ortho_bottom->title}}</a></h2>
                                                                    </div>
                                                         </article>
                                                            
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
                                                         <a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
                                                                                <h2 class="title">
                                                                                <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                                                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
                                                                            <h2 class="title">
                                                                            <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                                                                                                </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
                                                                <h2 class="title">
                                                                <a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

{{-- 
                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
                                                                <a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                                {{-- <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">আইন ও আদালত</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                        <div class="item-inner">

                            @foreach ($law_main_section as $law_main)
                                
                            <?php if($loop->index == 0){?>
                            <div class="column-1">
                                <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                    <div class="item-inner">
                                        <div class="featured clearfix">
                                        <a title="বাসচাপায় দুই শিক্ষার্থী নিহতের ঘটনায় ৬ জনের" data-src="{{url('/image/'.$law_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2265&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2265&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url"> {{$law_main->title}} </a></h2>
                                    </div>
                                </article>
                            </div>
                        <?php } else {?>
                            <div class="column-2">
                                <div class="listing listing-text listing-text-2 clearfix columns-1">
                                        <div class="item-inner clearfix mb-8">
                                            <div class="featured">
                                                <a title="বিএনপির ৭ নেতার জামিনের শুনানি পেছালো" data-src="{{url('/image/'.$law_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2258&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                            </div>
                                                                                            <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2258&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="বিএনপির ৭ নেতার জামিনের শুনানি পেছালো"> <span class="post-title"> {{$law_main->title}}  </span> </a>
                                            </p>
                                        </div>
                                </div>
                            </div>
                        <?php }?>
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
                                                    @foreach ($law_bottom_section as $bottom_law)
                                                    <?php if($loop->index == 0){?>
                                                      <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
                                                                  <a title="" data-src="{{url('/images/'.$bottom_law->image)}}" class="img-holder" href="bangladesh-detail.html?data=2221&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                <h2 class="title"> <a href="bangladesh-detail.html?data=2221&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> {{$bottom_law->title}} </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                <?php } else {?>

                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
                                                                                    <h2 class="title">
                                                                                    <a href="bangladesh-detail.html?data=2215&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$bottom_law->title}}</a></h2>
                                                                    </div>
                                                                </article>
                                    
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


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1540109182176243793op.jpg" class="img-holder" href="bangladesh-detail.html?data=2206&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2206&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আমির খসরুর জামিন বাতিল, কারাগারে পাঠানোর নির্দেশ </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2173&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> ওবায়দুল কাদেরের উদ্যোগে রুমির মুক্তি </a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2155&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> গ্যাটকো দুর্নীতির মামলায় চার্জ শুনানি ১৫ নভেম্বর</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2145&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> তিতাসের ডিএমডি ও সাবেক পরিচালকের বিরুদ্ধে মামলা</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539951532603616808op.jpg" class="img-holder" href="bangladesh-detail.html?data=2173&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2173&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ওবায়দুল কাদেরের উদ্যোগে রুমির মুক্তি  </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2155&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> গ্যাটকো দুর্নীতির মামলায় চার্জ শুনানি ১৫ নভেম্বর</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2145&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> তিতাসের ডিএমডি ও সাবেক পরিচালকের বিরুদ্ধে মামলা</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2087&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> ডিজিটাল নিরাপত্তা আইন নিয়ে সরকারকে নোটিশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">জনসংখ্যা</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                        <div class="item-inner">
                            @foreach ($population_main_section as $population_main)
                                <?php if($loop->index == 0) {?>
                           
                            <div class="column-1">
                                <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                    <div class="item-inner">
                                        <div class="featured clearfix">
                                        <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$population_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                        </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url"> {{$population_main->title}} </a></h2>
                                    </div>
                                </article>
                            </div>
                        <?php } else {?>
                            <div class="column-2">
                                <div class="listing listing-text listing-text-2 clearfix columns-1">
                                        
                                        <div class="item-inner clearfix mb-8">
                                            <div class="featured">
                                            <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$population_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                                <p class="title">
                                        <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$population_main->title}} </span> </a>
                                                                                </p>
                                        </div>
                                      
                                </div>
                            </div>
                        <?php } ?>
                            @endforeach
                        </div>
                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                <div class="item-inner">
                                                    @foreach ($population_bottom_section as $population_bottom)
                                                        
                                                    <?php if($loop->index == 0) {?>
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
                                                                    <a title="" data-src="{{'/images/'.$population_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$population_bottom->title}} </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <?php } else {?>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
                                                                            <h2 class="title">
                                                    <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$population_bottom->title}}</a></h2>
                                                                    </div>
                                                                </article>
                                                               
                                                        </div>
                                                    </div>
                                                    <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">জাতীয় নির্বাচন</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                    
                         
                            <div class="item-inner">
                                    @foreach ($election_main_section as $election_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$election_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url"> {{$election_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$election_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$election_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>

                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                            @foreach ($election_bottom_section as $election_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$election_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$election_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$election_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">দুর্ঘটনা</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                            <div class="item-inner">
                                    @foreach ($accident_main_section as $accident_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$accident_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url"> {{$accident_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$accident_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$accident_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>



                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">

                                                    <div class="item-inner">
                                                            @foreach ($accident_bottom_section as $accident_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$accident_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$accident_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$accident_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">পরিবেশ ও জলবায়ু</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                            <div class="item-inner">
                                    @foreach ($environment_main_section as $environment_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$environment_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url"> {{$environment_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$environment_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$environment_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>
                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">

                                                    <div class="item-inner">
                                                            @foreach ($environment_bottom_section as $environment_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$environment_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$environment_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$environment_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">বিবিধ</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                            <div class="item-inner">
                                    @foreach ($bivid_main_section as $bivid_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$bivid_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url"> {{$bivid_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$bivid_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$bivid_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>
                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">

                                                    <div class="item-inner">
                                                            @foreach ($bivid_bottom_section as $bivid_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$bivid_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$bivid_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$bivid_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">বিভাগ</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                            <div class="item-inner">
                                    @foreach ($division_main_section as $division_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$division_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="" class="post-title post-url"> {{$division_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$division_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$division_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>
                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                            @foreach ($division_bottom_section as $division_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$division_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$division_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$division_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">রাজধানী</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                            <div class="item-inner">
                                    @foreach ($capital_main_section as $capital_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$capital_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="" class="post-title post-url"> {{$capital_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$capital_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$capital_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>
                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                            @foreach ($capital_bottom_section as $capital_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$capital_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$capital_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$capital_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539584052712098951op.jpg" class="img-holder" href="bangladesh-detail.html?data=2026&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2026&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সম্পাদক পরিষদের মানববন্ধন  </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2021&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> রাজধানীর মিরপুরে ১০ ঘণ্টা গ্যাস থাকবে না</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2016&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> রাজধানীতে সড়ক দুর্ঘটনায় ৩ প্রাণ ঝরল</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15395797351401970299op.jpg" class="img-holder" href="bangladesh-detail.html?data=2021&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2021&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> রাজধানীর মিরপুরে ১০ ঘণ্টা গ্যাস থাকবে না </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2016&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> রাজধানীতে সড়ক দুর্ঘটনায় ৩ প্রাণ ঝরল</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539577299744431600op.jpg" class="img-holder" href="bangladesh-detail.html?data=2016&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2016&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> রাজধানীতে সড়ক দুর্ঘটনায় ৩ প্রাণ ঝরল </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">সংসদ</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                            <div class="item-inner">
                                    @foreach ($parliament_main_section as $parliament_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$parliament_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="" class="post-title post-url"> {{$parliament_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$parliament_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$parliament_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>
                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                            @foreach ($parliament_bottom_section as $parliament_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$parliament_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$parliament_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$parliament_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15401914971561479604op.jpg" class="img-holder" href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> ৫ দিনের সফরে জেনেভার পথে রাষ্ট্রপতি </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> আজ রাতে ফিরছেন প্রধানমন্ত্রী</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399437471405991394op.jpg" class="img-holder" href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2165&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> আজ রাতে ফিরছেন প্রধানমন্ত্রী </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/1539841367207023361op.jpg" class="img-holder" href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2136&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> সংগীতশিল্পী আইয়ুব বাচ্চুর মৃত্যুতে রাষ্ট্রপতির শোক </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2128&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> শেখ রাসেলের ৫৪তম জন্মদিন আজ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2127&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> বৈশ্বিক প্রতিযোগিতা সক্ষমতা সূচকে পিছিয়েছে বাংলাদেশ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2067&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> প্রধানমন্ত্রী সৌদি আরব যাচ্ছেন দুপুরে</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                    <div class="callout callout-red mb-4">
                        <div class="callout-container">
                            <span class="callout-shape">
                            <a class="callout-link" href="#">সারাবাংলা</a>
                        </span>
                        </div>
                    </div>
                    <div class="listing listing-mix-6 clearfix ">
                            <div class="item-inner">
                                    @foreach ($alloverbn_main_section as $alloverbn_main)
                                        <?php if($loop->index == 0) {?>
                                   
                                    <div class="column-1">
                                        <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                            <div class="item-inner">
                                                <div class="featured clearfix">
                                                <a title="সিলেটে ‘শ্রীমুখ’ গ্রামে জনসংখ্যা মাত্র ৫" data-src="{{url('/images/'.$alloverbn_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2177&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                </div>
                                                                            <h2 class="title"> <a href="" class="post-title post-url"> {{$alloverbn_main->title}} </a></h2>
                                            </div>
                                        </article>
                                    </div>
                                <?php } else {?>
                                    <div class="column-2">
                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                
                                                <div class="item-inner clearfix mb-8">
                                                    <div class="featured">
                                                    <a title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা" data-src="{{url('/images/'.$alloverbn_main->image)}}" class="img-holder" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                                        </div>
                                                                                        <p class="title">
                                                <a class="post-url" href="bangladesh-detail.html?data=2264&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="গাজীপুরে শ্রমিকলীগ নেতাকে কুপিয়ে হত্যা"> <span class="post-title"> {{$alloverbn_main ->title}} </span> </a>
                                                                                        </p>
                                                </div>
                                              
                                        </div>
                                    </div>
                                <?php } ?>
                                    @endforeach
                                </div>
                    </div>

                  <!----  <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                        <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
                            <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" /></a>
                            <p class="bsac-caption">- বিজ্ঞাপন -</p>
                        </div>
                    </div>---->
                    <div class="row vc_row wpb_row vc_row-fluid">
                        <div class="bs-vc-wrapper">


                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                            <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                            @foreach ($alloverbn_bottom_section as $alloverbn_bottom)
                                                                
                                                            <?php if($loop->index == 0) {?>
                                                            <div class="row-1">
                                                                <div class="listing listing-grid-1 clearfix columns-1">
                                                                    <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                        <div class="item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a title="" data-src="{{'/images/'.$alloverbn_bottom->image}}" class="img-holder" href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                            </div>
                                                                            <h2 class="title"> <a href="bangladesh-detail.html?data=2230&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6">{{$alloverbn_bottom->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </div>
                                                            <?php } else {?>
                                                            <div class="row-2">
                                                                <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                        <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                            <div class="item-inner">
                                                                                    <h2 class="title">
                                                            <a href="bangladesh-detail.html?data=2217&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> {{$alloverbn_bottom->title}}</a></h2>
                                                                            </div>
                                                                        </article>
                                                                       
                                                                </div>
                                                            </div>
                                                            <?php } ?>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399419321455169442op.jpg" class="img-holder" href="bangladesh-detail.html?data=2162&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2162&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> যশোরে দুই পক্ষের ‘গোলাগুলিতে’ যুবক নিহত </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2160&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> উন্নয়নের ধারা বজায় রাখতে ‘অসুর শক্তিকে’ রুখে</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2122&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> নাটোরের সিংড়ায় সাবেক উপমন্ত্রী দুলুকে অবাঞ্ছিত ঘোষণা</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2118&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> নরসিংদীর নিলুফা ভিলায় ২ জঙ্গির আত্মসমর্পণ</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15399403171128014305op.jpg" class="img-holder" href="bangladesh-detail.html?data=2160&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2160&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> উন্নয়নের ধারা বজায় রাখতে ‘অসুর শক্তিকে’ রুখে </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2122&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> নাটোরের সিংড়ায় সাবেক উপমন্ত্রী দুলুকে অবাঞ্ছিত ঘোষণা</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2118&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> নরসিংদীর নিলুফা ভিলায় ২ জঙ্গির আত্মসমর্পণ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2106&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> নাটোরে খুন, ডাকাতি ও মাদক মামলায় আটক</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
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
                                                    <div class="row-1">
                                                        <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                <div class="item-inner">
                                                                    <div class="featured clearfix">
<a title="" data-src="home_source/15397718852091296623op.jpg" class="img-holder" href="bangladesh-detail.html?data=2122&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                                                    </div>
                                                                    <h2 class="title"> <a href="bangladesh-detail.html?data=2122&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"> নাটোরের সিংড়ায় সাবেক উপমন্ত্রী দুলুকে অবাঞ্ছিত ঘোষণা </a></h2>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="row-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2118&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> নরসিংদীর নিলুফা ভিলায় ২ জঙ্গির আত্মসমর্পণ</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2106&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> নাটোরে খুন, ডাকাতি ও মাদক মামলায় আটক</a></h2>
                                                                    </div>
                                                                </article>
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                    <div class="item-inner">
<h2 class="title">
<a href="bangladesh-detail.html?data=2100&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" class="post-title post-url font-bold"> ভাগ্যক্রমে ইউএনও'র প্রাণরক্ষা, ১৮ রাউন্ড গুলি বিনিময়!</a></h2>
                                                                    </div>
                                                                </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

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
                                                            <a class="img-cont b-loaded" href="gallery.html?id=0&amp;sb=72" style="background-image: url({{url('/images/'.$cat_main_picture->image)}});"></a>              
                                                                </a>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class="column-2">
                                                        <a href="gallery.html"><h2 class="text-white"><i class="item-icon fa fa-camera"></i>   ছবিঘর</h2></a>

                                                        <h2 class="title"> <a href="gallery.html?id=0&amp;sb=72" class="post-url post-title text-white">{{$cat_main_picture->title}} </a></h2>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                              </ul>
                                            </div>

                                            
                                            @foreach ($picture_cat_small as $cat_small_picture)
                                            <div class="col-md-3">
                                                <div class="small_image">
                                                    <a href="gallery.html?id=0&amp;sb=69"><img src="{{url('/images/'.$cat_small_picture->image)}}" alt="Avatar" class="slider_small_img"></a>
                                                                                                    <div class="overlay">
                                                    <a href="gallery.html?id=0&amp;sb=69" class="icon" title="User Profile">
                                                                                                        <i class="fa fa-camera"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                <p class="title"> <a href="gallery.html?id=0&amp;sb=69" class="post-title post-url">{{$cat_small_picture->title}}</a></p>
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