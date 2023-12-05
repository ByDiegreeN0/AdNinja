<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Tbl_Monthly_link_views extends Model
{
    use HasFactory;

    protected $table = 'tbl_monthly_link_views';

    protected $fillable = ['url_id', 'monthly_views', 'year', 'month'];

    public function link(){
        return $this->belongsTo(tbl_links::class, 'url_id');
    }

    public static function RecordMonthlyViews($url_id){
        $today = now();

        self::updateOrCreate([
            'url_id' => $url_id,
            'year' => $today->year,
            'month' => $today->month,
        ],
        
        [
            'monthly_views' => DB::raw('monthly_views + 1'),
        ]);
    }
}
