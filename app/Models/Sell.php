<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Agrega 'user_id' a la lista
        'package_id',
        'truck_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }


   
}
