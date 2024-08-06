<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\InitialController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginUsuarioController extends Controller
{
    public function register(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    
        Auth::login($user);
    
        return redirect(route('homepage'));
    }    

    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
    
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();

                return redirect(route('homepage'));
            } else {

                return redirect(route('login'));
            }
        } else {

            return redirect(route('login'));
        }
    }
    
    

    public function logout (Request $request) {
        InitialController::auditarAccionesUsuario("Cerró sesión.");
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
