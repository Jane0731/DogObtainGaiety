<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_option extends Model
{
    use HasFactory;
    protected $table='user_options';
    protected $primaryKey='id';
    public $timestamp=true;
    protected $fillable=["name","tel","type","email","des","status"];
}
