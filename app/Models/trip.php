<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    use HasFactory;
    protected $table = 'trip';
    protected $primaryKey = 'id';
    protected $fillable = ['fromCity', 'toCity', 'date','price','image','seats_availble'];
}
