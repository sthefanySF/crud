@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('usuario') }}">voltar</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (Request::is('*/edit'))

                            <form action="{{ route('update', ['id' => $usuario->id]) }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome:</label>
                                    <input type="text" name="name" class="form-control" value="{{ $usuario->name }}">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1">E-mail:</label>
                                    <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>

                        @else
                            <form action="{{(route('add'))}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome:</label>
                                    <input type="text" name="name" class="form-control">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1">E-mail:</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection