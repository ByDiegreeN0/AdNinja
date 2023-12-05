<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tbl_daily_link_views extends Model
{
    use HasFactory;

    protected $table = 'tbl_daily_link_views';

    protected $fillable = ['url_id', 'daily_views', 'date'];

    public function link(){
        return $this->belongsTo(tbl_links::class, 'url_id');
    }


    public static function RecordView($url_id){
        self::updateOrCreate([
            'url_id' => $url_id,
            'date' => now()->toDateString(),
        ],

        [
            'daily_views' => DB::raw('daily_views + 1'),
        ]);
    }

}
