<x-layouts.backend-layout>

    <!--begin::Title-->
    <x-slot name="title">Categories</x-slot>
    <!--end::Title-->

    <!--begin::Toolbar  -->
    <x-backend.toolbar title="Categories" :breadcrumbs="[['label' => 'Home', 'url' => '/dashboard'], ['label' => 'Categories']]" buttonIcon="bi bi-plus-circle" buttonText="Add New"
        buttonUrl="{{ route('categories.create') }}" />
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
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bolder text-muted">
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $category->title }}</td>
                                                <td>{{ $category->details }}</td>
                                                <td>
                                                    @if ($category->status === 'active')
                                                        <span class="badge badge-light-primary">Active</span>
                                                    @else
                                                        <span class="badge badge-light-danger">Deactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('categories.edit', $category->id) }}"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <x-backend.actions.edit-icon />
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
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
