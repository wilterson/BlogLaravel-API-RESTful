@extends('layouts.dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>TODOS OS POSTS</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('posts.index')}}"><i class="fa fa-file"></i> Posts</a></li>
            <li class="active">Novo Post</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class='box box-primary'>
                    <div class='box-header'>
                        <h3 class="box-title">Posts</h3>
                    </div>
                    <form class="" method="post" action="{{route('posts.store')}}">
                        {{ csrf_field() }}
                        <div class='box-body'>
                            <div class="form-group">
                                <label class="control-label" for="titulo">Título</label>
                                <input class="form-control" name="title" id="titulo" placeholder="Título do Post" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="post">Post</label>
                                <textarea name="description" rows="10" class="form-control" id="post"></textarea>
                            </div>
                        </div>
                        <div class="box-footer text-right">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o "></i> Cadastrar Post</button>
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