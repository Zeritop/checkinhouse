<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;



class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }
    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('intranet');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('login');
    }

    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];

        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            return Redirect::intended('intranet');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }

    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('ingresar')->with('error_message', 'Logged out correctly');
    }

   
   public function login(Request $request){
     $credentials = $this->validate(request(),[
           'email'=>'email|required|string',
           'password'=>'required|string'
          
           ]);
        
        
        
    //return $credentials;
    if(Auth::attempt($credentials)){
        if(Auth::user()->admin == 0){
           return view('intranet/users/index');
       } else if(Auth::user()->admin == 1){
           //$users['users'] = \App\User::all();
           return view('intranet/index');
       } else if(Auth::user()->admin == 2){
           return view('intranet/tecnicos/index');
       }
      //return view('intranet/users/index');
        
  }
    return back()
        ->withErrors(['email' => trans('auth.failed')])
        ->withInput(request(['email']));
   }
}
