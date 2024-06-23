<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_payout_log extends Model
{
    use HasFactory;

    protected $fillable = [
        'payout_log_requested_at',
        'payout_log_done_at',
    ];

    public function payouts_datas(){
        return $this->belongsTo(tbl_payouts_data::class);
    }
}
