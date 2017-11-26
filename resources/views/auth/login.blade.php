@extends('auth.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="login-page" background="VeterinaryClinic\public\img\logoprincipal.jpg"

URL del artículo: http://www.ejemplode.com/17-html/532-ejemplo_de_como_poner_imagen_de_fondo_en_html.html
Nota completa: Ejemplo de Cómo poner imagen de fondo en HTML>
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>Iniciar</b>Sesión</a>
        </div><!-- /.login-logo -->

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Vaya!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="col-md-3"></div>
    <div class="login-box-body">
    <p class="login-box-msg">Usted debe iniciar sesión.</p>
    <form action="{{ url('/auth/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Correo Electrónico" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Recordar mi contraseña.
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
            </div><!-- /.col -->
        </div>
    </form>

    <!--<div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Iniciar usando Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Iniciar usando Google+</a>
    </div><!-- /.social-auth-links -->

    <a href="{{ url('/password/email') }}">Olvidé mi contraseña</a><br>
    <a href="{{ url('/auth/register') }}" class="text-center">Registrar nuevo</a>

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    @include('auth.scripts')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
