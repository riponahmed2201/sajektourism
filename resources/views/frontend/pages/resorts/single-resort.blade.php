<x-layouts.frontend-layout>

    <!-- block-wrapper-section -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- single-post box -->
                        <div class="single-post-box">

                            <div class="title-post">
                                <h1>{{ $resort->title }}</h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    {{-- <li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li> --}}
                                    <li><i class="fa fa-eye"></i>872</li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on
                                                Facebook</span></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on
                                                Twitter</span></a></li>
                                    <li><a class="google" href="#"><i
                                                class="fa fa-google-plus"></i><span></span></a></li>
                                    <li><a class="linkedin" href="#"><i
                                                class="fa fa-linkedin"></i><span></span></a></li>
                                </ul>
                            </div>

                            <div class="post-gallery">
                                <ul class="bxslider">
                                    <li><img src="{{ asset('assets/frontend/upload/news-posts/single3.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/frontend/upload/news-posts/single2.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/frontend/upload/news-posts/single1.jpg') }}" alt=""></li>
                                </ul>
                                <span class="image-caption">{{ $resort->title }}</span>
                            </div>

                            <div class="post-content">
                                <blockquote>
                                    <p>{{ $resort->short_description }}</p>
                                </blockquote>
                                <p>{{ $resort->details }}</p>
                            </div>

                            <div class="post-tags-box">
                                <ul class="tags-box">
                                    <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Politics</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on
                                            Facebook</a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on
                                            Twitter</a></li>
                                    <li><a class="google" href="#"><i
                                                class="fa fa-google-plus"></i><span></span></a></li>
                                    <li><a class="linkedin" href="#"><i
                                                class="fa fa-linkedin"></i><span></span></a></li>
                                </ul>
                            </div>

                            <div class="prev-next-posts">
                                <div class="prev-post">
                                    <img src="upload/news-posts/listw4.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.html" title="prev post">Pellentesque odio nisi,
                                                euismod in, pharetra a, ultricies in, diam. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="next-post">
                                    <img src="upload/news-posts/listw5.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.html" title="next post">Donec consectetuer ligula
                                                vulputate sem tristique cursus. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="about-more-autor">
                                <ul class="nav nav-tabs" id="myTab2">
                                    <li class="active">
                                        <a href="#about-autor" data-toggle="tab">About The Autor</a>
                                    </li>
                                    <li>
                                        <a href="#more-autor" data-toggle="tab">More From Autor</a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="about-autor">
                                        <div class="autor-box">
                                            <img src="upload/users/avatar1.jpg" alt="">
                                            <div class="autor-content">
                                                <div class="autor-title">
                                                    <h1><span>Jane Smith</span><a href="autor-details.html">18
                                                            Posts</a></h1>
                                                    <ul class="autor-social">
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" class="google"><i
                                                                    class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" class="twitter"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="youtube"><i
                                                                    class="fa fa-youtube"></i></a></li>
                                                        <li><a href="#" class="instagram"><i
                                                                    class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i
                                                                    class="fa fa-linkedin"></i></a></li>
                                                        <li><a href="#" class="dribble"><i
                                                                    class="fa fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a
                                                    diam sit amet mi ullamcorper vehicula. Integer adipiscing risus
                                                    a sem. Nullam quis massa sit amet nibh viverra malesuada.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="more-autor">
                                        <div class="more-autor-posts">

                                            <div class="news-post image-post3">
                                                <img src="upload/news-posts/gal1.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat
                                                            mattis eros.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="upload/news-posts/gal2.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Nullam malesuada erat ut turpis.
                                                        </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="upload/news-posts/gal3.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="upload/news-posts/gal4.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.html">Donec nec justo eget felis
                                                            facilisis fermentum. Aliquam </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- carousel box -->
                            <div class="carousel-box owl-wrapper">
                                <div class="title-section">
                                    <h1><span>You may also like</span></h1>
                                </div>
                                <div class="owl-carousel" data-num="3">

                                    <div class="item news-post image-post3">
                                        <img src="{{ asset('assets/frontend/upload/news-posts/art1.jpg') }}" alt="">
                                        <div class="hover-box">
                                            <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis
                                                    eros.</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="item news-post image-post3">
                                        <img src="{{ asset('assets/frontend/upload/news-posts/art2.jpg') }}" alt="">
                                        <div class="hover-box">
                                            <h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="item news-post video-post">
                                        <img src="{{ asset('assets/frontend/upload/news-posts/art3.jpg') }}" alt="">
                                        <a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i
                                                class="fa fa-play-circle-o"></i></a>
                                        <div class="hover-box">
                                            <h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer
                                                    adipiscing elit. Donec odio. </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="item news-post image-post3">
                                        <img src="{{ asset('assets/frontend/upload/news-posts/art4.jpg') }}" alt="">
                                        <div class="hover-box">
                                            <h2><a href="single-post.html">Donec nec justo eget felis facilisis
                                                    fermentum. Aliquam </a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="item news-post image-post3">
                                        <img src="{{ asset('assets/frontend/upload/news-posts/art5.jpg') }}" alt="">
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

                        </div>
                        <!-- End single-post box -->
                    </div>
                    <!-- End block content -->
                </div>

                <div class="col-sm-4">

                    <!-- sidebar -->
                    <div class="sidebar">

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
                                                <img src="{{ asset('assets/frontend/upload/news-posts/im3.jpg') }}" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
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
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="{{ asset('assets/frontend/upload/news-posts/im1.jpg') }}" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
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
                                    <li>
                                        <div class="news-post image-post2">
                                            <div class="post-gallery">
                                                <img src="{{ asset('assets/frontend/upload/news-posts/im2.jpg') }}" alt="">
                                                <div class="hover-box">
                                                    <div class="inner-hover">
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
                        </div>

                        <div class="widget tab-posts-widget">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#option1" data-toggle="tab">Popular</a>
                                </li>
                                <li>
                                    <a href="#option2" data-toggle="tab">Recent</a>
                                </li>
                                <li>
                                    <a href="#option3" data-toggle="tab">Top Reviews</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="option1">
                                    <ul class="list-posts">
                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw1.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw2.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw3.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw4.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw5.jpg') }}" alt="">
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
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw3.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw4.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw5.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo
                                                        a, sodales sit amet, nisi.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw1.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw2.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="option3">
                                    <ul class="list-posts">

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw4.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw1.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw3.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw2.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ asset('assets/frontend/upload/news-posts/listw5.jpg') }}" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.html">Nam nulla quam, gravida non, commodo
                                                        a, sodales sit amet, nisi.</a></h2>
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
                                <img alt="" src="{{ asset('assets/frontend/upload/news-posts/video-sidebar.jpg') }}">
                                <a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i
                                        class="fa fa-play-circle-o"></i></a>
                                <div class="hover-box">
                                    <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam
                                            malesuada erat ut turpis. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>
                            <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo
                                eget felis facilisis. </p>
                        </div>

                        <div class="widget subscribe-widget">
                            <form class="subscribe-form">
                                <h1>Subscribe to RSS Feeds</h1>
                                <input type="text" name="sumbscribe" id="subscribe" placeholder="Email">
                                <button id="submit-subscribe">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </button>
                                <p>Get all latest content delivered to your email a few times a month.</p>
                            </form>
                        </div>

                        <div class="widget tags-widget">

                            <div class="title-section">
                                <h1><span>Popular Tags</span></h1>
                            </div>

                            <ul class="tag-list">
                                <li><a href="#">News</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">World</a></li>
                                <li><a href="#">Music</a></li>
                            </ul>

                        </div>

                        <div class="advertisement">
                            <div class="desktop-advert">
                                <span>Advertisement</span>
                                <img src="{{ asset('assets/frontend/upload/addsense/300x250.jpg') }}" alt="">
                            </div>
                            <div class="tablet-advert">
                                <span>Advertisement</span>
                                <img src="{{ asset('assets/frontend/upload/addsense/200x200.jpg') }}" alt="">
                            </div>
                            <div class="mobile-advert">
                                <span>Advertisement</span>
                                <img src="{{ asset('assets/frontend/upload/addsense/300x250.jpg') }}" alt="">
                            </div>
                        </div>

                    </div>
                    <!-- End sidebar -->
                </div>
            </div>
        </div>
    </section>
    <!-- End block-wrapper-section -->
</x-layouts.frontend-layout>
