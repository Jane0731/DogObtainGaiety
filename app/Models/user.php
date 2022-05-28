<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
class user extends Authenticatable
{
    const ROLE_ADMIN = 'admin';
    const ROLE_MANAGER = 'manager';
    const ROLE_USER = 'user';

    use Notifiable;
    use HasFactory;
    protected $table='users';
    protected $primaryKey='user_id';
    public $timestamp=true;
    protected $fillable=["name","phone","email","password",'role'];
    
    public function getAuthPassword()
    {
        return $this->password;
    }
}
