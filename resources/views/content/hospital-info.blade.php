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
                    <li class="nav-item"><a class="nav-link" href="{{ url('hospitals/' . "$hospital->id") }}"><i
                                class="mdi mdi-view-dashboard mdi-20px me-1"></i> Главная</a></li>
                    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
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

                <h4 class="card-header">Информация о центре</h4>

                <h4 class="card-header">Адрес: {{ $hospital->address }}</h4>

                <h4 class="card-header">Номер телефона: {{ $hospital->phone }}</h4>

                <h4 class="card-header">БИН: {{ $hospital->bin }}</h4>

                <h4 class="card-header">Почта: {{ $hospital->email }}</h4>

                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img style="max-width:100%;" src="{{ asset($hospital->photo) }}" alt="user-avatar"
                            class="d-block w-px-240 h-px-240 rounded" id="uploadedAvatar" />
                    </div>
                </div>


                <div class="card-body pt-2 mt-1">

                    <h3>
                        Миссия
                    </h3>
                    <p>
                        «Создание эффективной системы оказания онкологической медицинской помощи способствующей улучшению
                        качества жизни населения Республики Казахстан» Наш девиз: Дарить людям надежду, улыбку и добро. Наша
                        цель: Оказание качественной специализированной и высокотехнологичной квалифицированной медицинской
                        помощи.
                    </p>

                    <h3>
                        Видение
                    </h3>

                    <p>
                        Повышая качество наших услуг, мы стремимся к следующему Видению нашей организации - это: Оказывающая
                        современную специализированную и высокотехнологичную квалифицированную медицинскую помощь;
                        управляемое командой профессионалов; укомплектованное высококвалифицированными специалистами;
                        оснащенное высокотехнологичным оборудованием; оказывающее качественную медицинскую помощь при
                        высоком уровне сервиса.
                    </p>


                    <h3>
                        Ценности
                    </h3>

                    <p>
                        Уважение и отзывчивость к проблемам пациентов; Приоритетное значение удовлетворенности пациентов;
                        Гордость персонала за свою больницу; Сохранение кадров, истории, традиций учреждения; Работа каждого
                        во благо пациента; Удержание лидерства в медицинской сфере.
                    </p>

                    <h3>
                        Карты
                    </h3>

                </div>



                <div id="mapBlock"></div>

                <script src="https://maps.api.2gis.ru/2.0/loader.js?lazy=true"></script>

                <script>
                    function initMap() {
                        var container = document.createElement("div"),
                            mapBlock = document.getElementById("mapBlock");


                        container.id = "map";
                        container.style.width = "100%";
                        container.style.height = "400px";
                        mapBlock.appendChild(container);
                        var map;
                        DG.then(function() {
                            map = DG.map("map", {
                                center: {!! json_encode($coordinates) !!},
                                zoom: 20,
                            });

                            DG.marker({!! json_encode($coordinates) !!}).addTo(map);
                        });
                    };

                    initMap();
                </script>

            </div>
        </div>
    </div>
@endsection
