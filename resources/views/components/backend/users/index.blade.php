<x-layout.backend>

    <x-slot name="toolbar">
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Tables</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Widgets</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Tables</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
    </x-slot>

    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">New Arrivals</span>
                <span class="text-muted mt-1 fw-bold fs-7">Over 500 new products</span>
            </h3>
            <div class="card-toolbar">
                <a href="#" class="btn btn-sm btn-light-primary">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
                    <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                     viewBox="0 0 24 24" version="1.1">
													<path
                                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													<path
                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero"/>
												</svg>
											</span>
                    <!--end::Svg Icon-->New Member</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                    <tr class="fw-bolder text-muted bg-light">
                        <th class="ps-4 min-w-325px rounded-start">{{ __('backend/account/index.full_name') }}</th>
                        <th class="min-w-125px">{{ __('backend/account/index.email') }}</th>
                        <th class="min-w-125px">{{ __('backend/account/index.created') }}</th>
                        <th class="min-w-200px">{{ __('backend/account/index.updated') }}</th>
                        <th class="min-w-150px">{{ __('backend/account/index.status') }}</th>
                        <th class="min-w-200px text-end rounded-end"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(count($items) > 0)
                        @foreach($items as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50px me-5">
                                            <img src="{{ asset('/backend/assets/media/stock/600x400/img-26.jpg') }}"
                                                 class=""
                                                 alt=""/>
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Sant
                                                Extreanet
                                                Solution</a>
                                            <span
                                                class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#"
                                       class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$2,790</a>
                                    <span class="text-muted fw-bold text-muted d-block fs-7">Paid</span>
                                </td>
                                <td>
                                    <a href="#"
                                       class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$520</a>
                                    <span class="text-muted fw-bold text-muted d-block fs-7">Rejected</span>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Bradly
                                        Beal</a>
                                    <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                                </td>
                                <td>
                                    <span class="badge badge-light-primary fs-7 fw-bold">Approved</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="bi bi-toggles"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <i class="bi bi-trash"></i>
                                        <!--end::Svg Icon-->
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @include('components.backend.shared.user')
                    @endif

                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->


            <!--begin::Pagination-->
            @if(count($items) > 0)
                {!! $pager !!} dd
            @endif

{{--            @includeIf('components.backend.shared.pagination', ['total' => count($items)])--}}


        </div>
        <!--begin::Body-->
    </div>


</x-layout.backend>
