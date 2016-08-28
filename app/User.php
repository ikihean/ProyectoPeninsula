<?php

namespace peninsula;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                       AuthorizableContract,
                                       CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 
        'apellido', 
        'tipo_ci', 
        'number_ci', 
        'genero', 
        'fecha_nacimiento', 
        'email', 
        'telf_casa', 
        'telf_movil',
        'telf_trabajo',
        'profesion', 
        'habitantes_casa', 
        'tipo_usuario', 
        'lugar_edificio', 
        'lugar_apartamento', 
        'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    //Query related attributes
    
    public function getNombreCompletoAttribute() {
        return $this->nombre . ' ' . $this->apellido;
    }
    
    public function getEdadAttribute()
    {
        return \Carbon\Carbon::parse($this->fecha_nacimiento)->age;
    }
    
    public function getDireccionAttribute()
    {
        return $this->lugar_edificio . '-' . $this->lugar_apartamento;
    }
    
    public function getCedulaAttribute()
    {
        return $this->tipo_ci . $this->number_ci;
    }
    
    /*public function getCedulaMenorAttribute()
    {
        return strlen($this->number_ci)->where('number_ci', '>', 8)->get()
    }*/
}
