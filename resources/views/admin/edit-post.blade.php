@extends('layouts.dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>EDITAR POST</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('posts.index')}}"><i class="fa fa-file"></i> Posts</a></li>
            <li class="active">Editando Post</li>
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
                        <h3 class="box-title">Editar</h3>
                    </div>
                    <form class="" method="post" action="{{route('posts.update', ['post'=>$post->id])}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class='box-body'>
                            <div class="form-group">
                                <label class="control-label" for="titulo">Título</label>
                                <input class="form-control" name="title" id="titulo" value="{{old('title', $post->title)}}" placeholder="Título do Post" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="post">Post</label>
                                <textarea name="description" rows="10" class="form-control" id="post"> {{old('description', $post->description)}}</textarea>
                            </div>
                        </div>
                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Atualizar Post</button>
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