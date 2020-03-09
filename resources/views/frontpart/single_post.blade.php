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
<div class="bs-shortcode bs-social-share  style-button colored inner_bgs" style="background-image:url({{asset('frontend/home_source/153984544823.jpg')}});">
<h3 class="section-heading sh-t2 sh-s1 text-center"> <span class="h-text">{{$post_by_id->category_name}}</span></h3>
</div>
<main id="content" class="content-container">
        <div class="container layout-2-col layout-2-col-1 layout-right-sidebar layout-bc-before post-template-1">
            <div class="row main-section">
                <div class="col-sm-8 content-column">
                    <div class="single-container">
                        <section class="post-author clearfix">
                        <span class="post-author-avatar" itemprop="image"><img alt="" class="avatar details-icon" src="{{asset('frontend/img/icon.png')}}"></span>
                            <div class="author-title heading-typo"> <a class="post-author-url" href="#"><span class="post-author-name"><i class="fa fa-pencil-square-o"></i> ।। নিজস্ব প্রতিবেদক ।।</span></a></div>
                            <!-- <div class="author-links">
                            </div> -->
                            <div class="post-author-bio" itemprop="description">
                                <p><i class="fa fa fa-clock-o text-danger"></i> ২০১৮-১০-২৮ ১১:১২:২৩</p>
                            </div>
                            <div id="share"></div>
                        </section>
                        <article id="post-450" class="post single-post-content">
                            <div class="post-header post-tp-1-header">
                            <h1 class="single-post-title"> <span class="post-title" itemprop="headline">{{$post_by_id->title}}</span></h1>
                                   <h4 style="color:red; font-size:14px"></h4>
                                <div class="single-featured">
                                <a class="post-thumbnail open-lightbox" href="" rel="prettyPhoto">
									<img alt="" src="{{url('/images/'.$post_by_id->image)}}" class="b-loaded"> </a>
                                </div>
								


                            </div>
                            <div class="post-share single-post-share top-share clearfix style-9">
                            <div class="entry-content clearfix single-post-content">
                             <p>{!!$post_by_id->description!!}</p>

                            </div>
                            <!--<div class="entry-terms post-tags clearfix"> 
                                <span class="terms-label"><i class="fa fa-tags"></i></span> 
                                <a href="category.php" rel="tag">Management</a>
                                <a href="category.php" rel="tag">Oprah</a>
                                <a href="category.php" rel="tag">Washington</a>
                                <a href="category.php" rel="tag">Womans</a>
                                <a href="category.php" rel="tag">World</a></div>--->
								
                        </article>                        
                    </div>        
                    <div class="fb-comments" data-href="{{url('/singlepost/'.$post_by_id->id)}}}" data-numposts="10"></div>            
                    {{-- <section id="comments-template-450" class="comments-template">
                        <div id="respond" class="comment-respond">
                            <p id="reply-title" class="comment-reply-title"></p>
                            <div class="section-heading sh-t3 sh-s1"><span class="h-text">মন্তব্য</span></div>
                            <p></p>

<form action="#" method="post" id="commentform" class="comment-form" novalidate="">

<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label>
<input id="email" name="email" type="text" value="" size="30" aria-describedby="email-notes" aria-required='true' required/></p>

<p class="comment-form-author">
<label for="author">Password <span class="required">*</span></label>
<input id="author" name="password" type="password" value="" size="30" aria-required='true' required/></p>
                                <div class="note-before">
                                    <p>আপনার ইমেইল প্রচার করা হবে না.</p>
                                </div>
                                <p class="comment-wrap">
<textarea name="comment" class="comment" id="comment" cols="45" rows="10" aria-required="true" placeholder="আপনার মন্তব্য"></textarea>
                                </p>
                                <p class="form-submit">
<input name="submit" type="submit" id="comment-submit" class="comment-submit" value="মন্তব্য করুন">
<input type='hidden' name='comment_post_ID' value='111' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
<input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="04261cee1c" />
<input type="hidden" id="ak_js" name="ak_js" value="248"/>
                                </p>

                            </form>

                        </div>
						
						
						<div class="clear"></div>
<!-- comment -->  
<div id="comments" class="comments-area">
<div id="respond" class="comment-respond">
<h3 id="reply-title" class="comment-reply-title"  style="padding-top:20px">All Replys <small><a rel="nofollow" id="cancel-comment-reply-link" href="theme/saladmag/trip-at-night-time-for-capture-blue-sky/index.html#respond" style="display:none;">Cancel reply</a></small></h3>
</div><!-- #respond -->
</div><!-- #comments .comments-area --> 

                    </section> --}}
                    <div class="post-related">
                        <div class="section-heading sh-t3 sh-s1 multi-tab bs-pretty-tabs bs-pretty-tabs-initialized">
                            <div class="bs-pretty-tabs-container" style="display: none;"><a href="#" class="bs-pretty-tabs-more other-link"><span class="h-text">All <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                <div class="bs-pretty-tabs-elements"></div>
                            </div>
                            <a href="#relatedposts_1692639512_1" class="main-link active" data-toggle="tab"> <span class="h-text related-posts-heading">সংশ্লিষ্ট খবর</span> </a>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane bs-tab-anim bs-tab-animated active">
                                <div class="bs-pagination-wrapper main-term-none next_prev ">
                                    <div class="listing listing-thumbnail listing-tb-2 clearfix  scolumns-3 simple-grid include-last-mobile">
                                      
                                     @foreach ($related_news as $news_related)
                                         
                                     <div class="post-666 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-2 main-term-8">
                                            <div class="item-inner clearfix">
                                                <div class="featured">
                                                <div class="term-badges floated"><span class="term-badge term-8"><a href="#">{{$news_related->category_name}}</a></span></div>
                                                    <a title="আপনার আজকের দিনটি কেমন যাবে দেখে নিন" class="img-holder b-loaded" href="" style="background-image: url({{url('/images/'.$news_related->image)}});"></a>
                                                    </div>
                                                    <p class="title">
                                                    <a class="post-url" href="{{url('/singlepost/'.$news_related->postid)}}" title="আপনার আজকের দিনটি কেমন যাবে দেখে নিন"> <span class="post-title">{{$news_related->title}} </span> </a>
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                </div>
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
                        @foreach ($la_news as $news_last)
                        <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                                <div class="item-inner clearfix">
                                    <div class="featured">
                                    <a data-src="{{url('/images/'.$news_last->image)}}" class="img-holder" href="{{url('/singlepost/'.$news_last->postid)}}"></a>
                                       </div>
                                        <p class="title">
                                    <a class="post-url" href="{{url('/singlepost/'.$news_last->postid)}}">
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
                                      <a title="ডিএমপির উপ-পুলিশ কমিশনার ইব্রাহীম খানের জন্মদিন আজ" data-src="{{url('/images/'.$item_popular->image)}}" class="img-holder" href="{{url('/singlepost/'.$item_popular->id)}}"></a>
                                    </div>
                                    <p class="title">
                                    <a class="post-url" href="{{url('/singlepost/'.$item_popular->id)}}" title="ডিএমপির উপ-পুলিশ কমিশনার ইব্রাহীম খানের জন্মদিন আজ"> <span class="post-title">{{$item_popular->title}}</span> </a>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <div id="others" class="tab-pane">
                        @foreach ($sp_news as $news_special)
                            <div class="post-450 type-post format-standard has-post-thumbnail   listing-item listing-item-thumbnail listing-item-tb-3 main-term-8">
                                <div class="item-inner clearfix">
                                    <div class="featured">
                                    <a title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল" data-src="{{url('/images/'.$news_special->image)}}" class="img-holder" href="{{url('/singlepost/'.$news_special->postid)}}"></a>
                                    </div>
                                    <p class="title">
                                    <a class="post-url" href="{{url('/singlepost/'.$news_special->postid)}}" title="কুড়িয়ে পাওয়া টাকা মালিকের কাছে ফেরত দিল"> <span class="post-title">{{$news_special->title}}</span> </a>
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