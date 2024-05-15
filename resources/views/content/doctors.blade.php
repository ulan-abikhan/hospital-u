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
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <h5 class="card-header">Докторы</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th class="text-truncate">Имя доктора</th>
                                <th class="text-truncate">Должность</th>
                                <th class="text-truncate">Пн</th>
                                <th class="text-truncate">Вт</th>
                                <th class="text-truncate">Ср</th>
                                <th class="text-truncate">Чт</th>
                                <th class="text-truncate">Пт</th>
                                <th class="text-truncate">Сб</th>
                                <th class="text-truncate">Вс</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                                <tr onclick="window.location='{{ url("/doctors/{$doctor->id}?service_id={$service_id}") }}';"
                                    style="cursor:pointer;">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6 class="mb-0 text-truncate">{{ $doctor->name }}</h6>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-truncate"><i class="mdi mdi-laptop mdi-24px text-danger me-1"></i>
                                        {{ $doctor->job }}</td>

                                    <td class="text-truncate">{{ $doctor->monday }}</td>
                                    <td class="text-truncate">{{ $doctor->tuesday }}</td>
                                    <td class="text-truncate">{{ $doctor->wednesday }}</td>
                                    <td class="text-truncate">{{ $doctor->thursday }}</td>
                                    <td class="text-truncate">{{ $doctor->friday }}</td>
                                    <td class="text-truncate">{{ $doctor->saturday }}</td>
                                    <td class="text-truncate">{{ $doctor->sunday }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
