@extends('layouts.dashboard')

@section('content')
<!-- End Navbar -->
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Jogos <a class="btn btn-outline-light btn-sm" style="float:right;"
                            href="{{Route('createGameWeb')}}">+</a></h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jogo
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Categoria
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Plataforma
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Usuário</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Cadastrado em</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <hr style="background-color: #6c0e6a;">
                            <tbody>
                                @foreach($jogos as $jogo)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">


                                            <div class="d-flex flex-column justify-content-center">

                                                <!-- Nome do jogo -->
                                                <h6 class="mb-0 text-sm">{{$jogo->name}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <!-- Descrição -->
                                        <p class="text-xs text-secondary mb-0">{{$jogo->categoria->name}}</p>
                                    </td>
                                    <td>
                                        <!-- Usuário que desenvolveu o jogo -->
                                        <p class="text-xs text-secondary mb-0">{{$jogo->platform->name}}
                                        <p>
                                    </td>
                                    <td>
                                        <!-- Usuário que desenvolveu o jogo -->
                                        <p class="text-xs text-secondary mb-0">{{$jogo->user->name}}
                                        <p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <!-- Quando ele foi cadastrado -->
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{$jogo->created_at}}</span>
                                    </td>
                                    <td class="align-middle text-center">

                                        <a href="{{ Route('viewGame', $jogo->id) }}" type="button"
                                            class="btnAcao btn btn btn-sm">
                                            <image class="imageAcao" src="images/visu.png"></image>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
