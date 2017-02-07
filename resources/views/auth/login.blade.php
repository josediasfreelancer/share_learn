@extends('layouts.app')
<link href="{{ asset('/css/login.css') }}" rel="stylesheet">

@section('content')
<div class="container bgLogin">
    <div class="row">
        <div class="ajustalogo">Share<span class="corazul">&</span>Learn</div>


        <div class="col-md-6 col-md-offset-3 loginRow">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 btnSpecial active" id="login-form-link">
                            <a href="#" ><span class="alinhalogin brancoactive">Entrar</span></a>
                        </div>
                        <div class="col-xs-6 btnSpecial" id="register-form-link">
                            <a href="#" ><span class="alinhalogin brancoactive">Registar</span></a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {{--login--}}
                            <form id="login-form" method="POST" role="form" style="display: block;" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" name="email" tabindex="1" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group text-left">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" tabindex="3"> Guardar dados de sessão
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-left">
                                    <div class="col-md-6">

                                    </div>
                                </div>


                                <div class="form-group text-left">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary col-md-6 col-sm-4" id="login-submit" tabindex="4" name="login-submit">
                                            Login
                                        </button>

                                    </div>
                                </div>
                                <div class="form-group text-left">
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-4 col-lg-offset-4">
                                        <a class="btn btn-primary col-xs-3 col-md-6 col-sm-6 googleicon" href="{{ route('google.login') }}">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>

                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">

                                </div>


                            </form>

                            {{--registar--}}
                            <form id="register-form"method="POST" role="form" style="display: none;" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <input id="name" type="text" class="form-control"  placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Password" name="password_confirmation" required>

                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary col-md-6 col-sm-4">
                                            Registar
                                        </button>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection


<!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>

    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });

</script>

<script src="https://use.fontawesome.com/4b11aac8a2.js"></script>
