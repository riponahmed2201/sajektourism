<div class="toolbar" id="kt_toolbar">
    <!-- Begin::Container -->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!-- Begin::Page Title -->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">

            <!-- Begin::Title -->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ $title }}</h1>
            <!-- End::Title -->

            <!-- Begin::Separator -->
            <span class="h-20px border-gray-300 border-start mx-4"></span>
            <!-- End::Separator -->

            <!-- Begin::Breadcrumb -->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                @foreach ($breadcrumbs as $breadcrumb)
                    <li class="breadcrumb-item text-muted">
                        @if (!empty($breadcrumb['url']))
                            <a href="{{ $breadcrumb['url'] }}" class="text-muted text-hover-primary">
                                {{ $breadcrumb['label'] }}
                            </a>
                        @else
                            {{ $breadcrumb['label'] }}
                        @endif
                    </li>
                    @if (!$loop->last)
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                    @endif
                @endforeach
            </ul>
            <!-- End::Breadcrumb -->
        </div>
        <!-- End::Page Title -->

        <!-- Begin::Actions -->
        @if (!empty($buttonText))
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="{{ $buttonUrl }}" class="btn btn-sm btn-primary">
                    @if (!empty($buttonIcon))
                        <i class="{{ $buttonIcon }}"></i>
                    @endif
                    {{ $buttonText }}
                </a>
            </div>
        @endif
        <!-- End::Actions -->
    </div>
    <!-- End::Container -->
</div>
