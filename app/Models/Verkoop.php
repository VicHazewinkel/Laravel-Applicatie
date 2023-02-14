<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verkoop extends Model
{
    use HasFactory;

    protected $table = 'verkoop';

    // werkt ook via een join van 'user_id' met 'user_name'
    // moet via model structuur in ''verkoop' model

    public function user(){
        return $this->belongsTo('\App\Models\User');
    }

    public function item(){
        return $this->belongsTo('\App\Models\Item');
    }
}
