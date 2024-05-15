@extends('layouts/blankLayout')

@section('title', 'Account settings - Account')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
    <div class="col-11" style="margin: 20px;">

        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Диагноз</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <form id="recordInfo" method="POST" action="{{ url('records/' . $recordId) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <small class="text-light fw-medium d-block">Диагноз</small>

                        <div class="input-group input-group-merge speech-to-text">
                            <input type="text" id="diagnose" name="diagnose" class="form-control" placeholder="Диагноз"
                                aria-describedby="text-to-speech-addon">
                            <span class="input-group-text" id="text-to-speech-addon">
                                <i class='mdi mdi-microphone-outline cursor-pointer text-to-speech-toggle'></i>
                            </span>
                        </div>

                        <small class="text-light fw-medium d-block pt-3">Примечание</small>

                        <div class="input-group input-group-merge speech-to-text">
                            <textarea class="form-control" name="note" id="note" placeholder="Напишите или говорите" rows="5"></textarea>
                            <span class="input-group-text">
                                <i class='mdi mdi-microphone-outline cursor-pointer text-to-speech-toggle'></i>
                            </span>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary me-2">Сохранить</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        const diagnoseInput = document.getElementById('diagnose');

        // Create a SpeechRecognition object
        const recognition = new webkitSpeechRecognition(); // For Chrome


        recognition.lang = 'ru-RU'; // Set language to Russian


        recognition.onresult = function(event) {
            const result = event.results[0][0].transcript;
            diagnoseInput.value = result;
        }
    </script>
@endsection
