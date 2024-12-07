<x-layouts.backend-layout>

    <!--begin::Title-->
    <x-slot name="title">Youtubes</x-slot>
    <!--end::Title-->

    <!--begin::Toolbar  -->
    <x-backend.toolbar title="Add youtube" :breadcrumbs="[['label' => 'Home', 'url' => '/dashboard'], ['label' => 'Add youtube']]" buttonIcon="bi bi-list" buttonText="Youtube List"
        buttonUrl="{{ route('youtubes.index') }}" />
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
                            <form class="form" method="POST"
                                action="{{ isset($youtube) ? route('youtubes.update', $youtube->id) : route('youtubes.store') }}">
                                @csrf

                                @isset($youtube)
                                    @method('PUT')
                                    <input type="text" hidden name="id" value="{{ $youtube->id }}">
                                @endisset

                                <div class="row mb-5">

                                    <div class="col-md-12 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Title</label>
                                        <input type="text" required
                                            class="form-control form-control-solid @error('title') is-invalid @enderror"
                                            placeholder="Enter title" name="title"
                                            value="{{ $youtube->title ?? old('title') }}" />
                                        @error('title')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 fv-row mb-5">
                                        <label class="required fs-5 fw-bold mb-2">Link</label>
                                        <textarea class="form-control form-control-solid" placeholder="Enter link" name="link" required
                                            data-kt-autosize="true">{{ $youtube->link ?? old('link') }}</textarea>
                                        @error('link')
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
