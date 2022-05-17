@extends('layouts.dashboard')

@section('content')
<!-- End Navbar -->
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Categorias <a class="btn btn-outline-light btn-sm" style="float:right;"
                            href="{{Route('createWeb')}}">+</a></h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>

                                </tr>
                            </thead>
                            <hr style="background-color: #6c0e6a;">

                            <tbody>
                                @foreach($categorias as $categoria)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$categoria->name}}<span>
                                                        ({{$categoria->jogos->count()}})</span></h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-right" style="float: right; margin-right: 10px;">

                                        <a href="{{ Route('edit', $categoria->id) }}" type="button"
                                            class="btnAcao btn btn-sm ">
                                            <image class="imageAcao" src="images/edit.png"></image>
                                        </a>

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
    @endsection
