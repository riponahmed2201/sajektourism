<x-layouts.frontend-layout>
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-content">
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
                    </div>
                </div>

                <div class="col-sm-4">
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
                                <h1><span>Resort Gallery</span></h1>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend-layout>
