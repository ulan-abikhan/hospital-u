@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">

      <!-- Login -->
      <div class="card p-2">
        <!-- Logo -->
        <!-- /Logo -->

        <div class="card-body mt-2">
          <h4 class="mb-2">Welcome to {{config('variables.templateName')}}! 👋</h4>
          <p class="mb-4">Вход в систему</p>

          <form id="formAuthentication" class="mb-3" action="{{ route('login-post') }}" method="POST">
            @csrf
            <div class="form-floating form-floating-outline mb-3">
              <input type="text" class="form-control" id="email" name="email" placeholder="Введите почту" autofocus>
              <label for="email">Почта</label>
            </div>
            <div class="mb-3">
              <div class="form-password-toggle">
                <div class="input-group input-group-merge">
                  <div class="form-floating form-floating-outline">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <label for="password">Пароль</label>
                  </div>
                  <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                </div>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">

              <a href="{{url('auth/forgot-password-basic')}}" class="float-end mb-1">
                <span>Забыли пароль?</span>
              </a>

            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Войти</button>
            </div>
          </form>

          <p class="text-center">
            <span>Нет аккаунта?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Создать аккаунт</span>
            </a>
          </p>
        </div>
      </div>
      <!-- /Login -->
      <img src="{{asset('assets/img/illustrations/tree-3.png')}}" alt="auth-tree" class="authentication-image-object-left d-none d-lg-block">
      <img src="{{asset('assets/img/illustrations/auth-basic-mask-light.png')}}" class="authentication-image d-none d-lg-block" alt="triangle-bg">
      <img src="{{asset('assets/img/illustrations/tree.png')}}" alt="auth-tree" class="authentication-image-object-right d-none d-lg-block">
    </div>
  </div>
</div>
@endsection
