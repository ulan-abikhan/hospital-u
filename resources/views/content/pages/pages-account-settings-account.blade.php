@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
  <script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Настройки профиля /</span> Профиль
  </h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-4 gap-2 gap-lg-0">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
              class="mdi mdi-account-outline mdi-20px me-1"></i>Аккаунт</a></li>
      </ul>
      <div class="card mb-4">
        <h4 class="card-header">Детали профиля</h4>

        <h4 class="card-header">{{auth()->user()->email}}</h4>
        <!-- Account -->
        <form id="formAccountSettings" method="POST" action="{{ route('update-user') }}" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              @if(isset(auth()->user()->photo))
                <img src="{{url(auth()->user()->photo)}}" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded"
                     id="uploadedAvatar"/>
              @else
                <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar"
                     class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar"/>
              @endif
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                  <span class="d-none d-sm-block">Загрузить новое фото</span>
                  <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                  <input type="file" id="upload" class="account-file-input" name="photo" hidden accept="image/png, image/jpeg"/>
                </label>

                <div class="text-muted small">Расширения JPG, GIF или PNG. Максимальный размер 800 кб</div>
              </div>
            </div>
          </div>
          <div class="card-body pt-2 mt-1">
            <div class="row mt-2 gy-4">
              <div class="col-md-6">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="text" id="firstName" name="name"
                         value="{{auth()->user()->name}}" autofocus/>
                  <label for="firstName">Имя</label>
                </div>
              </div>

            </div>
            <div class="mt-4">
              <button type="submit" class="btn btn-primary me-2">Сохранить</button>
            </div>
          </div>
        </form>
      </div>
{{--      <div class="card">--}}
{{--        <h5 class="card-header fw-normal">Delete Account</h5>--}}
{{--        <div class="card-body">--}}
{{--          <div class="mb-3 col-12 mb-0">--}}
{{--            <div class="alert alert-warning">--}}
{{--              <h6 class="alert-heading mb-1">Are you sure you want to delete your account?</h6>--}}
{{--              <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <form id="formAccountDeactivation" onsubmit="return false">--}}
{{--            <button type="submit" class="btn btn-danger">Deactivate Account</button>--}}
{{--          </form>--}}
{{--        </div>--}}
{{--      </div>--}}
    </div>
  </div>
@endsection
