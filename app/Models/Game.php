<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'game';
    protected $guarded = ['id'];
    protected $primarykey = 'id';
    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
}
