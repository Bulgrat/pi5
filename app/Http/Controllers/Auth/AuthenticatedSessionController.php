<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

use App\Models\User;
use App\Models\Jogo;
use App\http\Middleware\isAdmin;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{

    public function index()
    {
        return view('tables.users')->with('users', User::all());
    }

    public function profile()
    {
        return view('profile')->with('jogos',  Jogo::all());
    }

    public function profileUser(User $user)
    {
        return view('profileUser')->with('user', $user)->with('jogos',  Jogo::all());;

    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function listarTodosUsuarios()
    {
        return response()->json(User::all());
    }


    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
