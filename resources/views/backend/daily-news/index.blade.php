<x-layouts.backend-layout>

    <!--begin::Title-->
    <x-slot name="title">Daily news</x-slot>
    <!--end::Title-->

    <!--begin::Toolbar  -->
    <x-backend.toolbar title="Daily news list" :breadcrumbs="[['label' => 'Home', 'url' => '/dashboard'], ['label' => 'Daily news list']]" buttonIcon="bi bi-plus-circle" buttonText="Add New"
        buttonUrl="{{ route('daily-news.create') }}" />
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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($dailyNews as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-45px me-5">
                                                            <img src="{{ asset($row->image) }}"
                                                                alt="{{ $row->title }}" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $row->title }}</td>
                                                <td>{{ $row->details }}</td>
                                                <td>
                                                    @if ($row->status === 'active')
                                                        <span class="badge badge-light-primary">Active</span>
                                                    @else
                                                        <span class="badge badge-light-danger">Deactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('daily-news.edit', $row->id) }}"
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
