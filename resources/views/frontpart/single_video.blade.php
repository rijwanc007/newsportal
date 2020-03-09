@extends('single_post_master')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1099760786853742&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<main id="content" class="content-container">
        <div class="container layout-2-col layout-2-col-1 layout-right-sidebar layout-bc-before post-template-1">
            <div class="row main-section">
                <div class="col-sm-8 content-column">
                    <div class="single-container">
                        <section class="post-author clearfix">  
                            <div class="author-title heading-typo"> <a class="post-author-url" href="#"><span class="post-author-name"></span></a></div>
                            <!-- <div class="author-links">
                            </div> -->
                            <div class="post-author-bio" itemprop="description">
                            <p>{{$videoByid->created_at}}</p>
                            </div>
                            <div id="share"></div>
                        </section>
                        <article id="post-450" class="post-450 post type-post status-publish format-standard has-post-thumbnail  category-politics tag-photography tag-news tag-fashion tag-sport tag-business single-post-content has-thumbnail">
                            <div class="post-header post-tp-1-header">
                            <h1 class="single-post-title"> <span class="post-title" itemprop="headline">{{$videoByid->title}}}</span></h1>
                                <div class="single-featured">
                                <iframe width="560" height="315" src="{{$videoByid->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="post-share single-post-share top-share clearfix style-9">
                            <div class="entry-content clearfix single-post-content">
                      <p>{!!$videoByid->description!!}</p>
                            </div>
                
                        </article>
                    </div>
                    <div class="fb-comments" data-href="{{url('/video/'.$videoByid->id)}}}" data-numposts="10"></div> 
                    {{-- <section id="comments-template-450" class="comments-template">
                        <div id="respond" class="comment-respond">
                            <p id="reply-title" class="comment-reply-title"></p>
                            <div class="section-heading sh-t3 sh-s1"><span class="h-text">Leave A Reply</span></div>
                            <p></p>
                            <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                <div class="note-before">
                                    <p>Your email address will not be published.</p>
                                </div>
                                <p class="comment-wrap">
                                    <textarea name="comment" class="comment" id="comment" cols="45" rows="10" aria-required="true" placeholder="Your Comment"></textarea>
                                </p>
                                <p class="author-wrap">
                                    <input name="author" class="author" id="author" type="text" value="" size="45" aria-required="true" placeholder="Your Name *">
                                </p>
                                <p class="email-wrap">
                                    <input name="email" class="email" id="email" type="text" value="" size="45" aria-required="true" placeholder="Your Email *">
                                </p>
                                <p class="url-wrap">
                                    <input name="url" class="url" id="url" type="text" value="" size="45" placeholder="Your Website">
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="comment-submit" class="comment-submit" value="Post Comment">
                                    <input type="hidden" name="comment_post_ID" value="450" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                                <p style="display: none;">
                                    <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="dd95e1cb7b">
                                </p>
                                <p style="display: none;"></p>
                                <input type="hidden" id="ak_js" name="ak_js" value="1519539787502">
                            </form>
                        </div>
                    </section> --}}
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

