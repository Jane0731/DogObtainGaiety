<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donate_item_record extends Model
{
    use HasFactory;
    protected $table='donate_item_records';
    protected $primaryKey='donate_id';
    public $timestamp=true;
    protected $fillable=["user_id","donate_id","total"];
}
