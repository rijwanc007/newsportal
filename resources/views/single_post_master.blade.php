@include('frontpart.include.head')

<body class="post-template-default single single-post postid-450 single-format-standard active-light-box ltr close-rh page-layout-2-col-right full-width active-sticky-sidebar main-menu-sticky-smart active-ajax-search single-prim-cat-8 single-cat-8  wpb-js-composer js-comp-ver-5.4.5 vc_responsive bs-ll-a" dir="ltr">
    <div class="main-wrap content-main-wrap">
            @include('frontpart.include.header')
        <div class="rh-header clearfix light deferred-block-exclude">
            <div class="rh-container clearfix">
                <div class="menu-container close"> <span class="menu-handler"><span class="lines"></span></span>
                </div>
                <div class="logo-container">
                    <a href="index.html" itemprop="url" rel="home"> <img src="img/footer-logo.png" alt="Ekattor Tribune" /> </a>
                </div>
            </div>
        </div>

     @section('content')
     @show
    @include('frontpart.include.footer')
</div> <span class="back-top"><i class="fa fa-arrow-up"></i></span>
