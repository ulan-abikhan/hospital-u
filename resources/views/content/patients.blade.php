@extends('layouts/blankLayout')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
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
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="mdi mdi-information mdi-20px me-1"></i>Пациенты</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('dash') }}"><i
                            class="mdi mdi-newspaper-variant mdi-20px me-1"></i>Статистика</a></li>


            </ul>

            <div class="table-responsive">
                <h5 class="card-header">Пациенты</h5>

                <div class="card-header row mb-5">
                    @foreach ($users as $user)
                        <div class="col-md-6 col-lg-3" style="margin: 20px;">
                            <div class="card h-100">
                                @if (isset($user->photo))
                                    <img class="d-block w-px-200 h-px-200 rounded" style="margin: 20px auto;"
                                        src="{{ $user->photo }}" alt="User image cap" />
                                @else
                                    <img class="d-block w-px-200 h-px-200 rounded" style="margin: 20px auto;"
                                        src="{{ asset('assets/img/avatars/1.png') }}" alt="User image cap" />
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>

                                    <a href="{{ url('patients/' . $user->id) }}" class="btn btn-outline-primary">Инфо</a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
