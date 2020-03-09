 @include('frontpart.include.head')
 <body class="home page-template-default page page-id-17 active-light-box ltr close-rh page-layout-3-col-0 full-width active-sticky-sidebar main-menu-sticky-smart active-ajax-search  wpb-js-composer js-comp-ver-5.4.5 vc_responsive bs-ll-a" dir="ltr">
  <div class="main-wrap content-main-wrap">
 @include('frontpart.include.header')
 <div class="rh-header clearfix light deferred-block-exclude">
            <div class="rh-container clearfix">
                <div class="menu-container close"> <span class="menu-handler"><span class="lines"></span></span>
                </div>
                <div class="logo-container">
                <a href="index.html" itemprop="url" rel="home"> <img src="{{asset('/frontend/img/footer-logo.png')}}" alt="The Online Post" /> </a>
                </div>
            </div>
        </div>
        <div class="text-center main-ad">
            <img src="img/ads/main.gif">
        </div>
    <main id="content" class="content-container">
        <div class="layout-3-col layout-3-col-0">
            <div class="row main-section">
                <div class="col-sm-12 content-column">
                    <div class="single-container bs-vc-content">
                        <div class="row vc_row wpb_row vc_row-fluid">
                            <div class="col-sm-12">
                                <div class="ticker-container">
                                    <div class="ticker-caption">
<p class="ticker-cap">শিরোনাম</p>
                                    </div>
                                    <ul>
                                        @foreach ($post_headlines as $post_headline)
                                         <div>
                                         <li><span>{{$post_headline->title}} <a href="{{url('/singlepost/'.$post_headline->id)}}">বিস্তারিত পড়ুন</a></span></li>
                                        </div>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row vc_row wpb_row vc_row-fluid">
                            <div class="bs-vc-wrapper">
                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-9 bf-3-main-column-size">
                                    <div class="bs-vc-wrapper wpb_wrapper">
                                        <div class="row vc_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                                <div class="bs-vc-wrapper ">
                                                    <div class=" bs-listing bs-listing-listing-classic bs-listing-single-tab">
                                                        <div class="listing listing-classic listing-classic-1 clearfix  columns-1">
                                                            @foreach ($post_is_main as $post_hilight)
                                                                <article class="listing-item listing-item-classic-1">
                                                                        <div class="listing-inner item-inner">
                                                                            <div class="featured clearfix">
                                                                            <a href="{{url('/singlepost/'.$post_hilight->id)}}" title="" data-src="{{url('/images/'.$post_hilight->image)}}" class="img-holder"></a>
                                                                            </div>
                                                                                <h2 class="title">
                                                                                <a href="{{url('/singlepost/'.$post_hilight->id)}}" class="post-url post-title">
                                                                                {{$post_hilight->title}}</a></h2>
                                                                                <div class="post-summary">
                                                                                </div>
                                                                            </div>
                                                                    </article>
                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="vc_custom_1516440305670 bs-listing bs-listing-listing-grid-1 bs-listing-single-tab">
                                                        <div class="listing listing-grid listing-grid-1 clearfix columns-2">

                                                    @foreach ($post_is_bottom as $bottom_post)
                                                        <article class="post-448 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                                                <div class="item-inner" style="height:320px;">
                                                                <div class="featured clearfix">
                                                                <a title="টস জিতে ফিল্ডিংয়ে বাংলাদেশ" data-src="{{url('/images/'.$bottom_post->image)}}" class="img-holder" href="{{url('/singlepost/'.$bottom_post->postid)}}"></a>
                                                                </div>
                                                            <h2 class="title"> <a href="{{url('/singlepost/'.$bottom_post->postid)}}" class="post-title post-url">{{$bottom_post->title}}</a></h2>
                                                                <!---<p>জিম্বাবুয়ের বিপক্ষে সিরিজের তৃতীয় তথা শেষ ওয়ানডেতে টসে জিতে ফিল্ডিং...</p>--->
                                                                                                            <div class="additional">
                                                                                                            <a class="category_item" href="{{url('/categorypost/'.$bottom_post->categoryid)}}">{{$bottom_post->category_name}}</a>
                                                            <a class="category_item text-green" title="" href="{{url('/singlepost/'.$bottom_post->postid)}}"><span class="comment_line">|  </span> <i class="fa fa-comment text-green"></i> 0</a>
                                                        </div>
                                                            </div>
                                                        </article>
                                                    @endforeach
                                                   
                                                        </div>
                                                    </div>
													
													
<div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
<div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
<a itemprop="url" class="bsac-link" href="http://artificial-soft.com/" target="_blank">
<img class="bsac-image" src="img/ads/600-100.png" alt="- Advertisement -" />
</a>
<p class="bsac-caption">- বিজ্ঞাপন -</p>
                                            </div>
</div>
										
										
                                                    <div class=" bs-listing bs-listing-listing-blog-1 bs-listing-single-tab pagination-animate">
                                                        <div class="bs-pagination-wrapper main-term-none simple_numbered bs-slider-first-item">
                                                      <div class="listing listing-blog listing-blog-1 clearfix columns-1 columns-1">
                                                        @foreach ($bang_cat as $cat_bang)
                                                       <article class="post-520 type-post format-standard has-post-thumbnail   listing-item listing-item-blog  listing-item-blog-1 main-term-10 bsw-6 ">
                                                                        <div class="item-inner clearfix">
                                                                            <div class="featured clearfix">
                                                                        <a title="সাত দফার এক দফাও মানা হবে না : কাদের" data-src="{{url('/images/'.$cat_bang->image)}}" class="img-holder" href="{{url('/singlepost/'.$cat_bang->postid)}}"></a>
                                                                        </div>
                                                                        <h2 class="title"><a href="{{url('/singlepost/'.$cat_bang->postid)}}" class="post-url post-title"> {{$cat_bang->title}}</a></h2>
                                                                            <div class="additional">
                                                                            <a class="category_item" href="{{url('categorypost/'.$cat_bang->categoryid)}}">{{$cat_bang->category_name}}</a>
                                                                            <a class="category_item text-green" title="" href="{{url('/singlepost/'.$cat_bang->postid)}}"><span class="comment_line">|  </span> <i class="fa fa-comment text-green"></i> ২</a>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                 @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="bs-pagination bs-simple-pagination simple_numbered main-term-none clearfix">
                                                            <div class="pagination bs-numbered-pagination">
