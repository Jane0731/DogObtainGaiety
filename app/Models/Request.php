<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table='requests';
    protected $primaryKey='id';
    public $timestamp=true;
    protected $fillable=["request","response","url","ip"];
}
