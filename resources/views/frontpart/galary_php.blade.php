@extends('category_master')
@section('cat_content')
<main id="content" class="content-container">
        <div class="container layout-2-col layout-2-col-1 layout-right-sidebar layout-bc-before post-template-1">
            <div class="row main-section">
                <div class="col-sm-8 content-column">
                    <div class="single-container">
                        <section class="post-author clearfix">  
                            <div class="author-title heading-typo"> <a class="post-author-url" href="#"><span class="post-author-name">31 Dec, 1969 18:00:00</span></a></div>
                            <!-- <div class="author-links">
                            </div> -->
                            <div class="post-author-bio" itemprop="description">
                                <p></p>
                            </div>
                            <div id="share"></div>
                        </section>
						<article id="post-450" class="post-450 post type-post status-publish format-standard has-post-thumbnail  category-politics tag-photography tag-news tag-fashion tag-sport tag-business single-post-content has-thumbnail">
                            <div class="post-header post-tp-1-header">
                                <div class="single-featured">
<a class="post-thumbnail open-lightbox" href="stores/index.html" rel="prettyPhoto"><img alt="" src="stores/index.html" class="b-loaded"> </a>
                                </div>
                            </div>
                            <div class="post-share single-post-share top-share clearfix style-9">
                            <div class="entry-content clearfix single-post-content">
                                                           </div>
                            <div class="inline-share">
                                <span class="share">Share:</span>
                              </div>
                        </article>
<article id="post-450" class="post-450 post type-post status-publish format-standard has-post-thumbnail  category-politics tag-photography tag-news tag-fashion tag-sport tag-business single-post-content has-thumbnail">
                            <div class="post-header post-tp-1-header">
                                <div class="single-featured">
                                <a class="post-thumbnail open-lightbox" href="" rel="prettyPhoto"><img alt="" src="{{url('/images/'.$galary_unique->image)}}" class="b-loaded"> </a>
                                </div>
                            </div>
                            <div class="post-share single-post-share top-share clearfix style-9">
                            <div class="entry-content clearfix single-post-content">
                                    {{$galary_unique->title}}</div>
                            <div class="inline-share">
                                <span class="share">Share:</span>
                              </div>
                </article>
                     
                @foreach($picture_galary_page as $page_galary_pic)
                    <?php if($galary_unique->id != $page_galary_pic->postid) { ?> 	
                      <article id="post-450" class="post-450 post type-post status-publish format-standard has-post-thumbnail  category-politics tag-photography tag-news tag-fashion tag-sport tag-business single-post-content has-thumbnail">
                            <div class="post-header post-tp-1-header">
                                <div class="single-featured">
                                <a class="post-thumbnail open-lightbox" href="stores/1539411623657930991gl.jpg" rel="prettyPhoto"><img alt="" src="{{url('/images/'.$page_galary_pic->image)}}" class="b-loaded"> </a>
                                </div>
                            </div>
                            <div class="post-share single-post-share top-share clearfix style-9">
                            <div class="entry-content clearfix single-post-content">
                              {{$page_galary_pic->title}} </div>
                            <div class="inline-share">
                                <span class="share">Share:</span>
                              </div>
                        </article>
                    <?php } ?>
                       @endforeach

                    </div>
                  
                </div>
                <div class="wpb_column bs-vc-column vc_column_container vc_col-sm-3 sticky-column bs-vc-sidebar-column bf-3-primary-column-size">
    <div class="bs-vc-wrapper wpb_wrapper">
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <div id="bsac-47-1396570055" class="bsac-container bsac-type-image " itemscope="" itemtype="https://schema.org/WPAdBlock" data-adid="47" data-type="image">
                <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/side.gif" alt="- Advertisement -" /></a>
                <p class="bsac-caption">- Advertisement -</p>
            </div>
        </div>
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <div class="fb-page" 
              data-href="https://www.facebook.com/ekattortribune"
              data-width="380" 
              data-hide-cover="false"
              data-show-facepile="false">
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
                    
                    @foreach($la_news as $newslast)
                        <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                            <div class="item-inner clearfix">
                                <div class="featured">
                                <a data-src="{{url('/images/'.$newslast->image)}}" class="img-holder" href="{{url('singlepost/'.$newslast->postid)}}"></a>
                                   </div>
                                    <p class="title">
                                <a class="post-url" href="{{url('singlepost/'.$newslast->postid)}}">
                                <span class="post-title">
                                {{$newslast->title}}</span>
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
                                <a title="দাদার জন্য পথসভা " data-src="{{url('/images/'.$item_popular->image)}}" class="img-holder" href="{{url('/singlepost/'.$item_popular->image)}}"></a>
                                                                </div>
                                                                <p class="title">
                                <a class="post-url" href="{{url('/singlepost/'.$item_popular->id)}}" title="দাদার জন্য পথসভা "> <span class="post-title"> {{$item_popular->title}}  </span> </a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                        
                </div>
                <div id="others" class="tab-pane">
                    @foreach($sp_news as $news_sp)
                        <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                            <div class="item-inner clearfix">
                                <div class="featured">
                                <a title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল" data-src="{{url('/images/'.$news_sp->image)}}" class="img-holder" href="{{url('singlepost/'.$news_sp->postid)}}"></a>
                                                                </div>
                                                                <p class="title">
                                <a class="post-url" href="{{url('singlepost/'.$news_sp->postid)}}" title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল"> <span class="post-title">{{$news_sp->title}} </span> </a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bsac bsac-clearfix  bsac-align-center bsac-column-1">
            <div id="bsac-47-1396570055" class="bsac-container bsac-type-image " itemscope="" itemtype="https://schema.org/WPAdBlock" data-adid="47" data-type="image">
                <a itemprop="url" class="bsac-link" href="#" target="_blank"><img class="bsac-image" src="img/ads/side-long.jpg" alt="- Advertisement -" /></a>
                <p class="bsac-caption">- Advertisement -</p>
            </div>
        </div>
    </div>
</div>            </div>
        </div>
    </main>
@endsection