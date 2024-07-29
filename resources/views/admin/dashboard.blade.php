@extends('admin.layout')

@section('content')
    <div class="row g-3 mb-3">
        <div class="col-xxl-6 col-xl-12">
            <div class="row g-3">
                <div class="col-12">
                    <div class="card bg-transparent-50 overflow-hidden">
                        <div class="card-header position-relative">
                            <div class="bg-holder d-none d-md-block bg-card z-1"
                                style="background-image:url({{ asset('/images/ecommerce-bg.png') }} );background-size:230px;background-position:right bottom;z-index:-1;">
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
                        <div class="card-body p-0">
                            <ul class="mb-0 list-unstyled list-group font-sans-serif">
                                <li
                                    class="list-group-item mb-0 rounded-0 py-3 px-x1 list-group-item-warning border-x-0 border-top-0">
                                    <div class="row flex-between-center">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="fas fa-circle mt-1 fs-11"></div>
                                                <p class="fs-10 ps-2 mb-0"><strong>5 products</strong> didn’t publish to
                                                    your Facebook page</p>
                                            </div>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><a
                                                class="fs-10 fw-medium text-warning-emphasis" href="#!">View products<i
                                                    class="fas fa-chevron-right ms-1 fs-11"></i></a></div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item mb-0 rounded-0 py-3 px-x1 greetings-item text-700 border-x-0 border-top-0">
                                    <div class="row flex-between-center">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="fas fa-circle mt-1 fs-11 text-primary"></div>
                                                <p class="fs-10 ps-2 mb-0"><strong>7 orders</strong> have payments that need
                                                    to be captured</p>
                                            </div>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><a class="fs-10 fw-medium"
                                                href="#!">View payments<i
                                                    class="fas fa-chevron-right ms-1 fs-11"></i></a></div>
                                    </div>
                                </li>
                                <li class="list-group-item mb-0 rounded-0 py-3 px-x1 greetings-item text-700  border-0">
                                    <div class="row flex-between-center">
                                        <div class="col">
                                            <div class="d-flex">
                                                <div class="fas fa-circle mt-1 fs-11 text-primary"></div>
                                                <p class="fs-10 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-auto d-flex align-items-center"><a class="fs-10 fw-medium"
                                                href="#!">View orders<i
                                                    class="fas fa-chevron-right ms-1 fs-11"></i></a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-12">
                    <div class="card py-3 mb-3">
                        <div class="card-body py-3">
                            <div class="row g-0">
                                <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                                    <h6 class="pb-1 text-700">Weekly Ads </h6>
                                    <p class="font-sans-serif lh-1 mb-1 fs-7">{{ $data['weeklyCount'] }} </p>
                                    <div class="d-flex align-items-center">
                                        <h6 class="fs-11 ps-3 mb-0 text-primary"><span
                                                class="me-1 fas fa-caret-up"></span>{{ $data['WeeklyPresentageData'] }} %
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 border-200 border-bottom border-end-md pb-4 ps-3">
                                    <h6 class="pb-1 text-700">Weekly users </h6>
                                    <p class="font-sans-serif lh-1 mb-1 fs-7">1,054 </p>
                                    <div class="d-flex align-items-center">
                                        <h6 class="fs-10 text-500 mb-0">13,675 </h6>
                                        <h6 class="fs-11 ps-3 mb-0 text-warning"><span
                                                class="me-1 fas fa-caret-up"></span>21.8%</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-md-4 border-200 border-bottom border-end border-end-md-0 pb-4 pt-4 pt-md-0 ps-md-3">
                                    <h6 class="pb-1 text-700">Weekly Comments </h6>
                                    <p class="font-sans-serif lh-1 mb-1 fs-7">{{ $data['MonthlyAdslyCount'] }} </p>
                                    <div class="d-flex align-items-center">
                                        <h6 class="fs-10 text-500 mb-0">13,675 </h6>
                                        <h6 class="fs-11 ps-3 mb-0 text-success"><span
                                                class="me-1 fas fa-caret-up"></span>21.8%</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-6 col-md-4 border-200 border-bottom border-bottom-md-0 border-end-md pt-4 pb-md-0 ps-3 ps-md-0">
                                    <h6 class="pb-1 text-700">Monthly Ads </h6>
                                    <p class="font-sans-serif lh-1 mb-1 fs-7">{{ $data['MonthlyAdslyCount'] }} </p>
                                    <div class="d-flex align-items-center">

                                        <h6 class="fs-11 ps-3 mb-0 text-danger"><span
                                                class="me-1 fas fa-caret-up"></span>{{ $data['MonthlyPresentageData'] }} %
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 border-200 border-bottom-md-0 border-end pt-4 pb-md-0 ps-md-3">
                                    <h6 class="pb-1 text-700">Monthly User </h6>
                                    <p class="font-sans-serif lh-1 mb-1 fs-7">$365.53 </p>
                                    <div class="d-flex align-items-center">
                                        <h6 class="fs-10 text-500 mb-0">13,675 </h6>
                                        <h6 class="fs-11 ps-3 mb-0 text-success"><span
                                                class="me-1 fas fa-caret-up"></span>21.8%</h6>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                                    <h6 class="pb-1 text-700">Monthly comments </h6>
                                    <p class="font-sans-serif lh-1 mb-1 fs-7">861 </p>
                                    <div class="d-flex align-items-center">
                                        <h6 class="fs-10 text-500 mb-0">13,675 </h6>
                                        <h6 class="fs-11 ps-3 mb-0 text-info"><span
                                                class="me-1 fas fa-caret-up"></span>21.8%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="g-3 mb-3 row">
                <div class="col-xxl-3 col-md-6">
                    <div class="h-md-100 card">
                        <div class="card-body">
                            <div class="justify-content-between g-0 row">
                                <div class="pe-2 col-xxl col-sm-6 col-5">
                                    <h6 class="mt-1">Top Category</h6>
                                    <div class="d-flex justify-content-between align-items-center fw-semibold fs-11 mt-3">
                                        <p class="mb-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="circle"
                                                class="svg-inline--fa fa-circle fa-w-16 me-2 text-primary" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                </path>
                                            </svg>Samsung
                                        </p>
                                        <div class="d-xxl-none">58%</div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center fw-semibold fs-11 false">
                                        <p class="mb-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="circle" class="svg-inline--fa fa-circle fa-w-16 me-2 text-info"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                </path>
                                            </svg>Huawei
                                        </p>
                                        <div class="d-xxl-none">21%</div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center fw-semibold fs-11 false">
                                        <p class="mb-1">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="circle" class="svg-inline--fa fa-circle fa-w-16 me-2 text-300"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                </path>
                                            </svg>Apple
                                        </p>
                                        <div class="d-xxl-none">22%</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="ps-0">
                                        <div class="echarts-for-react " _echarts_instance_="ec_1704878202878"
                                            size-sensor-id="3"
                                            style="height: 6.625rem; width: 6.625rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                                            <div
                                                style="position: relative; width: 106px; height: 106px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                                <canvas data-zr-dom-id="zr_0" width="212" height="212"
                                                    style="position: absolute; left: 0px; top: 0px; width: 106px; height: 106px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                            </div>
                                            <div class=""
                                                style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px sans-serif; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(-109px, 47px, 0px); border-color: rgb(216, 226, 239); pointer-events: none; visibility: hidden; opacity: 0;">
                                                <strong>Samsung:</strong> 57.61%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <div class="h-100 card">
                        <div class="pb-0 card-header">
                            <div class="align-items-center g-2 row">
                                <div class="col">
                                    <h6 class="mb-0">Weather</h6>
                                </div>
                                <div class="text-right col-auto">
                                    <div class="font-sans-serif btn-reveal-trigger dropdown">
                                        <button type="button" id="react-aria4565791148-:r5:" aria-expanded="false"
                                            data-boundary="viewport"
                                            class="text-600 btn-reveal dropdown-toggle btn btn-reveal btn-sm">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="ellipsis-h" class="svg-inline--fa fa-ellipsis-h fa-w-16 fs-11"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 card-body">
                            <div class="g-0 h-100 align-items-center row">
                                <div class="d-flex align-items-center col">
                                    <img class="me-3"
                                        src="data:image/png;base64,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"
                                        alt="" height="60">
                                    <div>
                                        <h6 class="mb-2">New York City</h6>
                                        <div class="fs-11 fw-semibold">
                                            <div class="text-warning">Sunny</div>Precipitation: 50%
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center ps-2 col-auto">
                                    <div class="fs-5 fw-normal font-sans-serif text-primary mb-1 lh-1">31°</div>
                                    <div class="fs-10 text-800">32° / 25°</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
