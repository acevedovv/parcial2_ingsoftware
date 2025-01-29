<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fire extends Model
{
    use HasFactory;

    protected $fillable = ['cause','city_id','affected_area'];

    public function cities(){

        return $this->belongsTo(City::class);
    }
}
