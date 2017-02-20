@extends('layouts.login')

@section('content')
    <div class="container-info">
        <div class="info-w3lsitem">
            <div class="w3table">
                <div class="w3table-cell">
                    <p> Já possui uma conta? </p>
                    <div class="btn"> Login </div>
                </div>
            </div>
        </div>
        <div class="info-w3lsitem">
            <div class="w3table">
                <div class="w3table-cell">
                    <p> Não possui conta? </p>
                    <div class="btn">Registrar</div>
                </div>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
@endsection

@section('contentForm')
    <div class="container-form">
        <div class="form-item log-in"><!-- login form-->
            <div class="w3table agileinfo">
                <div class="w3table-cell">
                    <div class="w3table-topimg">
                        <h3 class="box-title">Login</h3>
                    </div>
                    <form method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <input type="text" name="email" placeholder="Email" required=""/>
                        <input type="Password" name="password" placeholder="Senha" required=""/>
                        <input type="submit" class="btn" value="Entrar">
                        @if ($errors->has('email'))
                            <span class="help-block has-error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        @if ($errors->has('password'))
                            <span class="help-block has-error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <a class="btn-link" href="{{ url('/password/reset') }}">
                            Esqueci minha senha
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="form-item sign-up"><!-- sign-up form-->
            <div class="w3table w3-agileits">
                <div class="w3table-cell">
                    <form method="post" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <h3 class="box-title">Nova Conta</h3>
                        <input type="text" name="name" placeholder="Nome Completo" required="required"/>
                        <input type="email" name="email" placeholder="Email" required="required"/>
                        <input type="password" name="password" placeholder="Senha" required="required"/>
                        <input type="password" name="password_confirmation" placeholder="Confirme a senha" required="required"/>

                        <input type="submit" class="btn" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


