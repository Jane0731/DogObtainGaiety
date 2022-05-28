<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dog_daily_record extends Model
{
    use HasFactory;
    protected $table='dog_daily_records';
    protected $primaryKey='id';
    public $timestamp=true;
    protected $fillable=["record_time","dog_id","record_pic","des"];
}
