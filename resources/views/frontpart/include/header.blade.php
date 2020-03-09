<?php
use App\Category;
?>
<header id="header" class="site-header header-style-1 full-width">
        <section class="topbar topbar-style-1 hidden-xs hidden-xs use-pretty-tabs">
            <div class="content-wrap">
                <div class="container">
                    <div class="topbar-inner clearfix">
                        <div class="section-links">
                            <div class="better-studio-shortcode bsc-clearfix better-social-counter style-button not-colored in-4-col">
                                <ul class="social-list bsc-clearfix">
                                    <li class="social-item facebook"><a href="https://www.facebook.com/ekattortribune/" target="_blank"><i class="item-icon fa fa-facebook"></i><span class="item-title">Likes</span></a></li>
                                    <li class="social-item twitter"><a href="https://twitter.com/ekattortribune" target="_blank"><i class="item-icon fa fa-twitter twitter_bg"></i><span class="item-title">Followers</span></a></li>
                                    <li class="social-item google"><a href="#" target="_blank"><i class="item-icon fa fa-google google_bg"></i><span class="item-title">Followers</span></a></li>
                                    <li class="social-item rss"><a href="#" target="_blank"><i class="item-icon fa fa-rss feed_bg"></i><span class="item-title">Subscribe</span></a></li>
                                    
                                    <div class="dropdown">
                                      <button class="dropbtn"><i class="fa fa-user"></i></button>
                                      <div class="dropdown-content">
                                        <a href="login.html">লগইন</a>
                                        <a href="register.html">রেজিস্টার</a>
                                      </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="section-menu">
                            <div id="menu-top" class="menu top-menu-wrapper" role="navigation">
                                <nav class="top-menu-container">
                                    <ul id="top-navigation" class="top-menu menu clearfix bsm-initialized bs-pretty-tabs bs-pretty-tabs-initialized">
<li id="topbar-date" class="menu-item menu-item-date">
<span class="topbar-date">
<div class="clock">
<div id="Date">
<i class="item-icon fa fa-calendar"></i> 
<script type="text/javascript" src="http://bangladate.appspot.com/index3.php">	</script>, 
<script type="text/javascript" src="http://english-date.appspot.com/index2.php"></script>
</div>
</div>
</span></li>
                                       <!--  <li id="menu-item-648" class="menu-item menu-item-type-post_type menu-item-object-page better-anim-fade menu-item-648"><a href="register.php" class="header_menu">Register</a></li>
                                        <li id="menu-item-607" class="menu-item menu-item-type-custom menu-item-object-custom better-anim-fade menu-item-607"><a href="login.php" class="header_menu">Login</a></li> -->
                                        <li class="bs-pretty-tabs-container" style="display: none;"><a href="#" class="bs-pretty-tabs-more">অন্যান্য <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="bs-pretty-tabs-elements sub-menu"></ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="header-inner">
            <div class="content-wrap">
                <div class="container">
                    <div id="site-branding" class="site-branding">
                        <p id="site-title" class="logo h1 img-logo">
                        <a href="index.html" itemprop="url" rel="home"> <img id="site-logo" src="{{asset('frontend/img/logo.png')}}"><span class="site-title">Ekattor Tribune</span> </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bs-pinning-wrapper bspw-header-style-1" style="height: 44px;">
            <div id="menu-main" class="menu main-menu-wrapper show-search-item menu-actions-btn-width-1 bs-pinning-block smart normal unpinned-no-transition" role="navigation" >
                <div class="main-menu-inner">
                    <div class="content-wrap">
                        <div class="container">
                            <nav class="main-menu-container bs-pretty-tabs bs-pretty-tabs-initialized">
                                <ul id="main-navigation" class="main-menu menu clearfix bsm-initialized">

                                    <?php
                                    $highlight_cats = Category::where('status','=',1)->take(10)->get();
                                    $nothighlight_cats = Category::where('status','=',2)->get();
                                    ?>
                                    @foreach($highlight_cats as $highliht_cat)
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
                                    <a href="{{url('categorypost/'.$highliht_cat->id)}}">{{$highliht_cat->category_name}}</a>
                                      </li>
                                    @endforeach
                                     
                                    {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="rajnity.html?cat=%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf">রাজনীতি</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="orthonity.html?cat=%e0%a6%85%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a6%a8%e0%a7%80%e0%a6%a4%e0%a6%bf">অর্থনীতি</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="antorjatik.html?cat=%e0%a6%86%e0%a6%a8%e0%a7%8d%e0%a6%a4%e0%a6%b0%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%a4%e0%a6%bf%e0%a6%95">আন্তর্জাতিক</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="motamot.html?cat=%e0%a6%ae%e0%a6%a4%e0%a6%be%e0%a6%ae%e0%a6%a4">মতামত</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="khaladula.html?cat=%e0%a6%96%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%a7%e0%a7%82%e0%a6%b2%e0%a6%be">খেলাধূলা</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="binodon.html?cat=%e0%a6%ac%e0%a6%bf%e0%a6%a8%e0%a7%8b%e0%a6%a6%e0%a6%a8">বিনোদন</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="lifestyle.html?cat=%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%ab%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%87%e0%a6%b2">লাইফস্টাইল</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="chobi.html?cat=%e0%a6%9b%e0%a6%ac%e0%a6%bf">ছবি</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="video.html?cat=%e0%a6%ad%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a6%93">ভিডিও</a>
                                    </li> --}}
                                    @foreach($nothighlight_cats as $nothighlight_cat)
                                    
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
                                    <a href="{{url('category-post/'.$nothighlight_cat->id)}}">{{$nothighlight_cat->category_name}}</a>
                                    </li>
                                    @endforeach
                                    {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="contributor.html?cat=%e0%a6%95%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a6%ac%e0%a6%bf%e0%a6%89%e0%a6%9f%e0%a6%b0">কন্ট্রিবিউটর</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="bishesh-protibedon.html?cat=%e0%a6%ac%e0%a6%bf%e0%a6%b6%e0%a7%87%e0%a6%b7%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%ac%e0%a7%87%e0%a6%a6%e0%a6%a8">বিশেষ প্রতিবেদন</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="tukro-khobor.html?cat=%e0%a6%9f%e0%a7%81%e0%a6%95%e0%a6%b0%e0%a7%8b%20%e0%a6%96%e0%a6%ac%e0%a6%b0">টুকরো খবর</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="rashifol.html?cat=%e0%a6%b0%e0%a6%be%e0%a6%b6%e0%a6%bf%e0%a6%ab%e0%a6%b2">রাশিফল</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="chakri.html?cat=%e0%a6%9a%e0%a6%be%e0%a6%95%e0%a6%b0%e0%a6%bf%e0%a6%b0%20%e0%a6%96%e0%a6%ac%e0%a6%b0">চাকরির খবর</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="campus.html?cat=%e0%a6%95%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%ae%e0%a7%8d%e0%a6%aa%e0%a6%be%e0%a6%b8">ক্যাম্পাস</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="shikkha.html?cat=%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be">শিক্ষা</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="probash.html?cat=%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%ac%e0%a6%be%e0%a6%b8">প্রবাস</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home better-anim-fade">
<a href="gono-madhom.html?cat=%e0%a6%97%e0%a6%a3%e0%a6%ae%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%ae">গণমাধ্যম</a>
                                    </li> --}}
<li class="bs-pretty-tabs-container menu-item-has-children better-anim-fade"><a href="#" class="bs-pretty-tabs-more">আরও</a>
<ul class="sub-menu bs-pretty-tabs-elements"></ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>