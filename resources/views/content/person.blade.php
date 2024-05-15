@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">

                <div class="card-header d-flex align-items-start align-items-sm-center gap-4">
                    <img style="max-width:100%;" src="{{ asset($doctor->photo) }}" alt="user-avatar"
                        class="d-block w-px-240 h-px-240 rounded" id="uploadedAvatar" />
                </div>

                <h4 class="card-header">{{ $doctor->name }}</h4>

                <h3 class="card-header">{{ $doctor->job }}</h3>



                <div class="card-body pt-2 mt-1" style="white-space: pre-wrap;">

                    <p>{{ $doctor->history }}</p>

                </div>

            </div>
        </div>
    </div>
@endsection
