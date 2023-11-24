<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public $table = "hotels";
    public $timestamps = false;
    protected $primaryKey = 'ID';
    protected $fillable = [
       'ID', 'nombre', 'nit', 'ciudad', 'direccion', 'numHabitaciones'
    ];

    public function HotelAll() {
        return  $this->belongsToMany(Hotel::class,"hotels");
        
    }
}
