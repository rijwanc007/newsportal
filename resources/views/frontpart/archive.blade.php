@extends('category_master')

@section('cat_content')
    <style>

    </style>
<div class="rh-header clearfix light deferred-block-exclude">
        <div class="rh-container clearfix">
            <div class="menu-container close"> <span class="menu-handler"><span class="lines"></span></span>
            </div>
            <div class="logo-container">
                <a href="index.html" itemprop="url" rel="home"> <img src="img/footer-logo.png" alt="Ekattor Tribune" /> </a>
            </div>
        </div>
    </div>
<div class="bs-shortcode bs-social-share  style-button colored inner_bg">
    <h3 class="section-heading sh-t2 sh-s1 text-center"> <span class="h-text">আর্কাইভ</span></h3>
</div>
<div class="content-wrap">
    <main id="content" class="content-container">
        <div class="container layout-2-col layout-2-col-1 layout-right-sidebar layout-bc-before">
            <div class="row main-section">
                <div class="col-sm-8 content-column">
                    
                    <section class="archive-title category-title with-actions with-terms">
                        <div class="pre-title"><span>আর্কাইভ</span></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">                                    
                                    <div class='input-group date'>
                                        <input type='text' class="form-control" id="dpicker" placeholder="তারিখ নির্বাচন করুন" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">                                    
                                    <button type="submit" class="btn btn-block btn-info">খুঁজুন</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="listing listing-blog listing-blog-5 clearfix ">

                        @foreach ($datewisefilter as $post)
                            
                        
                                <article class="post-441 type-post format-video has-post-thumbnail   listing-item listing-item-blog  listing-item-blog-5 main-term-8 bsw-7 ">
                            <div class="item-inner clearfix">
                                <h2 class="title"> <a href="{{url('/singlepost/'.$post->id)}}" class="post-title post-url">{{$post->title}}</a></h2>
                            </div>
                        </article>
                       @endforeach                       
                       
                       {{-- <div class="bs-pagination bs-simple-pagination simple_numbered main-term-none clearfix">
                            <div class="pagination bs-numbered-pagination"> --}}

                                {!! $datewisefilter->appends(Illuminate\Support\Facades\Input::except('page'))->links() !!}
                             {{--  <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <span class="page-numbers dots">…</span> <a class="page-numbers" href="#">17</a>
                                <a class="next page-numbers" href="#">Next <i class="fa fa-angle-right"></i></a>  --}}
                            {{-- </div> 
                        </div> --}}
                     
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
                @foreach ($la_news as $last_item)
                    
                
                    <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                        <div class="item-inner clearfix">
                            <div class="featured">
                            <a data-src="{{url('/images/'.$last_item->image)}}" class="img-holder" href="{{url('/singlepost/'.$last_item->id)}}"></a>
                                                        </div>
                                                        <p class="title">
                            <a class="post-url" href="{{url('/singlepost/'.$last_item->id)}}">
                            <span class="post-title">{{$last_item->title}}
                            </span>
                            </a>
                            </p>
                        </div>
                    </div>
                   
                    @endforeach
            </div>
            <div id="selected" class="tab-pane">
                @foreach ($show_popular as $popular_item)
                    
              
                    <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                        <div class="item-inner clearfix">
                            <div class="featured">
                            <a title="দাদার জন্য পথসভা " data-src="{{url('/images/'.$popular_item->image)}}" class="img-holder" href="{{url('/singlepost/'.$popular_item->id)}}"></a>
                            </div>
                            <p class="title">
                            <a class="post-url" href="{{url('/singlepost/'.$popular_item->id)}}" title="দাদার জন্য পথসভা "> <span class="post-title">{{$popular_item->title}}</span> </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
            </div>
            <div id="others" class="tab-pane">
                @foreach ($sp_news as $item_sp)
                    
               
                    <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                        <div class="item-inner clearfix">
                            <div class="featured">
                                <a title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল" data-src="{{url('/images/'.$item_sp->image)}}" class="img-holder" href="{{url('/singlepost/'.$item_sp->id)}}"></a>
                                                            </div>
                                                            <p class="title">
                                <a class="post-url" href="{{url('/singlepost/'.$item_sp->id)}}" title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল"> <span class="post-title"> {{$item_sp->title}} </span> </a>
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
</div>                </div>
        </div>
    </main>
    
</div>
@endsection