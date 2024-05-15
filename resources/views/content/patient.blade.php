@extends('layouts/blankLayout')

@section('title', 'Dashboard - Analytics')

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-11" style="margin: 20px;">
            <div class="card mb-4">
                <h4 class="card-header">Ифнормация о пациенте</h4>

                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        @if (isset($user->photo))
                            <img src="{{ url($user->photo) }}" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded"
                                id="uploadedAvatar" />
                        @else
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar"
                                class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                        @endif


                        <h4 class="card-header">{{ $user->name }}</h4>

                    </div>
                </div>

                <div class="card-body">

                    <div class="col-lg-6 mb-4 mb-xl-0">
                        <h5 class="text-light fw-medium">Медицинская история</h5>
                        <div class="demo-inline-spacing mt-3">
                            @foreach ($records as $record)
                                <div class="col-sm-6 col-lg-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Диагноз: {{ $record->recordInfo->diagnose }}</h5>
                                            <h5 class="card-title">Доктор: {{ $record->doctor_name }}</h5>
                                            <h6 class="card-text">Услуга: {{ $record->service_name }}</h6>

                                            <p class="card-text">Примечание: {{ $record->recordInfo->note }}</p>

                                            <p class="card-text"><small class="text-muted">Дата:
                                                    {{ $record->recordInfo->created_at }}
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
