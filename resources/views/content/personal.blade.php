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
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . $hospital->id) }}/departments"><i
                            class="mdi mdi-domain mdi-20px me-1"></i> Отделы</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="mdi mdi-account mdi-20px me-1"></i> Администрация</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . $hospital->id) }}/news"><i
                            class="mdi mdi-newspaper-variant mdi-20px me-1"></i> Новости</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/services") }}"><i
                            class="mdi mdi-sitemap mdi-20px me-1"></i> Услуги</a>
                </li>


            </ul>
            <h4 class="card-header">Новости</h4>

            <div class="card-header row mb-5">
                @foreach ($doctors as $doctor)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ $doctor->photo }}" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $doctor->name }}</h5>
                                <p class="card-text"
                                    style="max-height: calc(2 * 1.4em);overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
                                    {{ $doctor->job }}
                                </p>
                                <a href="{{ url('personal/' . $doctor->id) }}"
                                    class="btn btn-outline-primary">Подробнее</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
