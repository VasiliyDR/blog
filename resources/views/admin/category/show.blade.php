@extends('admin.layouts.main')

@section('title', 'Категория')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">
                            {{ $category->title }}
                        </h1>
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="text-success"><i
                                class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i role="button" class="text-danger fas fa-trash"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Категории</a></li>
                            <li class="breadcrumb-item active">Категория: {{ $category->title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-6">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $category->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $category->title }}</td>
                                    </tr>

                                    <tr>
                                        <td>Посты с этой категорие</td>
                                        <td>{{ $category->posts->count() }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <div class="col-6 text-center">
                        <div>
                            <h3>Изображение</h3>
                            <img width="500px" height="350px" src="{{ asset('storage/' . $category->preview_image) }}" alt="Изображение">
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
