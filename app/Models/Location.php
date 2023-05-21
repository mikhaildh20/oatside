<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'location';
    protected $guarded = ['id'];
    protected $primarykey = 'id';
    public function city(){
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
