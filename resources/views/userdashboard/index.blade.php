@extends('layouts.userdashboard')

@section('content')
    <main>

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
                                    <p class="mb-4">
                                        You are welcome to<span class="fw-medium"> Loan application</span>. Check your Profile
                                        if it need to be updated
                                    </p>

                                    <a href="" class="btn btn-sm btn-outline-primary">View
                                        Profile</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="dashboards/assets/img/illustrations/man-with-laptop-light.png" height="140"
                                        alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/chart-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="">View More</a>
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-medium d-block mb-1">All Post</span>
                                    <h3 class="card-title mb-2">12</h3>
                                    {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="">View
                                                    More</a>
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <span>All Category</span>
                                    <h3 class="card-title text-nowrap mb-1">2</h3>
                                    {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/chart-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="">View More</a>
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-medium d-block mb-1">All User</span>
                                    <h3 class="card-title mb-2">30</h3>
                                    {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="">View
                                                    More</a>
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <span>All Trashed Post</span>
                                    <h3 class="card-title text-nowrap mb-1">23</h3>
                                    {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/chart-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-medium d-block mb-1">Admin</span>
                                    <h3 class="card-title mb-2">23</h3>
                                    {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/wallet-info.png"
                                                alt="Credit Card" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt6"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <span>Writter</span>
                                    <h3 class="card-title text-nowrap mb-1">34
                                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/chart-success.png"
                                                alt="chart success" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-medium d-block mb-1">All Advertisement</span>
                                    <h3 class="card-title mb-2">23</h3>
                                    {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="dashboards/assets/img/icons/unicons/wallet-info.png"
                                                alt="Credit Card" class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt6"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>All Message</span>
                                    <h3 class="card-title text-nowrap mb-1">34
                                        {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
