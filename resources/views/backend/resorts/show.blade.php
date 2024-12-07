<x-layouts.backend-layout>

    <!--begin::Title-->
    <x-slot name="title">Resort show</x-slot>
    <!--end::Title-->

    <!--begin::Toolbar  -->
    <x-backend.toolbar title="Resort show" :breadcrumbs="[['label' => 'Home', 'url' => '/dashboard'], ['label' => 'Resort show']]" buttonIcon="bi bi-list" buttonText="Resort List"
        buttonUrl="{{ route('resorts.index') }}" />
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
                            <div class="row mb-5">
                                <div class="col-md-6 fv-row mb-5">
                                    <label class="fs-5 fw-bold mb-2">Title</label>
                                    <input type="text" class="form-control form-control-solid" disabled
                                        value="{{ $resort->title }}" />
                                </div>

                                <div class="col-md-6 fv-row mb-5">
                                    <label class="fs-5 fw-bold mb-2">Thumbnail</label>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ asset('uploads/resorts/' . $resort->thumbnail) }}"
                                                alt="{{ $resort->title }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 fv-row mb-5">
                                    <label class="fs-5 fw-bold mb-2">Album</label>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-45px me-5">
                                            <img src="{{ asset('uploads/resorts/' . $resort->album) }}"
                                                alt="{{ $resort->title }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 fv-row mb-5">
                                    <label class="fs-5 fw-bold mb-2">Short Description</label>
                                    <input type="text" class="form-control form-control-solid" disabled
                                        value="{{ $resort->short_description }}" />
                                </div>

                                <div class="col-md-12 fv-row mb-5">
                                    <label class="fs-5 fw-bold mb-2">Details</label>
                                    <textarea class="form-control form-control-solid" disabled data-kt-autosize="true">{{ $resort->details }}</textarea>
                                </div>

                                <div class="col-md-2 fv-row mb-5">
                                    <label class="fs-5 fw-bold mb-2">Status</label>
                                    <input type="text" class="form-control form-control-solid" disabled
                                        value="{{ ucwords($resort->status) }}" />
                                </div>
                            </div>
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
