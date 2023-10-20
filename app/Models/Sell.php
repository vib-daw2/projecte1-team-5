<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $fillable = [
        // Agrega los otros campos que puedas actualizar en la venta si es necesario
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
