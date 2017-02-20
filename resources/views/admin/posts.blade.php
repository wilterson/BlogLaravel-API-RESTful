@extends('layouts.dashboard')

@section('styles-head')
    <link rel="stylesheet" type="text/css" href="{{url('/assets/DataTables/css/datatables.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/assets/DataTables/css/dataTables.bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/assets/DataTables/css/buttons.bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/assets/DataTables/css/responsive.bootstrap.min.css')}}"/>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>TODOS OS POSTS</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><i class="fa fa-file"></i> Posts</li>
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
                        <h3 class="box-title">Posts</h3>
                        <div class='pull-right'>
                            <a class="btn btn-success btn-sm" href="{{route('posts.create')}}">
                                <i class="fa fa-plus"></i> Adicionar Post</a>
                        </div>
                    </div>
                    <div class='box-body'>
                        <div>
                            <table class='table table-bordered' id="tablePosts">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Data Criação</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{date('d/m/Y H:m:s', strtotime($post->created_at))}}</td>
                                            <td>
                                                <ul class="list-inline">
                                                <li><a href="{{route('posts.edit',['post' => $post->id])}}" class="btn btn-primary"><i class="fa fa-pencil"></i> Editar</a></li>
                                                <li><form method="POST" action="{{route('posts.destroy', ['post' => $post->id])}}">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
                                                    </form></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


@section('scripts-footer')
    <script src="{{url('/assets/DataTables/js/datatables.min.js')}}"></script>
    <script src="{{url('/assets/DataTables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('/assets/DataTables/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('/assets/DataTables/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('/assets/DataTables/js/responsive.bootstrap.min.js')}}"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $('#tablePosts').DataTable({

                language: {
                    "search": "Localizar:",
                    "paginate": {"previous": "Anterior", "next": "Próximo", "first": "Primeiro", "last": "Último"},
                    "zeroRecords": "Nenhum registro encontrado",
                    "info": "_START_ a _END_ de _TOTAL_",
                },
                rows: "%d linhas selecionadas"
            });
        });
    </script>
@endsection
@endsection
