<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_links;
use Illuminate\Support\Str;


class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    public function app(){
        return view('layouts.app');
    }

    // Esta sección ya no es usada
    
    /* public function links_index(){
        $LinksData = tbl_links::all();
        return view('dashboard.links', compact('LinksData'));
    } */

    public function referrals_index(){
        return view('dashboard.referrals');
    }

    public function payouts_index(){
        return view('dashboard.payouts');
    }

    public function support_index(){
        return view('dashboard.support');
    }

    public function info_index(){
        return view('dashboard.info');
    }

    public function Advertising_index(){
        return view('AdLinkShortener.advertising');
    }

}
