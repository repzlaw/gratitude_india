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
            <form action="" method="post" class="form-group" enctype="multipart/form-data" id="update-exam-form" >
                    {{ csrf_field() }}
              <div class="form-group row">
              <div class="col-12 mb-4">
                    <div class="input-group col-12 col-md-6 mb-4 m-auto">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Question</span>
                        </div>
                        <textarea  name="question" id="question" rows="5" class="form-control" placeholder="Write Question here ..." required>{{$exam->question}}</textarea>
                    </div>
                </div>

                <div class="input-group col-12 col-md-6 mb-4" >
                    <div class="input-group-prepend">
                        <span class="input-group-text">Option 1</span>
                    </div>
                    <input  type="text" name="Option1" id="option_1" class="form-control" placeholder="Option 1" value="{{$exam->option_1}}" required>
                </div>

                <div class="input-group col-12 col-md-6 mb-4" >
                    <div class="input-group-prepend">
                        <span class="input-group-text">Option 2</span>
                    </div>
                    <input  type="text" name="Option2" id="option_2" class="form-control" placeholder="Option 2" value="{{$exam->option_2}}" required>
                </div>

                <div class="input-group col-12 col-md-6 mb-4" >
                    <div class="input-group-prepend">
                        <span class="input-group-text">Option 3</span>
                    </div>
                    <input  type="text" name="Option3" id="option_3" class="form-control" placeholder="Option 3" value="{{$exam->option_3}}" required>
                </div>

                <div class="input-group col-12 col-md-6 mb-4" >
                    <div class="input-group-prepend">
                        <span class="input-group-text">Option 4</span>
                    </div>
                    <input  type="text" name="Option4" id="option_4" class="form-control" placeholder="Option 4" value="{{$exam->option_4}}" required>
                </div>

                <div class="input-group col-12 col-md-6 mb-4" >
                    <div class="input-group-prepend">
                        <span class="input-group-text">Category</span>
                    </div>
                    <select class="form-control custom-select" name="category" id="category" required >
                        <option value="">-- Select Category -- </option>                         
                        <option value="technical"> technical  </option>                         
                        <option value="aptitude">aptitude </option>                         
                        <option value="logical">logical </option>                         
                    </select>
                </div>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" id="id" value="{{$exam->id}}">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id ="exam-save">Save </button>
              </div>
          </form>
        </div>
        </div>
    <script src="{{ asset('js/app1.js') }}"></script>

    </body>
</html>
