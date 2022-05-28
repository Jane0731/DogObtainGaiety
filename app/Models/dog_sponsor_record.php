<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dog_sponsor_record extends Model
{
    use HasFactory;
    protected $table='dog_sponsor_records';
    protected $primaryKey='id';
    public $timestamp=true;
    protected $fillable=["user_id","dog_id","times","check_status"];
}
