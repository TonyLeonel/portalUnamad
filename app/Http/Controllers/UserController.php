<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserController extends Controller
{
    public function ingreso()
    {
        if (Auth::check()) {
            return redirect('admin');
        } else {
            return view('auth.login');
        }
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
 
        if($validator->fails()) {
            return redirect('login')->withErrors($validator);
        }
       
        //obteniendo usuario
        $user = User::where('email',$request->email)->first();

        if($user == null) {
            return redirect('login')->withErrors(['Estas credenciales no coinciden con nuestros registros.'])->withInput();
        }

        if($user->estado == 0) {
            return redirect('login')->withErrors(['Su cuenta de usuario se encuentra deshabilitada.'])->withInput();
        }
               
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, ($request->input('remember') == 'on') ? true : false)) {
            return redirect()->intended('admin');
        }

        return redirect("login")->withErrors(['Estas credenciales no coinciden con nuestros registros.'])->withInput();
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }

}
