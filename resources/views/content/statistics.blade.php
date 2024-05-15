@extends('layouts/blankLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 mb-4" style="margin: 20px;">
        {{ auth()->user()->name }}
    </h4>

    <div class="col-11" style="margin: 20px;">

        <div class="card mb-4">
            <ul class="nav nav-pills card-header flex-column flex-md-row mb-4 gap-2 gap-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('admin') }}"><i
                            class="mdi mdi-view-dashboard mdi-20px me-1"></i>Записи</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('patients') }}"><i
                            class="mdi mdi-information mdi-20px me-1"></i>Пациенты</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="mdi mdi-newspaper-variant mdi-20px me-1"></i>Статистика</a></li>



            </ul>
        </div>
        <div class="row gy-4">
            <!-- Congratulations card -->
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-1">Количество записей! 🎉</h4>

                        <h4 class="text-primary mb-1">{{ $records }}</h4>

                    </div>
                    <img src="{{ asset('assets/img/icons/misc/triangle-light.png') }}"
                        class="scaleX-n1-rtl position-absolute bottom-0 end-0" width="166" alt="triangle background">
                    <img src="{{ asset('assets/img/illustrations/trophy.png') }}"
                        class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2" width="83"
                        alt="view sales">
                </div>
            </div>
            <!--/ Congratulations card -->

            <!-- Transactions -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Общая статистика</h5>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-primary rounded shadow">
                                            <i class="mdi mdi-domain mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Отделы</div>
                                        <h5 class="mb-0">{{ $departments }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded shadow">
                                            <i class="mdi mdi-account-outline mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Пациенты</div>
                                        <h5 class="mb-0">{{ $users }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-warning rounded shadow">
                                            <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Докторы</div>
                                        <h5 class="mb-0">{{ $doctors }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded shadow">
                                            <i class="mdi mdi-pencil mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Записи</div>
                                        <h5 class="mb-0">{{ $records }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Transactions -->

            <!-- Weekly Overview Chart -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Статистика недели</h5>

                        </div>
                    </div>
                    <div class="card-body">
                        <div id="weeklyOverviewChart"></div>
                        <div class="mt-1 mt-md-3">
                            <div class="d-flex align-items-center gap-3">
                                <h3 class="mb-0">20%</h3>
                                <p class="mb-0">Количество записей стало больше на 20%</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/ Weekly Overview Chart -->

            <!-- Total Earnings -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Доходы</h5>

                    </div>
                    <div class="card-body">
                        <div class="mb-3 mt-md-3 mb-md-5">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">120 000 ₸</h2>
                                <span class="text-success ms-2 fw-medium">
                                    <i class="mdi mdi-menu-up mdi-24px"></i>
                                    <small>10%</small>
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--/ Total Earnings -->

            <!-- Four Cards -->
            <div class="col-xl-4 col-md-6">
                <div class="row gy-4">
                    <!-- Total Profit line chart -->
                    <div class="col-sm-6">
                        <div class="card h-100">
                            <div class="card-header pb-0">
                                <h4 class="mb-0">{{ $records }}</h4>
                            </div>
                            <div class="card-body">
                                <div id="totalProfitLineChart" class="mb-3"></div>
                                <h6 class="text-center mb-0">Количество записей</h6>
                            </div>
                        </div>
                    </div>
                    <!--/ Total Profit line chart -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-6">
                        <div class="card h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="avatar">
                                    <div class="avatar-initial bg-secondary rounded-circle shadow">
                                        <i class="mdi mdi-poll mdi-24px"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body mt-mg-1">
                                <h6 class="mb-2">Общее количество пользователей</h6>
                                <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                    <h4 class="mb-0 me-2">{{ $users }}</h4>
                                    <small class="text-success mt-1">+15%</small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/ Total Profit Weekly Project -->

                    <!-- Sessions chart -->
                    <div class="col-sm-6">
                        <div class="card h-100">
                            <div class="card-header pb-0">
                                <h4 class="mb-0">2.85%</h4>
                            </div>
                            <div class="card-body">
                                <div id="sessionsColumnChart" class="mb-3"></div>
                                <h6 class="text-center mb-0">Коэффициент эффективности</h6>
                            </div>
                        </div>
                    </div>
                    <!--/ Sessions chart -->
                </div>
            </div>
            <!--/ Total Earning -->

            <!-- Data Tables -->
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-truncate">Сотрудник</th>
                                    <th class="text-truncate">Работа</th>
                                    <th class="text-truncate">Статус</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($persons as $person)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm me-3">
                                                    <img src="{{ url($person->photo) }}" alt="Avatar"
                                                        class="rounded-circle">
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-truncate">{{ $person->name }}</h6>
                                                    <small class="text-truncate">{{ $person->name }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-truncate">{{ $person->job }}</td>
                                        <td><span class="badge bg-label-success rounded-pill">Работает</span></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Data Tables -->
        </div>

    </div>

@endsection
