<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user_referral_link extends Model
{
    use HasFactory;


    public function user(){
        $this->belongsTo(User::class);
    }
}
