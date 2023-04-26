<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}

<title>Admin Login Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{URL::asset('assets/animate.css/animate.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{URL::asset('assets/css/custom.min.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{URL::asset('assets/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{URL::asset('assets/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{URL::asset('assets/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">

    <!-- JavaScript -->
    <!-- jQuery -->
    <script src="{{URL::asset('assets/jquery/dist/jquery.min.js') }}"></script>
    <!-- PNotify -->
    <script src="{{URL::asset('assets/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{URL::asset('assets/pnotify/dist/pnotify.buttons.js') }}"></script>
    <script src="{{URL::asset('assets/pnotify/dist/pnotify.nonblock.js') }}"></script>

  </head>

  <body class="login">
    <div>

      <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">

                    @if(session()->has('error_message'))

                        <span style="color:red;">ERROR::{{session()->get("error_message")}}</span>

                    @endif

                    <form action="{{route('login')}}" method="POST">

                        {{-- {!!Form::open(['url'=>'/login','method'=>'POST'])!!} --}}

                        @csrf

                        <h1>Login Form</h1>

                        {{-- Error Message From Server Side validation--}}

                        @if ($errors->has('user_name'))

                            <span style="color:rgb(224, 4, 4);">{{$errors->first('user_name')}}</span>

                        @endif

                        @if ($errors->has('password'))

                            <span style="color:rgb(224, 4, 4);">{{$errors->first('password')}}</span>

                        @endif

                        <div>
                            <input type="text" class="form-control rounded-0" name="name" value="" placeholder="Username"/>
                        </div>

                        <div>
                            <input type="password" class="form-control rounded-0" name="password" placeholder="Password"/>
                        </div>

                        <div class="my-3 d-flex ml-4 justify-content-start">
                            <input type="checkbox" name="remember" value="1" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label">Remember me</label>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-secondary rounded-0 px-4 submit" href="index.html">Log in</button>
                            <input type="hidden" name="form-submit" value="1"/>
                        </div>

                        <div class="separator">
                        <div>
                            <p>&copy;Softguide ©2023 All Rights Reserved.</p>
                        </div>
                        </div>

                    </form>
                </section>

                {{-- <script type="text/javascript">
                    $.ajaxSetup{{
                    header:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    }};

                </script> --}}

            </div>
        </div>
      </div>
    </div>
  </body>
</html>
