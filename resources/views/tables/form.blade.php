@extends('layouts.dashboard')

@section('content')
<!-- End Navbar -->


<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4" style="height: auto !important">
                <div class="card-header pb-0">
                    <h6>The escapists</h6>
                </div>
                <hr style="background-color: #6c0e6a;">

                <div class="card-body px-0 pt-0 pb-2 mx-2">
                    <div class="table-responsive p-0 mx-2">
                        <form class="mx-2">

                            <div class="form-group">

                                <label for="formGroupExampleInput">Nome do jogo</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="The Escapists">
                                <label for="dev">Desenvolvedor <span class="badge badge-light">Este campo não pode ser
                                        alterado</span>
                                </label>
                                <input class="form-control" style="cursor: default;" type="text" id="dev"
                                    placeholder="Mouldy Toof Studios" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descrição</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">The Escapists oferece aos jogadores a oportunidade de experimentar uma visão alegre da vida cotidiana da prisão, com o objetivo principal de escapar!
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagem">Imagem</label><br>
                                <img src="https://image.api.playstation.com/cdn/UP4064/CUSA01880_00/swbGFmw0LslUlOsfLs38svWnYrOtG1FS.png"
                                    class="rounded " id="imagem" style="width: 150px; height: 150px;" alt="...">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/71HXTnHSn4L.png"
                                    class="rounded " id="imagem" style="width: 150px; height: 150px;" alt="...">
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/91p0zQaaUyL.png"
                                    class="rounded " id="imagem" style="width: 150px; height: 150px;" alt="...">
                                    <img src="https://image.winudf.com/v2/image/Y29tLmljaGFnbWFlc3R1ZGlvLmljaGFndWlkZWZvcnRoZWVjYXAyX3NjcmVlbl8wXzE1MjUxNDM0NjFfMDE0/screen-0.jpg?fakeurl=1&type=.jpg
"
                                    class="rounded " id="imagem" style="width: 150px; height: 150px;" alt="...">

                                <!--<input type="file" class="form-control-file" id="exampleFormControlFile1" style=""> -->
                            </div>
                            <div class="form-group">
                                <label for="imagem">Categorias</label><br>
                                <a href="#" class="badge badge-dark">Ação</a>
                                <a href="#" class="badge badge-dark">Aventura</a>
                                <a href="#" class="badge badge-dark">Indie</a>
                                <a href="#" class="badge badge-dark">Simulação</a>
                                <a href="#" class="badge badge-dark">Estratégia</a>
                            </div>

                            <div class="form-group">
                                <label for="disabledTextInput">Preço <span class="badge badge-light">Este campo não pode ser
                                        alterado</span></label>
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="R$ 45,99">
                            </div>

                            <div class="form-group">
                                <label for="disabledTextInput">Link para download <span class="badge badge-light">Este campo não pode ser
                                        alterado</span></label>
                                <a id="disabledTextInput" target="blank" class="form-control" href="https://store.steampowered.com/app/298630/The_Escapists/"
                                    >Clique aqui para fazer o download</a>
                            </div>
        
                            <button type="submit" class="btn w-100 my-4 mb-2" style="background: #6c0e6a; color: white;">Salvar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection