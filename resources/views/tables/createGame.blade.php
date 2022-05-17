@extends('layouts.dashboard')

@section('content')
<!-- End Navbar -->

<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Criar jogo</h6>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="form-group p-0">

                        <form action="{{ route('storeGame') }}" class="p-3" method="POST" enctype="multipart/form-data">
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
                                <input type="text" class="form-control" name="name" placeholder="Nome"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="desc">Descrição:</label>
                                <textarea class="form-control" name="desc"
                                    placeholder="Descrição do jogo">{{ old('desc') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Imagem:</label>
                                <input type="file" name="images" class="form-control" multiple>
                            </div>
                            <div class="form-group">
                                <label for="name">Video:</label>
                                <input type="text" class="form-control" name="video" placeholder="Video"
                                    value="{{ old('video') }}">
                            </div>
                            <div class="form-group">
                                <label for="category">Plataforma:</label>
                                <select name="platform_id" class="form-control">
                                    @foreach($platforms as $platform)
                                    <option class="text-uppercase" value="{{$platform->id}}">{{$platform->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Preço:</label>
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control"
                                    name="price" placeholder="00.00" value="{{ old('price') }}">
                            </div>
                            <div class="form-group">
                                <label for="category">Categoria:</label>
                                <select name="categoria_id" class="form-control">
                                    @foreach($categorias as $categoria)
                                    <option class="text-uppercase" value="{{$categoria->id}}">{{$categoria->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Link:</label>
                                <input type="text" class="form-control" name="link_dowload" placeholder="Link"
                                    value="{{ old('platform') }}">
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::User()->id }}">
                            <button type="submit" class="btn text-light salvarForm">Cadastrar jogo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
