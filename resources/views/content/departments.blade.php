@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
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
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="mdi mdi-domain mdi-20px me-1"></i> Отделы</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/personal") }}"><i
                            class="mdi mdi-account mdi-20px me-1"></i> Администрация</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/news") }}"><i
                            class="mdi
                    mdi-newspaper-variant mdi-20px me-1"></i> Новости</a>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/services") }}"><i
                            class="mdi mdi-sitemap mdi-20px me-1"></i> Услуги</a>
                </li>

            </ul>
            <h4 class="card-header">Отделы</h4>

            <div class="row mb-5">
                @foreach ($departments as $department)
                    <div class="col-md-6 col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $department->name }}</h5>
                                <a href="{{ url('departments/' . $department->id) }}" class="btn btn-primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
