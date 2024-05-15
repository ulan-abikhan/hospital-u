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
                <h5 class="card-header">Записи</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th class="text-truncate">Клиент </th>
                                <th class="text-truncate">Доктор</th>
                                <th class="text-truncate">Услуга</th>
                                <th class="text-truncate">Дата</th>
                                <th class="text-truncate">Время</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                                <tr>
                                    <td class="text-truncate">{{ $record->client }}</td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6 class="mb-0 text-truncate">{{ $record->doctor }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">{{ $record->department }}</td>
                                    <td class="text-truncate"><i class="mdi mdi-laptop mdi-24px text-danger me-1"></i>
                                        {{ $record->date }}</td>
                                    <td class="text-truncate">{{ $record->start . ' - ' . $record->end }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
