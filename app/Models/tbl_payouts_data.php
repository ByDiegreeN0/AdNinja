<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_payouts_data extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(user::class);
    }
}
