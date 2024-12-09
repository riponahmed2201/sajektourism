<x-layouts.frontend-layout>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">

                        <!-- grid box -->
                        <div class="grid-box">
                            <div class="title-section">
                                <h1><span class="world">Our Resorts</span></h1>
                            </div>

                            <div class="row">
                                @foreach ($resorts as $resort)
                                    <div class="col-md-6">
                                        <div class="news-post standard-post2">
                                            <div class="post-gallery">
                                                <img style="width: 360px; height:284px"
                                                    src="{{ asset('uploads/resorts/' . $resort->thumbnail) }}"
                                                    alt="{{ $resort->title }}">
                                                <a class="category-post world"
                                                    href="{{ route('home.resort.single', $resort->slug) }}">{{ $resort->title }}</a>
                                            </div>
                                            <div class="post-title">
                                                <h2>
                                                    <a href="{{ route('home.resort.single', $resort->slug) }}">
                                                        {{ substr($resort->details, 0, 80) }}
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End grid box -->
                    </div>
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
                                            <img src="assets/frontend/upload/news-posts/im3.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <h2><a href="javascript:void(0)">Pellentesque odio nisi, euismod
                                                            in, pharetra a, ultricies in, diam. </a></h2>
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
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <img src="assets/frontend/upload/news-posts/im1.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <h2><a href="javascript:void(0)">Pellentesque odio nisi, euismod
                                                            in, pharetra a, ultricies in, diam. </a></h2>
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
                                    </li>
                                    <li>
                                        <div class="news-post image-post2">
                                            <img src="assets/frontend/upload/news-posts/im2.jpg" alt="">
                                            <div class="hover-box">
                                                <div class="inner-hover">
                                                    <h2><a href="javascript:void(0)">Pellentesque odio nisi, euismod
                                                            in, pharetra a, ultricies in, diam. </a></h2>
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
                                    <a href="#option3" data-toggle="tab">Top News</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="option1">
                                    <ul class="list-posts">
                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Sed arcu. Cras consequat. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Nam nulla quam, gravida non, commodo
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
                                                <h2><a href="javascript:void(0)">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Nam nulla quam, gravida non, commodo
                                                        a, sodales sit amet, nisi.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Sed arcu. Cras consequat.</a></h2>
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
                                            <img src="assets/frontend/upload/news-posts/listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Donec consectetuer ligula vulputate
                                                        sem tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="assets/frontend/upload/news-posts/listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="javascript:void(0)">Nam nulla quam, gravida non, commodo
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
                                <img alt="" src="assets/frontend/upload/news-posts/video-sidebar.jpg">
                                <a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i
                                        class="fa fa-play-circle-o"></i></a>
                                <div class="hover-box">
                                    <h2><a href="javascript:void(0)">Donec odio. Quisque volutpat mattis eros. Nullam
                                            malesuada erat ut turpis. </a></h2>
                                    <ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                    </ul>
                                </div>
                            </div>
                            <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo
                                eget felis facilisis. </p>
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
                    </div>
                    <!-- End sidebar -->

                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend-layout>
