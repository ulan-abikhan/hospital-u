@extends('layouts/contentNavbarLayout')

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
    <h4 class="py-3 mb-4">
        {{ $hospital->name }}
    </h4>
    <div class="col-12">
        <div class="card mb-4">
            <ul class="nav nav-pills card-header flex-column flex-md-row mb-4 gap-2 gap-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . $hospital->id) }}"><i
                            class="mdi mdi-view-dashboard mdi-20px me-1"></i> Главная</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . $hospital->id) }}/info"><i
                            class="mdi mdi-information mdi-20px me-1"></i> О центре</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:void(0);"><i
                            class="mdi mdi-domain mdi-20px me-1"></i> Отделы</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/personal") }}"><i
                            class="mdi mdi-account mdi-20px me-1"></i> Администрация</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/news") }}"><i
                            class="mdi
                    mdi-newspaper-variant mdi-20px me-1"></i> Новости</a>
                </li>

                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="mdi mdi-sitemap mdi-20px me-1"></i> Услуги</a>
                </li>

            </ul>
            <h4 class="card-header">Услуги</h4>

            <div class="table-responsive">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th class="text-truncate">Номер услуги</th>
                                <th class="text-truncate">Услуга</th>
                                <th class="text-truncate">Цена</th>
                                <th class="text-truncate">Кабинет</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr onclick="window.location='{{ url("/services/{$service->id}/doctors") }}';"
                                    style="cursor:pointer;">
                                    <td class="text-truncate">{{ $service->id }}</td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6 class="mb-0 text-truncate">{{ $service->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate"><i class="mdi mdi-laptop mdi-24px text-danger me-1"></i>
                                        {{ $service->price }}</td>
                                    <td class="text-truncate">{{ $service->parlor }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
