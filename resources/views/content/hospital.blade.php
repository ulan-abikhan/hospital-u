@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 mb-4">
        {{ $hospital->name }}
    </h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <ul class="nav nav-pills card-header flex-column flex-md-row mb-4 gap-2 gap-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                                class="mdi mdi-view-dashboard mdi-20px me-1"></i> Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/info") }}"><i
                                class="mdi mdi-information mdi-20px me-1"></i> О центре</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id/departments") }}"><i
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

                <h4 class="card-header">Информация</h4>

                <h4 class="card-header">Адрес: {{ $hospital->address }}</h4>

                <h4 class="card-header">Номер телефона: {{ $hospital->phone }}</h4>

                <h4 class="card-header">БИН: {{ $hospital->bin }}</h4>

                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img style="max-width:100%;" src="{{ asset($hospital->photo) }}" alt="user-avatar"
                            class="d-block w-px-240 h-px-240 rounded" id="uploadedAvatar" />
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img class="card-img card-img-left" src="{{ asset('assets/img/elements/12.jpg') }}"
                                        alt="Card image" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ВСЕГДА ОТКРЫТ</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img class="card-img card-img-left" src="{{ asset('assets/img/elements/12.jpg') }}"
                                        alt="Card image" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ВРАЧИ-СПЕЦИАЛИСТЫ
                                        </h5>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img class="card-img card-img-left" src="{{ asset('assets/img/elements/12.jpg') }}"
                                        alt="Card image" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">ЛАБОРАТОРНЫЙ ТЕСТ</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
