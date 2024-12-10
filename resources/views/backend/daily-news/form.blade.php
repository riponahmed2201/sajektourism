<x-layouts.backend-layout>

    <!--begin::Title-->
    <x-slot name="title">Daily News</x-slot>
    <!--end::Title-->

    <!--begin::Toolbar  -->
    <x-backend.toolbar title="Add daily news" :breadcrumbs="[['label' => 'Home', 'url' => '/dashboard'], ['label' => 'Add daily news']]" buttonIcon="bi bi-list" buttonText="Daily News"
        buttonUrl="{{ route('daily-news.index') }}" />
    <!--end::Toolbar -->

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Tables Widget 9-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body py-8">
                            <!--begin::Form-->
                            <form class="form" method="POST" enctype="multipart/form-data"
                                action="{{ isset($dailyNews) ? route('services.update', $dailyNews->id) : route('services.store') }}">
                                @csrf

                                @isset($dailyNews)
                                    @method('PUT')
                                    <input type="text" hidden name="id" value="{{ $dailyNews->id }}">
                                @endisset

                                <div class="row mb-5">

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Category</label>
                                        <select name="category" required
                                            class="form-select form-select-solid @error('category') is-invalid @enderror"
                                            data-control="select2" data-placeholder="Select category">
                                            <option value=""></option>
                                            @foreach ($categories as $categoryId => $categoryName)
                                                <option
                                                    @isset($editModeData)
                                                        {{ $editModeData->category_id === $categoryId ? 'selected' : '' }}
                                                    @endisset
                                                    value="{{ $categoryId }}">
                                                    {{ $categoryName }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Tag</label>
                                        <select name="tag" required
                                            class="form-select form-select-solid @error('tag') is-invalid @enderror"
                                            data-control="select2" data-placeholder="Select tag">
                                            <option value=""></option>
                                            @foreach ($categories as $categoryId => $categoryName)
                                                <option
                                                    @isset($editModeData)
                                                        {{ $editModeData->category_id === $categoryId ? 'selected' : '' }}
                                                    @endisset
                                                    value="{{ $categoryId }}">
                                                    {{ $categoryName }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Title</label>
                                        <input type="text" required
                                            class="form-control form-control-solid @error('title') is-invalid @enderror"
                                            placeholder="Enter title" name="title"
                                            value="{{ $service->title ?? old('title') }}" />
                                        @error('title')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Date</label>
                                        <input type="text" required
                                            class="form-control form-control-solid @error('date') is-invalid @enderror"
                                            placeholder="Enter date" name="date"
                                            value="{{ $service->date ?? old('date') }}" />
                                        @error('date')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 fv-row mb-5">
                                        <label for="news_type" class="required fs-5 fw-bold mb-2">News Type</label>
                                        <div class="d-flex">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="is_featured" />
                                                <label class="form-check-label" for="is_featured">
                                                    Featured
                                                </label>
                                            </div>

                                            <label class="form-check form-check-custom form-check-solid ms-5">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="top" />
                                                <label class="form-check-label" for="top">
                                                    Top
                                                </label>
                                            </label>

                                            <div class="form-check form-check-custom form-check-solid ms-5">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="popular" />
                                                <label class="form-check-label" for="popular">
                                                    Popular
                                                </label>
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid ms-5">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="breaking" />
                                                <label class="form-check-label" for="breaking">
                                                    Breaking
                                                </label>
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid ms-5">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="recent" />
                                                <label class="form-check-label" for="recent">
                                                    Recent
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Thumbnail</label>
                                        <input type="file"
                                            class="form-control form-control-solid @error('thumbnail') is-invalid @enderror"
                                            name="thumbnail" />
                                        @error('thumbnail')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Images</label>
                                        <input type="file"
                                            class="form-control form-control-solid @error('images') is-invalid @enderror"
                                            name="images" />
                                        @error('images')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Details</label>
                                        <textarea class="form-control form-control-solid" placeholder="Enter details" name="details" required
                                            data-kt-autosize="true">{{ $service->details ?? old('details') }}</textarea>
                                        @error('details')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 fv-row mb-5">
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" id="status"
                                                name="status" checked="checked"
                                                @isset($user) {{ $user->status == 'active' ? 'checked' : '' }} @endisset />
                                            <label class="form-check-label" for="status">
                                                Status
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer flex-center">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Tables Widget 9-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>

</x-layouts.backend-layout>