<a href="{{url('/'.'categorypost/23')}}" class="btn btn-block"><i class="fa fa-spinner"></i> আরও খবর</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                                <div class="bs-vc-wrapper ">
                                                    <div class=" bs-listing bs-listing-listing-text-3 bs-listing-single-tab">
                                                        <div class="listing listing-text listing-text-3 clearfix columns-1">
                                                            @foreach ($post_is_isright as $right_post)
                                                                <div class="item-inner clearfix mb-8">
                                                                    <div class="featured">
                                                                    <a title="New Yorker Cover Responds to Trump Profane Remarks by Putting Him in a Literal Hole" data-src="{{url('/images/'.$right_post->image)}}" class="img-holder" href="{{url('/singlepost/'.$right_post->id)}}"></a>
                                                                    </div>
                                                                    <p class="title">
                                                                    <a class="post-url" href="{{url('/singlepost/'.$right_post->id)}}" title="{{$right_post->title}}"> <span class="post-title">{{$right_post->title}}</span> </a>
                                                                    </p>
                                                                </div>
                                                             <div style="width:116%; clear:both; margin:-5px -10px 8px -19px; border-bottom: 1px solid #e51939"></div>
                                                             @endforeach
                                                        </div>
                                                    </div>

<div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
<div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
<a itemprop="url" class="bsac-link" href="http://artificial-soft.com/" target="_blank">
<img class="bsac-image" src="img/ads/300-200.png" alt="- Advertisement -" />
</a>
<p class="bsac-caption">- বিজ্ঞাপন -</p>
                                            </div>
</div>

                                                    <div class=" bs-listing bs-listing-user-listing-1 bs-listing-single-tab">
                                                        <h3 class="section-heading sh-t3 sh-s1 main-term-none sidebar_title"> <span class="h-text main-term-none main-link text-white"> ভোটের হাওয়া </span></h3>
                                                        <div class="listing listing-user type-1 style-1 columns-1 clearfix">
                                                            <div class="listing listing-text listing-text-3 clearfix columns-1">
                                                                @foreach ($vote_cat as $cat_vat)
                                                                   <div class="item-inner clearfix mb-8">
                                                                    <div class="featured">
                                                                    <a title="" data-src="{{url('/images/'.$cat_vat->image)}}" class="img-holder" href="{{url('/singlepost/'.$cat_vat->postid)}}"></a>
                                                                        </div>
                                                                        <p class="title">
                                                                        <a class="post-url" href="{{url('/singlepost/'.$cat_vat->postid)}}" title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল"> <span class="post-title">{{$cat_vat->title}}</span> </a>
                                                                         </p>
                                                                </div>
                                                                
                                                              <div style="width:116%; clear:both; margin:-5px -10px 8px -19px; border-bottom: 1px solid #e51939"></div>
                                                              @endforeach    
                                                                   
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" bs-listing bs-listing-listing-text-1 bs-listing-single-tab">
                                                        <h3 class="section-heading sh-t3 sh-s1 main-term-none sidebar_title"> <span class="h-text main-term-none main-link text-white"> মতামত </span></h3>
                                                        <div class="listing listing-text listing-text-1 clearfix columns-1">
                                                        @foreach ($motamot_cat as $cat_motamot)
                                                            <article class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-1 main-term-8">
                                                                    <div class="item-inner">
                                                                        <div class="term-badges floated"><span class="term-badge term-8">
                                                                        <a href="{{url('/categorypost/'.$cat_motamot->catid)}}">{{$cat_motamot->category_name}}</a></span></div>
                                                                <h2 class="title"> <a href="{{url('/singlepost/'.$cat_motamot->postid)}}" class="post-title post-url">{{$cat_motamot->title}} </a></h2>
                                                                                                                                    </div>
                                                                </article>
                                                           @endforeach  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1 bsac-float-center">
                                            <div id="bsac-79-1536661011" class="bsac-container bsac-type-image " itemscope="" data-adid="79" data-type="image">
<a itemprop="url" class="bsac-link" href="#" target="_blank">
<img class="bsac-image" src="img/ads/long3.gif" alt="- Advertisement -" />
</a>
                                                <p class="bsac-caption">- বিজ্ঞাপন -</p>
                                            </div>
                                        </div>
                                        @foreach ($main_high_cat as $item_cat)
                                          <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                                            <div class="callout callout-red mb-4">
                                                <div class="callout-container">
                                                    <span class="callout-shape">
                                                    <a class="callout-link" href="{{url('/categorypost/'.$item_cat->id)}}">{{$item_cat->category_name}}</a>
                                                    </span>
													<a href="{{url('/categorypost/'.$item_cat->id)}}" class="pull-right more-news">আরও <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <?php
                                            
                                            $cat_by_post = DB::table('posts')->select('title','image','id','cat_id')
                                                                            ->where('cat_id','=',$item_cat->id)
                                                                            ->orderBy('id','desc')
                                                                            ->take(5)
                                                                            ->get();
                                            
                                            ?>
                                            <div class="listing listing-mix-6 clearfix ">
                                                
                                                <div class="item-inner">
                                                    @foreach ($cat_by_post as $item_bycat)
                                                      @if($loop->index == 0)
                                                       <div class="column-1">
                                                       <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                                            <div class="item-inner">
                                                                <div class="featured clearfix">
                                                                <a title="রোহিঙ্গা ইস্যুতে চীন ইতিবাচক ভূমিকা রাখবে :" data-src="{{url('/images/'.$item_bycat->image)}}" class="img-holder" href="{{url('/singlepost/'.$item_bycat->id)}}"></a>
                                                                <h2 class="title" style="padding-top:8px;"><a href="{{url('/singlepost/'.$item_bycat->id)}}" class="post-title post-url">{{$item_bycat->title}}</a></h2>
                                                            </div>
                                                        </article>
                                                     </div>
                                                    @else
                                                    <div class="column-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                              <div class="item-inner clearfix mb-8">
                                                                        <div class="featured">
                                                                        <a title="পোস্তগোলায় শ্রমিক-পুলিশ সংঘর্ষ, নিহত ১" data-src="{{url('/images/'.$item_bycat->image)}}" class="img-holder" href="{{url('/singlepost/'.$item_bycat->id)}}"></a>
                                                                                                                                            </div>
                                                                        <p class="title">
                                                                        <a class="post-url" href="{{url('/singlepost/'.$item_bycat->id)}}" title="পোস্তগোলায় শ্রমিক-পুলিশ সংঘর্ষ, নিহত ১"> <span class="post-title">{{$item_bycat->title}}</span></a>
                                                                        </p>
                                                                    </div>
                                                                  <div style="width:100%; clear:both; margin:-5px 0px 8px 0px; border-bottom: 1px solid #e51939"></div>
                                                         </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                               
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                                            <div class="callout callout-red mb-4">
                                                <div class="callout-container">
                                                    <span class="callout-shape">
                                                   <a class="callout-link" href="#">রাজনীতি</a>
                                                    </span>
													<a href="category6bb8.html?cat=%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf" class="pull-right more-news">আরও <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="listing listing-mix-6 clearfix ">
                                                <div class="item-inner">
                                                    <div class="column-1">
                                                        @foreach ($rajnity_cat_main as $main_cat_rajnity)
                                                            
                                                          <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                                            <div class="item-inner">
                                                                <div class="featured clearfix">
                                                                <a title="চট্টগ্রামে সমাবেশের অনুমতি পেয়েছে ঐক্যফ্রন্ট" data-src="{{url('/images/'.$main_cat_rajnity->image)}}" class="img-holder" href="chattogram.html?data=2276&amp;cat=%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf"></a>
                                                            </div>
                                                            <h2 class="title">
                                                            <a href="" class="post-title post-url"> {{$main_cat_rajnity->title}} </a>
                                                            </h2>
                                                        </article>
                                                     @endforeach
                                                    </div>
                                                    <div class="column-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                                @foreach ($rajnity_cat_small as $cat_small_rajnity)
                                                                    
                                                                
                                                                    <div class="item-inner clearfix mb-8">
                                                                        <div class="featured">
                                                                        <a title="সাত দফার এক দফাও মানা হবে না" data-src="{{url('/images/'.$cat_small_rajnity->image)}}" class="img-holder" href="rajnity-detail.html?data=2274&amp;cat=%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf"></a>
                                                                                                                                        </div>
                                                                    <p class="title">
                                                                    <a class="post-url" href="rajnity-detail.html?data=2274&amp;cat=%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf" title="সাত দফার এক দফাও মানা হবে না"> <span class="post-title"> {{$cat_small_rajnity->title}}</span> </a>
                                                                                                                                        </p>
                                                                    </div>
                                                                    
                                                                <div style="width:100%; clear:both; margin:-5px 0px 8px 0px; border-bottom: 1px solid #e51939"></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                                            <div class="callout callout-red mb-4">
                                                <div class="callout-container">
                                                    <span class="callout-shape">
