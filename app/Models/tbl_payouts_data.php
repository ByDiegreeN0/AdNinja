<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_payouts_data extends Model
{
    use HasFactory;

    protected $primaryKey = 'paydata_id'; 


    protected $fillable = ['paydata_email', 'paydata_user_name', 'user_id'];

    public function users(){
        return $this->belongsTo(user::class);
    }
}
