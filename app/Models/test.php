<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    protected $table='tests';
    protected $primaryKey='id';
    public $timestamp=true;
    protected $fillable=["id","question","answer","annotation"];
}