<a class="callout-link" href="#">অর্থনীতি</a>
                                                    </span>
													<a href="categoryae46.html?cat=%e0%a6%85%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf" class="pull-right more-news">আরও <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="listing listing-mix-6 clearfix ">
                                                <div class="item-inner">
                                                    <div class="column-1">
                                                     @foreach ($economics_cat_main as $cat_main_economics)
                                                         <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                                        <div class="item-inner">
                                                            <div class="featured clearfix">
                                                            <a title="আওয়ামী লীগ পুনর্নির্বাচিত না হলে উন্নয়নের ক্ষেত্রে" data-src="{{url('/images/'.$cat_main_economics->image)}}" class="img-holder" href="orthonity-detail.html?data=2286&amp;cat=%e0%a6%85%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf"></a>
                                                                                                                                        </div>
                                                                                                                                        <h2 class="title"> 
                                                                        <a href="orthonity-detail.html?data=2286&amp;cat=%e0%a6%85%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf" class="post-title post-url"> {{$cat_main_economics->title}} </a>
                                                            </h2>
                                                        </div>
                                                    </article>
                                                @endforeach
                                                    </div>
                                                    <div class="column-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-1">

                                                    @foreach ($economics_cat_small as $cat_small_economics)
                                                        
                                                    
                                                        <div class="item-inner clearfix mb-8">
                                                                    <div class="featured">
                                                                <a title="নির্বাচনের আগে পুঁজিবাজার চাঙ্গা রাখতে নানা উদ্যোগ" data-src="{{url('/images/'.$cat_small_economics->image)}}" class="img-holder" href="detail.html?data=2149&amp;cat=%e0%a6%85%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf"></a>
                                                                                                                                    </div>
                                                                <p class="title">
                                                                <a class="post-url" href="detail.html?data=2149&amp;cat=%e0%a6%85%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf" title="নির্বাচনের আগে পুঁজিবাজার চাঙ্গা রাখতে নানা উদ্যোগ"> <span class="post-title"> {{$cat_small_economics->title}} </span> </a>
                                                                                                                                    </p>
                                                         </div>
                                                         @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                                            <div class="callout callout-red mb-4">
                                                <div class="callout-container">
                                                    <span class="callout-shape">
                                                      <a class="callout-link" href="#">আন্তর্জাতিক</a>
                                                    </span>
													<a href="category7afb.html?cat=%e0%a6%86%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%b0%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%a4%e0%a6%bf%e0%a6%95" class="pull-right more-news">আরও <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="listing listing-mix-6 clearfix ">
                                                <div class="item-inner">
                                                    <div class="column-1">
                                                    @foreach ($international_cat_main as $main_cat_international)
                                                      <article class="post-442 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-8">
                                                            <div class="item-inner">
                                                                <div class="featured clearfix">
                                                                <a title="নয়াদিল্লিতে বায়ু দূষণের মাত্রা আগের চেয়ে বেড়েছে" data-src="{{url('/images/'.$main_cat_international->image)}}" class="img-holder" href="antorjatik-detail.html?data=2281&amp;cat=%e0%a6%86%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%b0%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%a4%e0%a6%bf%e0%a6%95"></a>
                                                                                                                            </div>
                                                                                                                            <h2 class="title"> 
                                                            <a href="antorjatik-detail.html?data=2281&amp;cat=%e0%a6%86%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%b0%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%a4%e0%a6%bf%e0%a6%95" class="post-title post-url">{{$main_cat_international->title}} </a>
                                                                                                                            </h2>
                                                            </div>
                                                        </article>
                                                     @endforeach
                                                    </div>
                                                    <div class="column-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                        @foreach ($international_cat_small as $small_cat_international)
                                                            
                                                       
                                                            <div class="item-inner clearfix mb-8">
                                                                    <div class="featured">
                                                                    <a title="বাবরী মসজিদ মামলার বাদিকে হুমকি দিয়ে চিঠি;" data-src="{{url('/images/'.$small_cat_international->image)}}" class="img-holder" href="detail.html?data=2280&amp;cat=%e0%a6%86%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%b0%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%a4%e0%a6%bf%e0%a6%95"></a>
                                                                                                                                </div>
                                                            <p class="title">
                                                            <a class="post-url" href="detail.html?data=2280&amp;cat=%e0%a6%86%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%b0%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%a4%e0%a6%bf%e0%a6%95" title="বাবরী মসজিদ মামলার বাদিকে হুমকি দিয়ে চিঠি;"> <span class="post-title"> {{$small_cat_international->title}} </span> </a>
                                                                                                                                </p>
                                                                                                                            </div>
                                                            <div style="width:100%; clear:both; margin:-5px 0px 8px 0px; border-bottom: 1px solid #e51939"></div>
                                                            @endforeach
                                                               

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab dark_bg">
                                            <div class="callout callout-red mb-4">
                                                <div class="callout-container">
                                                    <span class="callout-shape">
