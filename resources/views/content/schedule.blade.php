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
    @csrf
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <h5 class="card-header">График на {{ $date }}</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th class="text-truncate">Время</th>
                                <th class="text-truncate">Записан</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($timeSlots as $timeSlot)
                                @if ($timeSlot['is_available'])
                                    <tr style="cursor:pointer;" class="time-slot-row" data-from="{{ $timeSlot['from'] }}"
                                        data-to="{{ $timeSlot['to'] }}" data-date="{{ $date }}"
                                        data-doctor="{{ $doctorId }}" data-client="{{ auth()->user()->id }}"
                                        data-service="{{ $service_id }}">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="mb-0 text-truncate">
                                                        {{ $timeSlot['from'] . ' - ' . $timeSlot['to'] }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="mb-0 text-truncate">
                                                        {{ $timeSlot['from'] . ' - ' . $timeSlot['to'] }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $timeSlot['name'] }}
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            jQuery(document).ready(function() {
                jQuery('.time-slot-row').click(function() {
                    console.log("Clicked")
                    const from = jQuery(this).data('from');
                    const to = jQuery(this).data('to');
                    const date = jQuery(this).data('date');
                    const userId = jQuery(this).data('client');
                    const doctorId = jQuery(this).data('doctor');
                    const serviceId = jQuery(this).data('service');

                    // Send POST request using AJAX
                    jQuery.ajax({
                        url: '/schedules',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            from: from,
                            to: to,
                            date: date,
                            doctor_id: doctorId,
                            client_id: userId,
                            service_id: serviceId
                        },
                        success: function(response) {
                            // Handle success response
                            console.log(response);
                            toastr.success('Appointment successfully created');

                            // Reload the page after a short delay
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            // Handle error
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
        </script>
    @endsection
