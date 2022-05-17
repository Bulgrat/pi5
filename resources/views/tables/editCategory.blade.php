@extends('layouts.dashboard')

@section('content')
    <div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Usuários</h6>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
             
                    <form method="POST" action="{{ Route('update', $categoria->id) }}" class="p-3">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                    <li class="list-group-item text-danger">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Digite o nome da categoria" value="{{ $categoria->name }}">
                            </div>
                            <button type="submit" class="btn salvarForm">Salvar</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection