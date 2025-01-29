<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rain extends Model
{
    use HasFactory;

    protected $fillable= ['duration', 'city_id', 'amount_rain', 'risk_zone'];

    public function cities()
    {
        return $this->belongsTo(City::class);
    }
}
