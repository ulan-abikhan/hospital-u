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

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h4 class="card-header">Ифнормация о докторе</h4>

                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        @if (isset($doctor->photo))
                            <img src="{{ url($doctor->photo) }}" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded"
                                id="uploadedAvatar" />
                        @else
                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt="user-avatar"
                                class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                        @endif

                        <h4 class="card-header">{{ $doctor->job }}</h4>

                        <h4 class="card-header">{{ $doctor->name }}</h4>

                    </div>
                </div>

                <div class="card-body">

                    <div class="col-lg-6 mb-4 mb-xl-0">
                        <small class="text-light fw-medium">Услуги</small>
                        <div class="demo-inline-spacing mt-3">
                            <ol class="list-group list-group-numbered">
                                @foreach ($doctor->services as $service)
                                    <li class="list-group-item">{{ $service->name }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="col-lg-6 mb-4 mb-xl-0">
                        <small class="text-light fw-medium">График работы</small>
                        <div class="demo-inline-spacing mt-3">
                            <div class="list-group">
                                <a href="{{ url("/doctors/{$doctor->id}/schedules/{$doctor->mondayc}?service_id={$service_id}") }}"
                                    class="list-group-item list-group-item-action {{ $doctor->monday ? '' : 'disabled' }}">
                                    Пн
                                    {{ $doctor->monday ? $doctor->monday['start'] . '-' . $doctor->monday['end'] : 'Выходной' }}</a>
                                <a href="{{ url("/doctors/{$doctor->id}/schedules/{$doctor->tuesdayc}?service_id={$service_id}") }}"
                                    class="list-group-item list-group-item-action {{ $doctor->tuesday ? '' : 'disabled' }}">
                                    Вт
                                    {{ $doctor->tuesday ? $doctor->tuesday['start'] . '-' . $doctor->tuesday['end'] : 'Выходной' }}
                                </a>
                                <a href="{{ url("/doctors/{$doctor->id}/schedules/{$doctor->wednesdayc}?service_id={$service_id}") }}"
                                    class="list-group-item list-group-item-action {{ $doctor->wednesday ? '' : 'disabled' }}">
                                    Ср
                                    {{ $doctor->wednesday ? $doctor->wednesday['start'] . '-' . $doctor->wednesday['end'] : 'Выходной' }}
                                </a>
                                <a href="{{ url("/doctors/{$doctor->id}/schedules/{$doctor->thursdayc}?service_id={$service_id}") }}"
                                    class="list-group-item list-group-item-action {{ $doctor->thursday ? '' : 'disabled' }}">
                                    Чт
                                    {{ $doctor->thursday ? $doctor->thursday['start'] . '-' . $doctor->thursday['end'] : 'Выходной' }}
                                </a>
                                <a href="{{ url("/doctors/{$doctor->id}/schedules/{$doctor->fridayc}?service_id={$service_id}") }}"
                                    class="list-group-item list-group-item-action {{ $doctor->friday ? '' : 'disabled' }}">
                                    Пт
                                    {{ $doctor->friday ? $doctor->friday['start'] . '-' . $doctor->friday['end'] : 'Выходной' }}
                                </a>
                                <a href="{{ url("/doctors/{$doctor->id}/schedules/{$doctor->saturdayc}?service_id={$service_id}") }}"
                                    class="list-group-item list-group-item-action {{ $doctor->saturday ? '' : 'disabled' }}">
                                    Сб
                                    {{ $doctor->saturday ? $doctor->saturday['start'] . '-' . $doctor->saturday['end'] : 'Выходной' }}
                                </a>
                                <a href="{{ url("/doctors/{$doctor->id}/schedules/{$doctor->sundayc}?service_id={$service_id}") }}"
                                    class="list-group-item list-group-item-action {{ $doctor->sunday ? '' : 'disabled' }}">
                                    Вс
                                    {{ $doctor->sunday ? $doctor->sunday['start'] . '-' . $doctor->sunday['end'] : 'Выходной' }}
                                </a>

                            </div>
                        </div>


                    </div>


                </div>

                <div class="card-body">

                    <div class="form-floating form-floating-outline mb-4">
                        <input class="form-control" type="date" id="html5-date-input" />
                        <label for="html5-date-input">Date</label>
                    </div>

                    <button id="select-button" class="btn btn-primary" type="submit">Выбрать</button>


                </div>

            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var input = document.getElementById('html5-date-input');
            var selectButton = document.getElementById('select-button');
            var today = new Date();
            var dayOfWeek = today.getDay();
            var todayISOString = today.toISOString().split('T')[0];

            var allowedDays = {!! json_encode($day_array) !!};

            input.addEventListener('input', function() {
                var selectedDate = new Date(this.value);
                var selectedDayOfWeek = selectedDate.getDay();
                var selectedISOString = selectedDate.toISOString().split('T')[0];

                if (selectedISOString < todayISOString || (!allowedDays.includes(selectedDayOfWeek))) {
                    this.value = ''; // Reset value if not Monday or Tuesday or before today
                }
            });

            selectButton.addEventListener('click', function() {
                var doctorId = {{ $doctor->id }};
                var selectedDate = input.value;

                // Construct the new URL
                var newUrl = '/doctors/' + doctorId + '/schedules/' + selectedDate +
                    "?service_id=" + {{ $service_id }};

                // Redirect to the new URL
                window.location.href = newUrl;
            });
        });
    </script>

@endsection
