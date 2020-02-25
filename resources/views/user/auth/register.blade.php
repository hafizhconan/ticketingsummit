<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>CCI SUMMIT</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="icon" href="{!! asset('images/icon.ico') !!}" />
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                            <?php 
                                $data = App\Variable::findOrFail(1);
                            ?>
                                <p class="name"><a href="/">CCI SUMMIT</a></p>
                                <p class="lead">Register your account</p>
                            </div>
                    <form class="form-auth-small" role="form" method="POST" action="{{ url('/user/register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nama" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="signin-email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <input id="signin-password" type="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #055e9e">SUBMIT</button>
                            <a href="/user/login" class="btn btn-basic btn-lg btn-block" role="button">Sudah Punya Akun? Login Disini</a>
                        </div>
                    </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content text">
                            <h1 class="heading" ><img src="{{ asset($data->main_logo) }}" style="width: 50%;!important" class="center"></h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>
