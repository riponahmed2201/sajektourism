<x-layouts.frontend-layout>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-8">
                    <!-- block content -->
                    <div class="block-content">

                        <!-- grid box -->
                        <div class="grid-box">
                            <div class="image-slider">
                                <ul class="bxslider">
                                    @foreach ($resorts as $resort)
                                        <li>
                                            <div class="news-post image-post">
                                                <img style="width: 653px; height:478px"
                                                    src="{{ asset('uploads/resorts/' . $resort->thumbnail) }}"
                                                    alt="{{ $resort->title }}">
                                                <div class="hover-box">
                                                    <span class="top-stories">TOP RESORT</span>
                                                    <div class="inner-hover">
                                                        <a class="category-post tech" href="">
                                                            {{ $resort->title }}
                                                        </a>
                                                        <h2><a href="">
                                                                {{ $resort->short_description }}
                                                            </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>{{ date('d M Y') }}</li>
                                                            {{-- <li><i class="fa fa-user"></i>by <a href="#">John
                                                                    Doe</a></li> --}}
                                                            <li><i class="fa fa-eye"></i>872</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End grid box -->

                        <!-- grid box -->
                        <div class="grid-box">

                            <div class="title-section">
                                <h1><span>Today's Featured</span></h1>
                            </div>

                            <div class="image-post-slider">
                                <ul class="bxslider">
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="assets/frontend/upload/news-posts/slide1a.jpg" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <a class="category-post world" href="world.html">business</a>
                                                        <h2><a href="single-post.html">Pellentesque odio nisi,
                                                                euismod in, pharetra a, ultricies in, diam. Sed
                                                                arcu. Cras consequat.</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            <li><i class="fa fa-user"></i>by <a href="#">John
                                                                    Doe</a></li>
                                                            <li><a href="#"><i
                                                                        class="fa fa-comments-o"></i><span>23</span></a>
                                                            </li>
                                                            <li><i class="fa fa-eye"></i>872</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="assets/frontend/upload/news-posts/slide2a.jpg" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <a class="category-post travel" href="travel.html">travel</a>
                                                        <h2><a href="single-post.html">Pellentesque odio nisi,
                                                                euismod in, pharetra a, ultricies in, diam. Sed
                                                                arcu. Cras consequat.</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            <li><i class="fa fa-user"></i>by <a href="#">John
                                                                    Doe</a></li>
                                                            <li><a href="#"><i
                                                                        class="fa fa-comments-o"></i><span>23</span></a>
                                                            </li>
                                                            <li><i class="fa fa-eye"></i>872</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="assets/frontend/upload/news-posts/slide3a.jpg" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <a class="category-post fashion" href="fashion.html">fashion</a>
                                                        <h2><a href="single-post.html">Pellentesque odio nisi,
                                                                euismod in, pharetra a, ultricies in, diam. </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            <li><i class="fa fa-user"></i>by <a href="#">John
                                                                    Doe</a></li>
                                                            <li><a href="#"><i
                                                                        class="fa fa-comments-o"></i><span>23</span></a>
                                                            </li>
                                                            <li><i class="fa fa-eye"></i>872</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-posts">
                                        <li>
                                            <img src="assets/frontend/upload/news-posts/list1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/list2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/list3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="list-posts">
                                        <li>
                                            <img src="assets/frontend/upload/news-posts/list4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/list5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/list6.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="center-button">
                                <a href="#"><i class="fa fa-refresh"></i> More from featured</a>
                            </div>

                        </div>
                        <!-- End grid box -->

                        <!-- carousel box -->
                        <div class="carousel-box owl-wrapper">

                            <div class="title-section">
                                <h1><span>Popular</span></h1>
                            </div>

                            <div class="owl-carousel" data-num="2">

                                <div class="item">
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="assets/frontend/upload/news-posts/im2.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <a class="category-post world" href="world.html">business</a>
                                                    <h2><a href="single-post.html">Quisque volutpat mattis eros.
                                                            Nullam malesuada erat ut turpis. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-comments-o"></i><span>23</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="assets/frontend/upload/news-posts/im1.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <a class="category-post food" href="food.html">Food &amp;
                                                        Healthy</a>
                                                    <h2><a href="single-post.html">Quisque volutpat mattis eros.
                                                            Nullam malesuada erat ut turpis. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-comments-o"></i><span>23</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="assets/frontend/upload/news-posts/im3.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <a class="category-post travel" href="travel.html">travel</a>
                                                    <h2><a href="single-post.html">Donec nec justo eget felis
                                                            facilisis fermentum. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-comments-o"></i><span>23</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="assets/frontend/upload/news-posts/im4.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <a class="category-post fashion" href="fashion.html">fashion</a>
                                                    <h2><a href="single-post.html">Aenean dignissim pellentesque
                                                            felis.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-comments-o"></i><span>23</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="assets/frontend/upload/news-posts/im1.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <a class="category-post food" href="food.html">Food &amp;
                                                        Healthy</a>
                                                    <h2><a href="single-post.html">Quisque volutpat mattis eros.
                                                            Nullam malesuada erat ut turpis. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-comments-o"></i><span>23</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-post image-post2">
                                        <div class="post-gallery">
                                            <img src="assets/frontend/upload/news-posts/im2.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <a class="category-post world" href="world.html">business</a>
                                                    <h2><a href="single-post.html">Quisque volutpat mattis eros.
                                                            Nullam malesuada erat ut turpis. </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        <li><a href="#"><i
                                                                    class="fa fa-comments-o"></i><span>23</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- End carousel box -->

                        <!-- Carousel box -->
                        <div class="carousel-box owl-wrapper">

                            <div class="title-section">
                                <h1><span>Gallery</span></h1>
                            </div>

                            <div class="owl-carousel" data-num="3">

                                <div class="item news-post image-post3">
                                    <img src="assets/frontend/upload/news-posts/gal1.jpg" alt="">
                                    <div class="hover-box">
                                        <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis
                                                eros.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item news-post image-post3">
                                    <img src="assets/frontend/upload/news-posts/gal2.jpg" alt="">
                                    <div class="hover-box">
                                        <h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item news-post image-post3">
                                    <img src="assets/frontend/upload/news-posts/gal3.jpg" alt="">
                                    <div class="hover-box">
                                        <h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item news-post image-post3">
                                    <img src="assets/frontend/upload/news-posts/gal4.jpg" alt="">
                                    <div class="hover-box">
                                        <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                                fermentum. Aliquam </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="item news-post image-post3">
                                    <img src="assets/frontend/upload/news-posts/gal1.jpg" alt="">
                                    <div class="hover-box">
                                        <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis
                                                eros.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End carousel box -->

                        <!-- google addsense -->
                        <div class="advertisement">
                            <div class="desktop-advert">
                                <span>Advertisement</span>
                                <img src="assets/frontend/upload/addsense/600x80.jpg" alt="">
                            </div>
                            <div class="tablet-advert">
                                <span>Advertisement</span>
                                <img src="assets/frontend/upload/addsense/468x60-white.jpg" alt="">
                            </div>
                            <div class="mobile-advert">
                                <span>Advertisement</span>
                                <img src="assets/frontend/upload/addsense/300x250.jpg" alt="">
                            </div>
                        </div>
                        <!-- End google addsense -->

                        <!-- article box -->
                        <div class="article-box">
                            <div class="title-section">
                                <h1><span>Latest Articles</span></h1>
                            </div>

                            <div class="news-post article-post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-gallery">
                                            <img alt="" src="assets/frontend/upload/news-posts/art1.jpg">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                    pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">John Doe</a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="fa fa-comments-o"></i><span>23</span></a></li>
                                                <li><i class="fa fa-eye"></i>872</li>
                                            </ul>
                                            <span class="post-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                                                semper suscipit, posuere a, pede.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="news-post article-post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-gallery">
                                            <img alt="" src="assets/frontend/upload/news-posts/art2.jpg">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                    pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">John Doe</a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="fa fa-comments-o"></i><span>23</span></a></li>
                                                <li><i class="fa fa-eye"></i>872</li>
                                            </ul>
                                            <span class="post-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                                                semper suscipit, posuere a, pede.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="news-post article-post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-gallery">
                                            <img alt="" src="assets/frontend/upload/news-posts/art3.jpg">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                    pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">John Doe</a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="fa fa-comments-o"></i><span>23</span></a></li>
                                                <li><i class="fa fa-eye"></i>872</li>
                                            </ul>
                                            <span class="post-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                                                semper suscipit, posuere a, pede.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="news-post article-post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-gallery">
                                            <img alt="" src="assets/frontend/upload/news-posts/art4.jpg">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-content">
                                            <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                    pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">John Doe</a>
                                                </li>
                                                <li><a href="#"><i
                                                            class="fa fa-comments-o"></i><span>23</span></a></li>
                                                <li><i class="fa fa-eye"></i>872</li>
                                            </ul>
                                            <span class="post-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <p>Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                                                semper suscipit, posuere a, pede.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End article box -->

                        <!-- Pagination box -->
                        <div class="pagination-box">
                            <ul class="pagination-list">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span>...</span></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                            <p>Page 1 of 9</p>
                        </div>
                        <!-- End Pagination box -->

                    </div>
                    <!-- End block content -->
                </div>

                <div class="col-md-2 col-sm-0">

                    <!-- sidebar -->
                    <div class="sidebar small-sidebar">

                        <div class="widget review-widget">
                            <h1>Top News Post</h1>
                            <ul class="review-posts-list">
                                <li>
                                    <img src="assets/frontend/upload/news-posts/rev1.jpg" alt="">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                            fermentum.</a></h2>
                                    <span class="date"><i class="fa fa-clock-o"></i>27 may 2013</span>
                                    <span class="post-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </li>
                                <li>
                                    <img src="assets/frontend/upload/news-posts/rev2.jpg" alt="">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                            fermentum.</a></h2>
                                    <span class="date"><i class="fa fa-clock-o"></i>27 may 2013</span>
                                    <span class="post-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </li>
                                <li>
                                    <img src="assets/frontend/upload/news-posts/rev3.jpg" alt="">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                            fermentum.</a></h2>
                                    <span class="date"><i class="fa fa-clock-o"></i>27 may 2013</span>
                                    <span class="post-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </li>
                                <li>
                                    <img src="assets/frontend/upload/news-posts/rev4.jpg" alt="">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                            fermentum.</a></h2>
                                    <span class="date"><i class="fa fa-clock-o"></i>27 may 2013</span>
                                    <span class="post-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </li>
                                <li>
                                    <img src="assets/frontend/upload/news-posts/rev5.jpg" alt="">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                            fermentum.</a></h2>
                                    <span class="date"><i class="fa fa-clock-o"></i>27 may 2013</span>
                                    <span class="post-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </li>
                                <li>
                                    <img src="assets/frontend/upload/news-posts/rev6.jpg" alt="">
                                    <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                            fermentum.</a></h2>
                                    <span class="date"><i class="fa fa-clock-o"></i>27 may 2013</span>
                                    <span class="post-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="advertisement">
                            <div class="desktop-advert">
                                <span>Advertisement</span>
                                <img src="assets/frontend/upload/addsense/160x600.jpg" alt="">
                            </div>
                        </div>

                        <div class="widget categories-widget">
                            <div class="title-section">
                                <h1><span>Hot Categories</span></h1>
                            </div>
                            <ul class="category-list">
                                <li>
                                    <a href="#">Business <span>12</span></a>
                                </li>
                                <li>
                                    <a href="#">Sport <span>26</span></a>
                                </li>
                                <li>
                                    <a href="#">LifeStyle <span>55</span></a>
                                </li>
                                <li>
                                    <a href="#">Fashion <span>37</span></a>
                                </li>
                                <li>
                                    <a href="#">Technology <span>62</span></a>
                                </li>
                                <li>
                                    <a href="#">Music <span>10</span></a>
                                </li>
                                <li>
                                    <a href="#">Culture <span>43</span></a>
                                </li>
                                <li>
                                    <a href="#">Design <span>74</span></a>
                                </li>
                                <li>
                                    <a href="#">Entertainment <span>11</span></a>
                                </li>
                                <li>
                                    <a href="#">video <span>41</span></a>
                                </li>
                                <li>
                                    <a href="#">Travel <span>11</span></a>
                                </li>
                                <li>
                                    <a href="#">Food <span>29</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <!-- sidebar -->
                    <div class="sidebar large-sidebar">
                        <div class="widget social-widget">
                            <div class="title-section">
                                <h1><span>Stay Connected</span></h1>
                            </div>
                            <ul class="social-share">
                                <li>
                                    <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                                    <span class="number">9,455</span>
                                    <span>Subscribers</span>
                                </li>
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <span class="number">56,743</span>
                                    <span>Fans</span>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <span class="number">43,501</span>
                                    <span>Followers</span>
                                </li>
                                <li>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                    <span class="number">35,003</span>
                                    <span>Followers</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget features-slide-widget">
                            <div class="title-section">
                                <h1><span>Featured Posts</span></h1>
                            </div>
                            <div class="image-post-slider">
                                <ul class="bxslider">
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="assets/frontend/upload/news-posts/im3.jpg" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <h2><a href="single-post.html">Pellentesque odio nisi,
                                                                euismod in, pharetra a, ultricies in, diam. </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            <li><a href="#"><i
                                                                        class="fa fa-comments-o"></i><span>23</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="assets/frontend/upload/news-posts/im1.jpg" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <h2><a href="single-post.html">Pellentesque odio nisi,
                                                                euismod in, pharetra a, ultricies in, diam. </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            <li><a href="#"><i
                                                                        class="fa fa-comments-o"></i><span>23</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="assets/frontend/upload/news-posts/im2.jpg" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
                                                        <h2><a href="single-post.html">Pellentesque odio nisi,
                                                                euismod in, pharetra a, ultricies in, diam. </a>
                                                        </h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                            <li><a href="#"><i
                                                                        class="fa fa-comments-o"></i><span>23</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="list-posts">

                                <li>
                                    <img src="assets/frontend/upload/news-posts/listw5.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a,
                                                sodales sit amet, nisi.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/frontend/upload/news-posts/listw1.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra
                                                a, ultricies in, diam. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <img src="assets/frontend/upload/news-posts/listw2.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="advertisement">
                            <div class="desktop-advert">
                                <span>Advertisement</span>
                                <img src="assets/frontend/upload/addsense/250x250.jpg" alt="">
                            </div>
                            <div class="tablet-advert">
                                <span>Advertisement</span>
                                <img src="assets/frontend/upload/addsense/200x200.jpg" alt="">
                            </div>
                            <div class="mobile-advert">
                                <span>Advertisement</span>
                                <img src="assets/frontend/upload/addsense/300x250.jpg" alt="">
                            </div>
                        </div>

                        <div class="widget tab-posts-widget">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#option1" data-toggle="tab">Popular</a>
                                </li>
                                <li>
                                    <a href="#option2" data-toggle="tab">Recent</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="option1">
                                    <ul class="list-posts">
                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo
                                                        a, sodales sit amet, nisi. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="option2">
                                    <ul class="list-posts">

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo
                                                        a, sodales sit amet, nisi.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="widget post-widget">
                            <div class="title-section">
                                <h1><span>Featured Video</span></h1>
                            </div>
                            <div class="news-post video-post">
                                <img alt="" src="assets/frontend/upload/news-posts/video-sidebar.jpg">
                                <a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i
                                        class="fa fa-play-circle-o"></i></a>
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam
                                            malesuada erat ut turpis. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                                <p></p>
                            </div>
                            <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo
                                eget felis facilisis. </p>
                        </div>

                    </div>
                    <!-- End sidebar -->
                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend-layout>
