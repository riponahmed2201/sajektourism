<x-layouts.backend-layout>

    <!--begin::Title-->
    <x-slot name="title">Resorts</x-slot>
    <!--end::Title-->

    <!--begin::Toolbar  -->
    @php
        $isEdit = isset($resort);
        $title = $isEdit ? 'Edit resort' : 'Add resort';
        $breadcrumbs = [
            ['label' => 'Home', 'url' => '/dashboard'],
            ['label' => 'Resort management'],
            ['label' => $title],
        ];
    @endphp

    <x-backend.toolbar :title="$title" :breadcrumbs="$breadcrumbs" buttonIcon="bi bi-list" buttonText="Resort List"
        :buttonUrl="route('resorts.index')" />
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
                                action="{{ isset($resort) ? route('resorts.update', $resort->id) : route('resorts.store') }}">
                                @csrf

                                @isset($resort)
                                    @method('PUT')
                                    <input type="text" hidden name="id" value="{{ $resort->id }}">
                                @endisset

                                <div class="row mb-5">

                                    <div class="col-md-12 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Title</label>
                                        <input type="text" required
                                            class="form-control form-control-solid @error('title') is-invalid @enderror"
                                            placeholder="Enter title" name="title"
                                            value="{{ $resort->title ?? old('title') }}" />
                                        @error('title')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Short Description</label>
                                        <textarea class="form-control form-control-solid" placeholder="Enter short description" name="short_description"
                                            required data-kt-autosize="true">{{ $resort->short_description ?? old('short_description') }}</textarea>
                                        @error('short_description')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Details</label>
                                        <textarea class="form-control form-control-solid" placeholder="Enter details" name="details" required
                                            data-kt-autosize="true">{{ $resort->details ?? old('details') }}</textarea>
                                        @error('details')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Thumbnail</label>
                                        <input type="file"
                                            class="form-control form-control-solid @error('thumbnail') is-invalid @enderror"
                                            name="thumbnail" />
                                        @isset($resort->thumbnail)
                                            <div class="d-flex align-items-center mt-2">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="{{ asset('uploads/resorts/' . $resort->thumbnail) }}"
                                                        alt="{{ $resort->title }}" />
                                                </div>
                                            </div>
                                        @endisset
                                        @error('thumbnail')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Images</label>
                                        <input type="file" multiple
                                            class="form-control form-control-solid @error('images') is-invalid @enderror"
                                            name="images[]" />
                                        <div class="d-flex align-items-center mt-2">
                                            <div class="symbol symbol-45px me-5">
                                                @if (isset($resort->images) && !empty(json_decode($resort->images)))
                                                    @foreach (json_decode($resort->images) as $image)
                                                        <img class="ms-2"
                                                            src="{{ asset('uploads/resorts/' . $image) }}"
                                                            alt="{{ $resort->title }}" />
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        @error('images')
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
