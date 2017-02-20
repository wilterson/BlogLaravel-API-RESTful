@extends('layouts.dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>MEU PERFIL</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('posts.index')}}"><i class="fa fa-users"></i> Usuários</a></li>
            <li class="active">Perfil</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <div class="col-md-12">
                <div class='box box-primary'>
                    <div class='box-header'>
                        <h3 class="box-title">Perfil</h3>
                    </div>
                    <form class="" method="post" action="{{route('users.update', ['user'=>$user->id])}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class='box-body'>
                            <div class="form-group">
                                <label class="control-label" for="name">Nome</label>
                                <input class="form-control" name="name" id="name" value="{{old('name', $user->name)}}" placeholder="Nome COmpleto" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Post</label>
                                <input class="form-control" name="email" id="email" value="{{old('email', $user->email)}}" placeholder="E-mail" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Nova Senha</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Senha" />
                            </div>
                        </div>
                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Atualizar Perfil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


@section('scripts-footer')
    <script type="application/javascript">
        $(document).ready(function () {

        });
    </script>
@endsection
@endsection