<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    function item(){
        return $this->belongsTo(Item::class,'item_name');

    }
}