<a class="callout-link" href="video.html?cat=%e0%a6%ad%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a6%93">ভিডিও</a>
                                                    </span>
<a href="video.html?cat=%e0%a6%ad%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a6%93" class="pull-right more-news">আরও <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="listing listing-mix-6 clearfix ">
                                               <div class="item-inner">
                                                 @foreach ($videos as $video)
                                                 <?php
                                                    
                                                        $str = $video->link;
                                                        $explodeditem = explode('/',$str);
                                                        // echo $explodeditem[4]."</br>";
                                                        // print_r (explode("/",$str));
                                                    
                                                  ?>
                                                   <?php if($loop->index == 0) {?>
                                                    <div class="column-1">
                                                        <article class="post-450 type-post format-standard has-post-thumbnail  listing-item-1 listing-item listing-mg-item listing-mg-2-item listing-mg-type-1 main-term-8">
                                                            <div class="item-content">
                                                            <a  class="img-cont b-loaded" href="{{url('/video-detail/'.$video->id)}}" style="background-image: url(https://img.youtube.com/vi/{{$explodeditem[4]}}/0.jpg);"></a><span class="format-icon format-video"><i class="fa fa-play"></i></span>
                                                                                                                                <div class="term-badges floated"><span class="term-badge term-8">
                                                                <a href="#"></a></span></div>
                                                                                                                                <div class="content-container">
                                                                <h2 class="title"> <a href="{{url('/video-detail/'.$video->id)}}" class="post-url post-title">
                                                                {{$video->title}}</a></h2>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                <?php } else{?>
                                                    <div class="column-2">
                                                        <div class="listing listing-text listing-text-2 clearfix columns-1">
                                                                <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                                                                    <div class="item-inner clearfix" style="border-bottom: 2px solid red">
                                                                        <div class="featured">
                                                              <a data-src="home_source/1539947730469716755op.jpg" class="img-holder" href="{{url('/video-detail/'.$video->id)}}" style="background-image: url(https://img.youtube.com/vi/{{$explodeditem[4]}}/0.jpg);"></a>
                                                                        </div>
                                                                        <p class="title">
                                                                        <a class="post-url" href="{{url('/video-detail/'.$video->id)}}"> <span class="post-title text-white">{{$video->title}}</span></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab dark_bg">
                                            <div class="callout callout-red mb-4">
                                                <div class="callout-container">
                                                    <span class="callout-shape">
                                                        <a class="callout-link" href="category.html">ছবি</a>
                                                    </span>
												<a href="gallery.html" class="pull-right more-news">আরও <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
                                                                    <a class="img-cont b-loaded" href="{{url('/galery/'.$cat_main_picture->postid)}}" style="background-image:url({{url('/images/'.$cat_main_picture->image)}});"></a>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                            <div class="column-2">
                                                            <a href="{{url('/galery/'.$cat_main_picture->postid)}}"><h2 class="text-white"><i class="item-icon fa fa-camera"></i>   ছবিঘর</h2></a>
                                                            <h2 class="title"> <a href="{{url('/galery/'.$cat_main_picture->postid)}}" class="post-url post-title text-white"> {{$cat_main_picture->title}} </a></h2>
                                                            </div>
                                                        </li>
                                                       
                                                        @endforeach
                                                      </ul>
                                                    </div>

                                                    @foreach ($picture_cat_small as $cat_small_picture)
                                                       <div class="col-md-3">
                                                        <div class="small_image">
                                                        <a href="{{url('/galery/'.$cat_small_picture->postid)}}"><img src="{{url('/images/'.$cat_small_picture->image)}}" alt="Avatar" class="slider_small_img"></a>
                                                                                                                        <div class="overlay">
                                                                <a href="{{url('/galery/'.$cat_small_picture->postid)}}" class="icon" title="User Profile">
                                                              <i class="fa fa-camera"></i>
                                                            </a>
                                                          </div>
                                                        </div>
                                                    <p class="title"><a href="{{url('/galery/'.$cat_small_picture->postid)}}" class="text-white post-title post-url">{{$cat_small_picture->title}}</a></p>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3 sticky-column bs-vc-sidebar-column bf-3-primary-column-size">
    <div class="bs-vc-wrapper wpb_wrapper">
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <a class="read-more btn-block text-center tukro-news" href="pressrelease.html">টুকরো খবর</a>
        </div>
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <div class="fb-page" 
              data-href="https://www.facebook.com/ekattortribune"
              data-width="380" 
              data-hide-cover="false"
              data-show-facepile="false">
            </div>
        </div>          
        </div>
		<!----
        <div class="fifa bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11">
                <span class="h-text main-term-11 text-white"> বিশ্বকাপের আর বাকী </span>
            </p>
            <div class="bs-pagination-wrapper main-term-11 next_prev bs-slider-first-item">
                <div class="listing listing-thumbnail listing-tb-2 clearfix scolumns-2 ">
                    <a href="" target="_blank">
                        <div id="countdown">
                            <span class="days time">২৯<br> দিন </span>
                            <span class="hours time">২<br> ঘণ্টা </span>
                            <span class="minutes time">৩২<br> মিনিট </span>
                            <span class="seconds time">১৩<br> সেকেন্ড </span>
                        </div>
                    </a>
    
                </div>
            </div>
        </div>---->
		
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <div id="bsac-47-1396570055" class="bsac-container bsac-type-image " itemscope="" itemtype="https://schema.org/WPAdBlock" data-adid="47" data-type="image">
                <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/side.gif" alt="- Advertisement -" /></a>
                <p class="bsac-caption">- Advertisement -</p>
            </div>
        </div>
        <div class="bs-tab-shortcode">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#latest" class="mostread" data-toggle="tab" aria-expanded="true">সর্বশেষ</a></li>
                <li class="mostread"><a href="#selected" class="latestpost" data-toggle="tab" aria-expanded="false">পঠিত</a></li>
                <li class="mostread"><a href="#others" class="latestpost" data-toggle="tab" aria-expanded="false">বিশেষ খবর</a></li>
            </ul>
            <div class="tab-content">
                <div id="latest" class="tab-pane active">
                    @foreach ($last_news as $news_last)
                        
                   
                        <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                            <div class="item-inner clearfix">
                                <div class="featured">
                                <a data-src="{{url('/images/'.$news_last->image)}}" class="img-holder" href=""></a>
                                                                </div>
                                                                <p class="title">
                                <a class="post-url" href="">
                                <span class="post-title">
                                {{$news_last->title}}</span>
                                </a>
                                                                </p>
                            </div>
                        </div>
                     @endforeach
                </div>
                <div id="selected" class="tab-pane">
                       @foreach ($show_popular as $item_popular)
                           
                      
                        <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                            <div class="item-inner clearfix">
                                <div class="featured">
                                    <a title="দাদার জন্য পথসভা " data-src="{{url('/images/'.$item_popular->image)}}" class="img-holder" href="{{url('/singlepost/'.$item_popular->id)}}"></a>
                                    </div>
                                    <p class="title">
                                    <a class="post-url" href="{{url('/singlepost/'.$item_popular->id)}}" title="দাদার জন্য পথসভা "> <span class="post-title">{{$item_popular->title}}</span> </a>
                                </p>
                            </div>
                        </div>
                        @endforeach

                </div>
                <div id="others" class="tab-pane">
                    @foreach ($special_news as $news_special)
                        <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                            <div class="item-inner clearfix">
                                <div class="featured">
                                <a title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল" data-src="{{url('/images/'.$news_special->image)}}" class="img-holder" href="detail.html?data=1715&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6"></a>
                                </div>
                                <p class="title">
                                <a class="post-url" href="detail.html?data=1715&amp;cat=%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6" title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল"> <span class="post-title">{{$news_special->title}}</span> </a>
                                </p>
                            </div>
                        </div>
                       @endforeach  
                </div>
            </div>
        </div>
        <!-- <div class="  better-studio-shortcode bsc-clearfix better-social-counter style-style-10 colored in-4-col">
            <ul class="social-list bsc-clearfix">
                <li class="social-item facebook"><a href="#" class="item-link" target="_blank"><i class="item-icon fa fa-facebook"></i><span class="item-count">983</span><span class="item-title">Likes</span><span class="item-join">Like our page</span></a></li>
                <li class="social-item twitter"><a href="#" class="item-link" target="_blank"><i class="item-icon fa fa-twitter"></i><span class="item-count">365</span><span class="item-title">Followers</span><span class="item-join">Follow Us</span></a></li>
                <li class="social-item instagram"><a href="#" class="item-link" target="_blank"><i class="item-icon fa fa-instagram"></i><span class="item-count">311</span><span class="item-title">Followers</span><span class="item-join">Follow Us</span></a></li>
                <li class="social-item rss"><a href="#" class="item-link" target="_blank"><i class="item-icon fa fa-rss"></i><span class="item-count">RSS</span><span class="item-title">Subscribe</span><span class="item-join">Subscribe</span></a></li>
            </ul>
        </div> -->
        <div class=" bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11 sidebar_title">
                <a href="#" class="main-link"> <span class="h-text main-term-11 text-white"> অনলাইন জরিপ </span> </a>
            </p>
            <div class="bs-pagination-wrapper main-term-11 next_prev bs-slider-first-item">
                <div class="listing listing-thumbnail listing-tb-2 clearfix scolumns-2 ">
                    <p> আওয়ামী লীগের সাধারণ সম্পাদক ওবায়দুল কাদের বলেছেন, তফসিল ঘোষণার আগে সংলাপের দাবি অযৌক্তিক। আপনিও কি তা-ই মনে করেন?</p>
                    <div class="text-center">
         <form action="#" method="post" style="margin-top:20px;">
<input type="hidden" value="8" name="idt">
<label class="radio-inline">
<input name="none" type="radio" value="1" style="width:15px; height:15px">
হ্যাঁ</label>
<label class="radio-inline">
<input name="none" type="radio" value="2" style="width:15px; height:15px">
না</label>
<input type="submit" name="voting" value="ভোট দিন" style="width:50px; height:25px; margin-left:10px;">
</form>
                         </div>
                </div>
            </div>
        </div>
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <div id="bsac-47-1396570055" class="bsac-container bsac-type-image " itemscope="" itemtype="https://schema.org/WPAdBlock" data-adid="47" data-type="image">
                <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/side3.gif" alt="- Advertisement -" /></a>
                <p class="bsac-caption">- Advertisement -</p>
            </div>
        </div>
        <div class=" bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11 sidebar_title">
                <a href="category-video.html" class="main-link"> <span class="h-text main-term-11 text-white"> নামাজের সময়সূচী </span> </a>
            </p>
            <div class="bs-pagination-wrapper main-term-11 next_prev bs-slider-first-item">
                <div class="listing listing-thumbnail listing-tb-2 clearfix scolumns-2 ">
                    <div class="prayerTimePanel">
                    <div class="prayerTimeTitle"></div>
                    <div class="dateShow">২৮ অক্টোবর ২০১৮</div>
                    <div class="prayerTimeTable">
                        <table width="100%" border="2">
                            <tbody>
                                <tr>
                                    <td><span class="prayerName">ফজর</span></td>
                                    <td><span class="prayerTime">০৫:২৫</span></td>
                                </tr>
                                <tr>
                                    <td><span class="prayerName">যোহর</span></td>
                                    <td><span class="prayerTime">০১:১৫</span></td>
                                </tr>
                                <tr>
                                    <td><span class="prayerName">আসর</span></td>
                                    <td><span class="prayerTime">০৪:৩০</span></td>
                                </tr>
                                <tr>
                                    <td><span class="prayerName">মাগরিব</span></td>
                                    <td><span class="prayerTime">০৫:৪৫</span></td>
                                </tr>
                                <tr>
                                    <td><span class="prayerName">এশা</span></td>
                                    <td><span class="prayerTime">০৭:৪৫</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="nonPrayTime"><span class="sunrise">সূর্যোদয় - ০৫:৫৪</span><span class="sunset">সূর্যাস্ত - ০৫:৪০</span></div>
                </div>
                </div>
            </div>
        </div>
        <div class=" bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11 sidebar_title">
                <a href="#" class="main-link"> <span class="h-text main-term-11 text-white"> রাশিফল </span> </a>
            </p>
            <div class="bs-pagination-wrapper main-term-11 next_prev bs-slider-first-item">
                <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                @foreach ($rasifol_cat_small as $cat_small_rasifal)
                   <div class="item-inner clearfix">
                        <div class="featured">
                        <a data-src="{{url('/images/'.$cat_small_rasifal->image)}}" class="img-holder" href="detail.html?data=2287&amp;cat=%E0%A6%B0%E0%A6%BE%E0%A6%B6%E0%A6%BF%E0%A6%AB%E0%A6%B2"></a>
                                                    </div>
                                                    <!---<p>আজকের রাশিফল (জেনে নিন আজকের রাশিফল)</p>--->
                                                    <p class="title">
                            <a class="post-url" href="detail.html?data=2287&amp;cat=%E0%A6%B0%E0%A6%BE%E0%A6%B6%E0%A6%BF%E0%A6%AB%E0%A6%B2"> <span class="post-title">
                            {{$cat_small_rasifal->title}} </span> </a>
                        </p>
                    </div>
                 @endforeach
                </div>
            </div>
        </div>
        <div class=" bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11 sidebar_title">
                <a href="#" class="main-link"> <span class="h-text main-term-11 text-white"> কুপন এন্ড অফারস </span> </a>
            </p>
                <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                @foreach ($offer_cat_small as $cat_small_offer)
                    
               
                    <div class="item-inner clearfix">
                        <div class="featured">
                        <a data-src="{{url('/images/'.$cat_small_offer->image)}}" class="img-holder" href="detail.html?data=2151&amp;cat=%E0%A6%95%E0%A7%81%E0%A6%AA%E0%A6%A8+%E0%A6%8F%E0%A6%A8%E0%A7%8D%E0%A6%A1+%E0%A6%85%E0%A6%AB%E0%A6%BE%E0%A6%B0%E0%A6%B8"></a>
                        </div>
                        <p class="title">
                        <a class="post-url" href="detail.html?data=2151&amp;cat=%E0%A6%95%E0%A7%81%E0%A6%AA%E0%A6%A8+%E0%A6%8F%E0%A6%A8%E0%A7%8D%E0%A6%A1+%E0%A6%85%E0%A6%AB%E0%A6%BE%E0%A6%B0%E0%A6%B8"> <span class="post-title"> {{$cat_small_offer->title}}</span> </a>
                        </p>
                    </div>
                    @endforeach
                </div>
                
                
        </div>
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <div id="bsac-47-1396570055" class="bsac-container bsac-type-image " itemscope="" itemtype="https://schema.org/WPAdBlock" data-adid="47" data-type="image">
                <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/side4.gif" alt="- Advertisement -" /></a>
                <p class="bsac-caption">- Advertisement -</p>
            </div>
        </div>
        <div class="weather_box bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11 sidebar_title">
                <a href="category-video.html" class="main-link"> <span class="h-text main-term-11 text-white"> আবহাওয়া </span> </a>
            </p>
            <div class="bs-pagination-wrapper main-term-11 next_prev bs-slider-first-item">
                <div class="listing listing-thumbnail listing-tb-2 clearfix scolumns-2 ">                    
                    <table width="100%" class="weather" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td>২৭ অক্টোবর ২০১৮</td>
                                <td>তাপমাত্রা সর্বোচ্চ</td>
                                <td>তাপমাত্রা সর্বনিম্ন</td>
                                <td>সূর্যোদয়</td>
                                <td>সূর্যাস্ত</td>
                                <td>আদ্রতা</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">ডিগ্রী সেঃ</td>
                                <td colspan="2">ঘঃমিঃ</td>
                                <td colspan="1">%</td>
                            </tr>
                            <tr>
                                <td>ঢাকা</td>
                                <td>৩১.৮</td>
                                <td>২৩.৯</td>
                                <td>৫.৫৭	</td>
                                <td>৫.৩০</td>
                                <td>৬৭</td>
                            </tr>
                            <tr>
                                <td>চট্টগ্রাম</td>
                                <td>২৯.০				</td>
                                <td>১৭.৬</td>
                                <td>৫.৫০</td>
                                <td>৫.২৬</td>
                                <td>৮৬</td>
                            </tr>
                            <tr>
                                <td>রাজশাহী</td>
                                <td>৩২.৬		</td>
                                <td>২০.১	</td>
                                <td>৬.০৪</td>
                                <td>৫.৩৬</td>
                                <td>৮৬</td>
                            </tr>
                            <tr>
                                <td>বরিশাল</td>
                                <td>৩১.০			</td>
                                <td>২১.২	</td>
                                <td>৫.৫৬</td>
                                <td>৫.৩১</td>
                                <td>৯০</td>
                            </tr>
                            <tr>
                                <td>খুলনা</td>
                                <td>৩১.৬				</td>
                                <td>২০.৬</td>
                                <td>৬.০০	</td>
                                <td>৫.৩৬</td>
                                <td>৯৯</td>
                            </tr>
                            <tr>
                                <td>সিলেট</td>
                                <td>২৯.৭		</td>
                                <td>১৯.০		</td>
                                <td>৫.৫২	</td>
                                <td>৫.২৩</td>
                                <td>৮৩</td>
                            </tr>
                            <tr>
                                <td>রংপুর</td>
                                <td>২৯.৮				</td>
                                <td>১৮.৬</td>
                                <td>৬.০৩</td>
                                <td>৫.৩০</td>
                                <td>৯৮</td>
                            </tr>
                            <tr>
                                <td>ময়মনসিংহ</td>
                                <td>৩০.০			</td>
                                <td>১৮.৮	</td>
                                <td>৫.৫৮	</td>
                                <td>৫.২৯</td>
                                <td>৯৪</td>
                            </tr>
                            <tr>
                                <td>সারাদেশ</td>
                                <td>৩৩.৫	</td>
                                <td>১৭.৯</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="read-more btn-block text-center" href="weather.html">বিস্তারিত জানতে ক্লিক করুন</a>
                </div>
            </div>
        </div>
        <div class=" bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11 sidebar_title">
                <a href="#" class="main-link"> <span class="h-text main-term-11 text-white"> আর্টিফিশিয়াল সফট</span> </a>
            </p>
            <div class="bs-pagination-wrapper main-term-11 next_prev bs-slider-first-item">
                <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                    <div class="item-inner clearfix">
                    <iframe width="260" height="300" src="{{$videos_right->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class=" bs-listing bs-listing-listing-thumbnail-2 bs-listing-single-tab pagination-animate">
            <p class="section-heading sh-t3 sh-s1 main-term-11 sidebar_title">
                <a href="#" class="main-link"> <span class="h-text main-term-11 text-white"> পুরানো সংবাদ </span> </a>
            </p>
            <div class="bs-pagination-wrapper main-term-11 next_prev bs-slider-first-item">
                <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                    <div class="item-inner clearfix">
                        <div class="calendarPanle">
                            <div class="calendarTitle">
                                <div class="archiveHeader"></div>
                            </div>
                            <div class="selectDate">
                                {!!Form::open(['url' => '/archivefilter','method' => 'get','enctype'=>'multipart/form-data'])!!}
                                <table cellpadding="5" cellspacing="5" width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                <select id="month" name="dd" class="arch_btn">
                                                    <option selected="selected" disabled="disabled">দিন</option>
<option value="1">
01</option>	
<option value="2"selected='selected'>
02</option>	
<option value="3">
03</option>	
<option value="4">
04</option>	
<option value="5">
05</option>	
<option value="6">
06</option>	
<option value="7">
07</option>	
<option value="8">
08</option>	
<option value="9">
09</option>	
<option value="10">
10</option>	
<option value="11">
11</option>	
<option value="12">
12</option>	
<option value="13">
13</option>	
<option value="14">
14</option>	
<option value="15">
15</option>	
<option value="16">
16</option>	
<option value="17">
17</option>	
<option value="18">
18</option>	
<option value="19">
19</option>	
<option value="20">
20</option>	
<option value="21">
21</option>	
<option value="22">
22</option>	
<option value="23">
23</option>	
<option value="24">
24</option>	
<option value="25">
25</option>	
<option value="26">
26</option>	
<option value="27">
27</option>	
<option value="28">
28</option>	
<option value="29">
29</option>	
<option value="30">
30</option>	
<option value="31">
31</option>	
                                 </select>
                                            </td>
                                            <td align="left">
                                    <select id="month" name="mm" class="arch_btn">
                                                    <option selected="selected" disabled="disabled">মাস</option>
<option value='Jan' >Jan</option><option value='Feb' >Feb</option><option value='Mar' >Mar</option><option value='Apr' >Apr</option><option value='May' >May</option><option value='Jun' >Jun</option><option value='Jul' >Jul</option><option value='Aug' >Aug</option><option value='Sep' >Sep</option><option value='Oct' >Oct</option><option value='Nov' selected='selected'>Nov</option><option value='Dec' >Dec</option>                           </select>
                                            </td>
                                            <td align="left">
                              <select id="year" name="yy" class="arch_btn">
                              <option selected="selected" disabled="disabled">বছর&nbsp;</option>
<option value='2017' >2017 </option><option value='2018' selected='selected'>2018 </option><option value='2019' >2019 </option>                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-info" type="submit">সাবমিট</button>
                                            </td>
                                        </tr>
                                    </tbody>                                    
                                </table>
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                            </div>
                        </div>
                        <div class="row vc_row wpb_row vc_row-fluid">
                            <div class="bs-vc-wrapper">
                                    <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                        <div class="bs-vc-wrapper wpb_wrapper">
                                            <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                <h3 class="section-heading sh-t3 sh-s1 main-term-12 sidebar_title"> <a href="categoryec57.html?cat=%e0%a6%ae%e0%a6%a4%e0%a6%be%e0%a6%ae%e0%a6%a4" class="main-link"> <span class="h-text main-term-12 text-white">মতামত</span> </a></h3>
                                                <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                    @foreach ($opinion_cat_main as $cat_main_opinion)
                                                       @if($loop->index == 0)
                                                        <div class="row-1">
                                                            <div class="listing listing-grid-1 clearfix columns-1">
                                                                <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                    <div class="item-inner">
                                                                        <div class="featured clearfix">
                                                                        <a title="সেই মেয়েটিকে ধর্ষণ না করায় পুলিশকে ধন্যবাদ" data-src="{{url('/images/'.$cat_main_opinion->image)}}" class="img-holder" href="{{url('/singlepost/'.$cat_main_opinion->postid)}}"></a>
                                                                        </div>
                                                                    <h2 class="title"> <a href="{{url('/singlepost/'.$cat_main_opinion->postid)}}">{{$cat_main_opinion->title}}</a></h2>
                                                                    </div>
                                                                </article>
                                                               
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="row-2">
                                                            <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                             <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                        <div class="item-inner">
                                                                        <h2 class="title"> <a href="{{url('/singlepost/'.$cat_main_opinion->postid)}}" class="post-title post-url font-bold">{{$cat_main_opinion->title}}</a></h2>
                                                                        </div>
                                                                    </article>
                                                              <div style="width:114%; clear:both; margin:-5px 0px 8px -20px; border-bottom: 1px solid #e51939"></div>
                                                            
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                        <div class="bs-vc-wrapper wpb_wrapper">
                                            <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                <h3 class="section-heading sh-t3 sh-s1 main-term-12 sidebar_title"> <a href="category6b3c.html?cat=%e0%a6%96%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%a7%e0%a7%82%e0%a6%b2%e0%a6%be" class="main-link"> <span class="h-text main-term-12 text-white">খেলাধূলা</span> </a></h3>
                                                <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                    @foreach ($sport_cat_main as $cat_main_sport)
                                                      @if($loop->index == 0)
                                                        <div class="row-1">
                                                            <div class="listing listing-grid-1 clearfix columns-1">
                                                             <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                    <div class="item-inner">
                                                                        <div class="featured clearfix">
                                                                        <a title="টস জিতে ফিল্ডিংয়ে বাংলাদেশ" data-src="{{url('/images/'.$cat_main_sport->image)}}" class="img-holder" href="{{url('/singlepost/'.$cat_main_sport->postid)}}"></a>
                                                                                                                                                </div>
                                                                        <h2 class="title"> <a href="{{url('/singlepost/'.$cat_main_sport->postid)}}">{{$cat_main_sport->title}}</a></h2>
                                                                                                                                            </div>
                                                                </article>
                                                          
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="row-2">
                                                            <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                      
                                                               <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                        <div class="item-inner">
                                                                        <h2 class="title"> <a href="{{url('/singlepost/'.$cat_main_sport->postid)}}" class="post-title post-url font-bold">{{$cat_main_sport->title}}</a></h2>
                                                                                                                                    </div>
                                                                </article>

                                                                <div style="width:114%; clear:both; margin:-5px 0px 8px -20px; border-bottom: 1px solid #e51939"></div>
                                                                                                                  
                                                                   </div>
                                                        </div>
                                                        @endif
                                                        @endforeach 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                        <div class="bs-vc-wrapper wpb_wrapper">
                                            <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                <h3 class="section-heading sh-t3 sh-s1 main-term-12 sidebar_title"> <a href="categoryad77.html?cat=%e0%a6%ac%e0%a6%bf%e0%a6%a8%e0%a7%8b%e0%a6%a6%e0%a6%a8" class="main-link"> <span class="h-text main-term-12 text-white">বিনোদন</span> </a></h3>
                                                <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                    @foreach ($entertainment_cat_main as $cat_main_entertainment)
                                                    @if($loop->index == 0)
                                                        <div class="row-1">
                                                            <div class="listing listing-grid-1 clearfix columns-1">
                                                            <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                    <div class="item-inner">
                                                                        <div class="featured clearfix">
                                                                        <a title="অফিসার রিটার্নস ছবির শুটিং নভেম্বরে" data-src="{{url('/images/'.$cat_main_entertainment->image)}}" class="img-holder" href="{{url('/singlepsot/'.$cat_main_entertainment->postid)}}"></a>
                                                                        </div>
                                                                    <h2 class="title"> <a href="{{url('/singlepsot/'.$cat_main_entertainment->postid)}}">{{$cat_main_entertainment->title}} </a></h2>
                                                                    </div>
                                                                </article>
                                                           </div>
                                                        </div>
                                                        @else
                                                        <div class="row-2">
                                                            <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                             <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                        <div class="item-inner">
                                                                        <h2 class="title"> <a href="{{url('/singlepsot/'.$cat_main_entertainment->postid)}}" class="post-title post-url font-bold">{{$cat_main_entertainment->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                   <div style="width:114%; clear:both; margin:-5px 0px 8px -20px; border-bottom: 1px solid #e51939"></div>
                                                             </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3">
                                        <div class="bs-vc-wrapper wpb_wrapper">
                                            <div class=" bs-listing bs-listing-listing-mix-3-3 bs-listing-single-tab ">
                                                <h3 class="section-heading sh-t3 sh-s1 main-term-12 sidebar_title"> <a href="categoryc162.html?cat=%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%ab%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%87%e0%a6%b2" class="main-link"> <span class="h-text main-term-12 text-white">লাইফস্টাইল</span> </a></h3>
                                                <div class="listing listing-mix-3-3 clearfix l-1-col">
                                                    <div class="item-inner">
                                                            @foreach ($lifestyle_cat_main as $cat_main_lifestyle)
                                                            @if($loop->index == 0)
                                                        <div class="row-1">
                                                            <div class="listing listing-grid-1 clearfix columns-1">
                                                                <article class="post-558 type-post format-standard has-post-thumbnail   listing-item listing-item-grid listing-item-grid-1 main-term-12">
                                                                    <div class="item-inner">
                                                                        <div class="featured clearfix">
                                                                        <a title="ধূমপান ত্যাগ করতে চাইলে করণীয়" data-src="{{'/images/'.$cat_main_lifestyle->image}}" class="img-holder" href="{{url('/singlepsot/'.$cat_main_lifestyle->postid)}}"></a>
                                                                        </div>
                                                                    <h2 class="title"> <a href="{{url('/singlepsot/'.$cat_main_lifestyle->postid)}}">{{$cat_main_lifestyle->title}} </a></h2>
                                                                    </div>
                                                                </article>
                                                             
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="row-2">
                                                            <div class="listing listing-text listing-text-2 clearfix columns-2">
                                                                <article class="post-555 type-post format-standard has-post-thumbnail   listing-item listing-item-text listing-item-text-2 main-term-12">
                                                                        <div class="item-inner">
                                                                        <h2 class="title"> <a href="{{url('/singlepsot/'.$cat_main_lifestyle->postid)}}" class="post-title post-url font-bold">{{$cat_main_lifestyle->title}} </a></h2>
                                                                        </div>
                                                                    </article>
                                                                  <div style="width:114%; clear:both; margin:-5px 0px 8px -20px; border-bottom: 1px solid #e51939"></div>
                                                             </div>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row vc_row wpb_row vc_row-fluid">
                            <div class=" bs-listing bs-listing-listing-mix-1-3 bs-listing-single-tab">
                                <div class="callout callout-red mb-4">
                                    <div class="callout-container">
                                        <span class="callout-shape">
                                            <a class="callout-link" href="category.html">কন্ট্রিবিউটর</a>
                                        </span>
                                    </div>
                                </div>
                                <div class="listing listing-mix-6 clearfix ">
                                    <div class="item-inner">
                                        <div class="row-1">
                                            @foreach($contributors as $contributor)
                                            <div class="col-md-3">
                                                <div class="contribute">
                                                    <a href="" >
                                                    <img src="{{url('/contributorimage/'.$contributor->image)}}" name="aboutme" width="140" height="140" class="img-circle"></a>

                                                    <h4 class="text-danger">।।{{$contributor->name}} ।।</h4>
                                                    <em></em>
                                                    <p><a href="detail.html?data=1892&amp;cat=%e0%a6%95%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a6%ac%e0%a6%bf%e0%a6%89%e0%a6%9f%e0%a6%b0" class="text-danger">{{$contributor->designation}}</a></p>
                                                </div>
                                            </div>
                                            @endforeach
                                         
{{--                                             
                                            <div class="col-md-3">
                                                <div class="contribute">
<a href="detail.html?data=1761&amp;cat=%e0%a6%95%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a6%ac%e0%a6%bf%e0%a6%89%e0%a6%9f%e0%a6%b0" >
<img src="home_source/15387535042042676021op.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>

<h4 class="text-danger">শাওন রহমান</h4>
<em></em>
<p><a href="detail.html?data=1761&amp;cat=%e0%a6%95%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a6%ac%e0%a6%bf%e0%a6%89%e0%a6%9f%e0%a6%b0" class="text-danger">ফেসবুক বইয়ের নেশা কেড়ে নিয়েছে</a></p>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </main>
  @include('frontpart.include.footer')

