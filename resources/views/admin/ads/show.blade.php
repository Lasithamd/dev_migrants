@extends('admin.layout')

@section('content')
    <div class="row g-3 mb-3">
        <div class="col-xxl-6 col-xl-12">
            <div class="row g-3">
                <div class="col-12">
                    <div class="card bg-transparent-50 overflow-hidden">
                        <div class="card-header position-relative">
                            <div class="bg-holder d-none d-md-block bg-card z-1"
                                style="background-image:url({{ asset('/images/ecommerce-bg.png') }});background-size:230px;background-position:right bottom;z-index:-1;">
                            </div><!--/.bg-holder-->
                            <div class="position-relative z-2">
                                <div>
                                    <h3 class="text-primary mb-1">Good Afternoon, Jonathan!</h3>
                                    <p>Here’s what happening with your store today </p>
                                </div>
                                <div class="d-flex py-3">
                                    <div class="pe-3">
                                        <p class="text-600 fs-10 fw-medium">Today's visit </p>
                                        <h4 class="text-800 mb-0">14,209</h4>
                                    </div>
                                    <div class="ps-3">
                                        <p class="text-600 fs-10">Today’s total sales </p>
                                        <h4 class="text-800 mb-0">$21,349.29 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Details</h5>

                            </div>
                            <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><svg
                                        class="svg-inline--fa fa-pencil-alt fa-w-16 fs-11 me-1" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="pencil-alt" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z">
                                        </path>
                                    </svg>Remove
                                    Ads</a></div>
                        </div>
                    </div>
                    <div class="card-body bg-body-tertiary border-top">
                        <div class="row">
                            <div class="col-lg col-xxl-5">
                                <h6 class="fw-semi-bold ls mb-3 text-uppercase">Ads Information</h6>
                                <div class="row">
                                    <div class="col-5 col-sm-4">
                                        <p class="fw-semi-bold mb-1">ID</p>
                                    </div>
                                    <div class="col">{{ $data->id }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-sm-4">
                                        <p class="fw-semi-bold mb-1">Title</p>
                                    </div>
                                    <div class="col">{{ $data->name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-sm-4">
                                        <p class="fw-semi-bold mb-1">Price</p>
                                    </div>
                                    <div class="col">{{ $data->price }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-sm-4">
                                        <p class="fw-semi-bold mb-1">Description</p>
                                    </div>
                                    <div class="col">
                                        <p class="fst-italic text-500 mb-1">{{ $data->description }}</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                                <h6 class="fw-semi-bold ls mb-3 text-uppercase">User Information</h6>
                                <div class="row">
                                    <div class="col-5 col-sm-4">
                                        <p class="fw-semi-bold mb-1">Name</p>
                                    </div>
                                    <div class="col"><a href="mailto:tony@gmail.com">{{ $data->uname }}</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-sm-4">
                                        <p class="fw-semi-bold mb-1">E-mail</p>
                                    </div>
                                    <div class="col">
                                        <p class="mb-1">{{ $data->email }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-sm-4">
                                        <p class="fw-semi-bold mb-1">Specification</p>
                                    </div>
                                    <div class="col">
                                        @if ($data->feature1 != 'N/A')
                                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary">
                                                {{ $data->feature1 }}</small>
                                        @endif
                                        @if ($data->feature2 != 'N/A')
                                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary">
                                                {{ $data->feature2 }}</small>
                                        @endif
                                        @if ($data->feature3 != 'N/A')
                                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary">
                                                {{ $data->feature3 }}</small>
                                        @endif
                                        @if ($data->feature4 != 'N/A')
                                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary">
                                                {{ $data->feature4 }}</small>
                                        @endif
                                        @if ($data->feature5 != 'N/A')
                                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary">
                                                {{ $data->feature5 }}</small>
                                        @endif
                                        @if ($data->feature6 != 'N/A')
                                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary">
                                                {{ $data->feature6 }}</small>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-body-tertiary border-top">
                        <div class="row">
                            <div class="col-lg col-xxl-5">
                                <h6 class="fw-semi-bold ls mb-3 text-uppercase">Featured Image</h6>
                                <div class="row">

                                    <div class="col">
                                        @foreach ($image['featured'] as $img)
                                            <img class="full-width" src="{{ asset('/uploads/featurd/' . $img->link) }}"
                                                alt="">
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg col-xxl-5 mt-4 mt-lg-0 offset-xxl-1">
                                <h6 class="fw-semi-bold ls mb-3 text-uppercase">Gallery Image</h6>
                                <div class="row">
                                    @foreach ($image['gallery'] as $img)
                                        <img class="half-width" class="col-6 col-sm-6"
                                            src="{{ asset('/uploads/gallery/' . $img->link) }}" alt="">
                                    @endforeach

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top text-end"><a class="btn btn-falcon-default btn-sm"
                            href="#!"><svg class="svg-inline--fa fa-dollar-sign fa-w-9 fs-11 me-1" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="dollar-sign" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                                </path>
                            </svg><!-- <span class="fas fa-dollar-sign fs-11 me-1"></span> Font Awesome fontawesome.com -->Refund</a><a
                            class="btn btn-falcon-default btn-sm ms-2" href="#!"><svg
                                class="svg-inline--fa fa-check fa-w-16 fs-11 me-1" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                </path>
                            </svg><!-- <span class="fas fa-check fs-11 me-1"></span> Font Awesome fontawesome.com -->Save
                            changes</a></div>

                    <div class="card-body bg-body-tertiary border-top">
                        <div class="col-auto">
                            <a class="rounded-2 d-flex align-items-center me-3" href="#!">
                                <img src="{{ asset('/images/comment-active.png') }} " width="20" alt="">
                                <span  class="ms-1">Comment</span>
                            </a>
                        </div>
                        @foreach ($comment as $comt)
                        <div class="flex-1 ms-2 fs-10">
                            <p class="mb-1 bg-200 rounded-3 p-2"><a class="fw-semi-bold"
                                    href="">{{$comt->name }}</a> 
                                   {{  $comt->comment}}
                                </p>
                            <div class="px-2"><a href="#!">Like</a> • <a href="#!">Reply</a> • 23min </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            @endsection
