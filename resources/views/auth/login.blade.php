@extends('layout.app')
@section('content')



<div class="row">

    <div class="col-md-4 col-md-offset-4">
      @if (session()->has('status'))
        <div class="alert alert-danger">
          <p>{{ session()->get('status') }}</p>
        </div>
      @endif
    <div style="background-color:#1e1e2f; padding:20px; border-radius:5px;">
        LOGIN
        <div class="panel panel-default"></div>
        <div class="panel-heading">
        <h1 class="panel-title">Acceso</h1>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('login') }}">
                 {{ csrf_field() }}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" >
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Ingrese email" value="{{ old('email')}}">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Ingrese Pass">
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}

                </div>
                <button class="btn btn-primary btn-block" >Acceder</button><br>
                <a href="../" class="btn btn-danger btn-block">Salir</a>
            </form>
            <br>
            <a href="{{ route('register') }}">REGISTRARSE</a>
            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a> -->
        </div>




    </div>

</div>





@endsection

</div>
