@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <h5 class="card-header">Медицинские центры</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
            <tr>
              <th class="text-truncate">Имя</th>
              <th class="text-truncate">Адрес</th>
              <th class="text-truncate">Рейтинг</th>
              <th class="text-truncate">БИН</th>
              <th class="text-truncate">Телефон</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hospitals as $hospital)
              <tr onclick="window.location='{{ url("/hospitals/{$hospital->id}") }}';" style="cursor:pointer;">
                <td>
                  <div class="d-flex align-items-center">
                    <div>
                      <h6 class="mb-0 text-truncate">{{$hospital->name}}</h6>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">{{$hospital->address}}</td>
                <td class="text-truncate"><i class="mdi mdi-star mdi-24px text-danger me-1"></i> {{$hospital->rating}}</td>
                <td class="text-truncate">{{$hospital->bin}}</td>
                <td class="text-truncate">{{$hospital->phone}}</td>
              </tr>
            @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
