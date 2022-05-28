<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donate extends Model
{
    use HasFactory;
    protected $table='donates';
    protected $primaryKey='donate_id';
    public $timestamp=true;
    protected $fillable=["donate_id,item_name","item_pic","target_amount","deadline","release_time","des","price"];
}
