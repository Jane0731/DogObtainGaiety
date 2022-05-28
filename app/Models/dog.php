<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dog extends Model
{
    use HasFactory;
    protected $table='dogs';
    protected $primaryKey='dog_id';
    public $timestamp=true;
    protected $fillable=["kind","situation","sex","personality","story","birthday","name","pic","price",'dog_id'];
}
