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
                        <table class="table align-items-center mb-0">
                            <thead>

                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Usuário</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Cadastrado em</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Github</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <hr style="background-color: #6c0e6a;">
                            <tbody>

                                @foreach($users as $user)
                                @if($user->isAdmin == 0)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="https://pbs.twimg.com/media/B955uoOIYAAP40i.jpg"
                                                    class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                                <p class="text-xs text-secondary mb-0">{{$user->nickname}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{$user->created_at->format('d/m/Y')}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold"><a
                                                style="color: #a947a7 !important;" target="_blank"
                                                href="https://github.com/{{$user->github}}">github.com/{{$user->github}}</a></span>
                                    </td>
                                    <td class="align-middle">
                                    <td class="align-middle text-center">
                                        <a href="{{ Route('profileUser', $user->id) }}" type="button"
                                            class="btnAcao btn btn btn-sm">
                                            <image class="imageAcao" src="images/visu.png"></image>
                                        </a>
                                    </td>
                                    </td>
                                </tr>
                                @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
