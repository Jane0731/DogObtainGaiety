<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class send_item_record extends Model
{
    use HasFactory;
    protected $table='send_item_records';
    protected $primaryKey='id';
    public $timestamp=true;
    protected $fillable=["user_id","donate_id","total","status"];
}
