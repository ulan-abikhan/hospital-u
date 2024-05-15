@extends('layouts/blankLayout')


@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
    @include('layouts/sections/navbar/navbar')

    <h4 class="py-3 mb-4" style="margin: 20px;">
        {{ auth()->user()->name }}
    </h4>
    <div class="col-11" style="margin: 20px;">
        <div class="card mb-4">
            <ul class="nav nav-pills card-header flex-column flex-md-row mb-4 gap-2 gap-lg-0">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="mdi mdi-view-dashboard mdi-20px me-1"></i>Записи</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('patients') }}"><i
                            class="mdi mdi-information mdi-20px me-1"></i>Пациенты</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('dash') }}"><i
                            class="mdi mdi-newspaper-variant mdi-20px me-1"></i>Статистика</a></li>




            </ul>

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
                                <th class="text-truncate">Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                                <tr>
                                    <td class="text-truncate">{{ $record->client_name }}</td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6 class="mb-0 text-truncate">{{ $record->doctor_name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-truncate">{{ $record->service_name }}</td>
                                    <td class="text-truncate"><i class="mdi mdi-laptop mdi-24px text-danger me-1"></i>
                                        {{ $record->date }}</td>
                                    <td class="text-truncate">{{ $record->start . ' - ' . $record->end }}</td>
                                    @if (!$record->checked)
                                        <td class="text-truncate">
                                            <a class="btn btn-primary"
                                                href="{{ url('records/' . $record->id) }}">Написать</a>
                                        </td>
                                    @else
                                        <td class="text-truncate"></td>
                                    @endif
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
