<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','TVZ Sports')</title>
    <!-- <meta name="keywords" content="@yield('meta_keywords','some default keywords')"> -->
    <meta name="description" content="@yield('meta_description','TVZ Sports')">
    <link rel="canonical" href="{{url()->current()}}"/>
    @yield('links')

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script> -->

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"> -->

    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
    <body class="antialiased">
        <div>
        <div class="modal-body">
            <h2>Examination Questions</h2>
            <hr>
            <div>
                <h4>logical questions</h4>
                @foreach ($exams['logical'] as $key=>$log)
                    <p>{{$key+1}}. {{$log->question}} </p>
                    <a href="/update-exam/{{$log->id}}" class="mr-4 ml-2">update</a>
                    <a href="javascript:void(0)" id="delete_question"  onclick="deleteQuestion({{$log->id}})">delete</a>
                    <div class="col-12 mt-2">
                        <div class="row">
                            <div class="col-3">option 1 : {{$log->option_1}} </div>
                            <div class="col-3">option 2 : {{$log->option_2}} </div>
                            <div class="col-3">option 3 : {{$log->option_3}} </div>
                            <div class="col-3">option 4 : {{$log->option_4}} </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                <hr>
            </div>

            <div>
                <h4>technical questions</h4>
                @foreach ($exams['technical'] as $key=>$log)
                    <p>{{$key+1}}. {{$log->question}} </p>
                    <a href="/update-exam/{{$log->id}}" class="mr-4 ml-2">update</a>
                    <a href="javascript:void(0)" id="delete_question"  onclick="deleteQuestion({{$log->id}})">delete</a>
                    <div class="col-12 mt-2">
                        <div class="row">
                            <div class="col-3">option 1 : {{$log->option_1}} </div>
                            <div class="col-3">option 2 : {{$log->option_2}} </div>
                            <div class="col-3">option 3 : {{$log->option_3}} </div>
                            <div class="col-3">option 4 : {{$log->option_4}} </div>
                        </div>
                    </div><br>
                @endforeach
                <hr>
            </div>

            <div>
                <h4>aptitude questions</h4>
                @foreach ($exams['aptitude'] as $key=>$log)
                    <p>{{$key+1}}. {{$log->question}} </p>
                    <a href="/update-exam/{{$log->id}}" class="mr-4 ml-2">update</a>
                    <a href="javascript:void(0)" id="delete_question"  onclick="deleteQuestion({{$log->id}})">delete</a>
                    <div class="col-12 mt-2">
                        <div class="row">
                            <div class="col-3">option 1 : {{$log->option_1}} </div>
                            <div class="col-3">option 2 : {{$log->option_2}} </div>
                            <div class="col-3">option 3 : {{$log->option_3}} </div>
                            <div class="col-3">option 4 : {{$log->option_4}} </div>
                        </div>
                    </div><br>
                @endforeach
                <hr>
            </div>
        </div>
        </div>
    <script src="{{ asset('js/app1.js') }}"></script>

    </body>
</html>
