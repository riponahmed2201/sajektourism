<x-layouts.frontend-layout>
    <section class="block-wrapper">
        <div class="container">
            <section class="ticker-news">
                <div class="ticker-news-box">
                    <span class="breaking-news">about us</span>
                    <div class="ticker-wrapper">
                        <div class="ticker">
                            <p class="ticker-content">
                                <a href="javascript:void(0)">
                                    Sajek Tourism, a sister concern of Booking Paper Holiday, has been working in Sajek
                                    with great reputation and trust.
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-12">
                    <div class="block-content">
                        <div class="grid-box">
                            <div class="title-section">
                                <h1><span class="world">Our Services</span></h1>
                            </div>
                            <div class="row">
                                @foreach ($services as $service)
                                    <div class="col-md-4">
                                        <div class="news-post standard-post2">
                                            <div class="post-gallery">
                                                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
                                                <a class="category-post world"
                                                    href="javascript:void(0)">{{ $service->title }}</a>
                                            </div>
                                            <div class="post-title">
                                                <h2>
                                                    <a href="javascript:void(0)"> {{ $service->details }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.frontend-layout>
