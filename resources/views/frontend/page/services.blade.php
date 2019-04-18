@extends('layouts.frontend')

@section('title', 'Our services page')

@section('content')
    <main class="site-main">
        <div class="page-header blog-bg-image" style="">
            <div class="container">
                <h2 class="page-header-title">Our services</h2>
                <p class="page-header-desc">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div>
        </div>

        <section class="section-wrapper our-services-wrapper">
            <div class="container">
                <div class="swiper-gallery">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/1/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10/)"></div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/1/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9/)"></div>
                            <div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10/)"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
