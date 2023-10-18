<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_links extends Model
{

    protected $fillable = ['url_name', 'url_old_url', 'url_new_url'];

    protected $primaryKey = 'url_id';
    use HasFactory;
}
