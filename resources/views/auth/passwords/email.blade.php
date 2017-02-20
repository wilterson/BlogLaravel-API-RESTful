@extends('layouts.login')

@section('content')
    <div class="container-info">
        <div class="info-w3lsitem">
            <div class="w3table">
                <div class="w3table-cell">

                </div>
            </div>
        </div>
        <div class="info-w3lsitem">
            <div class="w3table">
                <div class="w3table-cell">
                    <p> Fazer Login </p>
                    <a class="btn2" href="{{url('/login')}}">Login</a>
                </div>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
@endsection

<!-- Main Content -->
@section('contentForm')
    <div class="container-form">
        <div class="form-item log-in"><!-- login form-->
            <div class="w3table agileinfo">
                <div class="w3table-cell">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="w3table-topimg">
                        <h3 class="box-title">Recuperar Senha</h3>
                    </div>
                    <form action="#" method="post" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="required"/>
                        <input type="submit" class="btn" value="Recuperar senha">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
