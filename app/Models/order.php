<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $primaryKey='id';
    public $timestamp=true;
    protected $fillable=["name","email","uuid","cart","cart_donate","paid","total"];
}
