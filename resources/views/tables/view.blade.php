@extends('layouts.dashboard')

@section('content')
<!-- End Navbar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4" style="height: auto !important">
                <div class="card-header pb-0">
                    <h6 class="font-weight-bold">{{$jogo->name}}  </h6>
                </div>
                <hr style="background-color: #6c0e6a;">

                <div class="card-body px-0 pt-0 pb-2 mx-2">
                    <div class="text-center">

                        <img src="{{ asset('public/' . $jogo->images) }}" class="rounded " id="imagem"
                            style="width: 220px; height: 150px;">

                        <br>
                        <iframe style="padding: 3px;" width="400" height="220" src="{{$jogo->video}}" title="{{$jogo->name}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <br>
                    <p class=" text-center font-weight-normal"><span
                            class="badge badge-info">{{$jogo->categoria->name}}</span>
                        <span class="badge badge-light">{{$jogo->platform->name}}</span>
                    <p class=" text-center">{{$jogo->desc}}
                    </p>
                    <p class=" text-center font-weight-normal">Desenvolvedor: <span
                            class="badge">{{$jogo->user->name}}</span>
                        <br><a href="#" class="badge badge-light"
                            style="width: 100px; height: 20px;">R${{$jogo->price}}</a><br>
                            <!-- Número de vendas: <a href="#"
                            class="badge badge-dark">35</a> -->
                    </p>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document"
                            style="background: #111124; border: none !important;">
                            <div class="modal-content" style="background: #111124; border: none !important;">
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="{{$jogo->video}}" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer" style="background: #111124; border: none !important;">
                                    <button type="button" class="btn btn-outline-light"
                                        data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script></script>
    @endsection
