<?php

namespace peninsula\Http\Controllers\Auth;

use peninsula\User;
use Validator;
use peninsula\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getLogout', 'getRegister', 'postRegister']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'tipo_ci' => 'required|max:255', 
            'number_ci' => 'required|unique:users', 
            'genero' => 'required|max:255', 
            'fecha_nacimiento' => 'required|max:255',
            
             
            'telf_movil' => 'required|max:11', 
            
            'habitantes_casa' => 'required|max:20', 
            'tipo_usuario' => 'required|max:255', 
            'lugar_edificio' => 'required|max:2', 
            'lugar_apartamento' => 'required|max:2',
            'password' => 'confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => ucfirst($data['nombre']),
            'apellido' => ucfirst($data['apellido']),
            'tipo_ci' => ucfirst($data['tipo_ci']), 
            'number_ci' => $data['number_ci'], 
            'genero' => ucfirst($data['genero']), 
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'email' => strtolower($data['email']),
            'telf_casa' => $data['telf_casa'], 
            'telf_movil' => $data['telf_movil'],
            'telf_trabajo' => $data['telf_trabajo'],
            'profesion' => ucwords($data['profesion']), 
            'habitantes_casa' => $data['habitantes_casa'], 
            'tipo_usuario' => ucfirst($data['tipo_usuario']), 
            'lugar_edificio' => strtoupper($data['lugar_edificio']), 
            'lugar_apartamento' => $data['lugar_apartamento'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    /**
     * Get the path to the login route.
     *
     * @return string
     */
    public function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : 'acceder';
    } 
}
