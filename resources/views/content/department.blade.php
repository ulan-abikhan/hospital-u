@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">

                <h4 class="card-header">{{ $department->name }}</h4>


                <div class="card-body pt-2 mt-1" style="white-space: pre-wrap;">

                    <p>{{ $department->description }}</p>

                </div>

            </div>
        </div>
    </div>
@endsection
