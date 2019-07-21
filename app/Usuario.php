<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;
//Para hashear pw
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model 
{
    use Notifiable;
    
    protected $table = 'usuarios';

    protected $fillable = ['nombre', 'correo', 'user', 'rol'];

    protected $primaryKey = 'id';

    protected $hidden = [
        'password', 'remember_token'];
    
    public function setPasswordAttribute($pass) 
    {
        $this->attributes['password'] = Hash::make($pass);
    }
    

}
