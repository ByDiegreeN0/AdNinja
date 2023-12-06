<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_links;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $links = $user->links;

        $LinksChartData = DB::table('tbl_links')
            ->join('tbl_monthly_link_views', 'tbl_links.url_id', '=', 'tbl_monthly_link_views.url_id')
            ->where('user_id', $user->id)
            ->select(
                DB::raw('DATE_FORMAT(tbl_monthly_link_views.created_at, "%M") as month'),
                DB::raw('SUM(tbl_monthly_link_views.monthly_views) as total_views')
            )
            ->groupBy(DB::raw('MONTH(tbl_monthly_link_views.created_at), DATE_FORMAT(tbl_monthly_link_views.created_at, "%M")'))
            ->orderBy(DB::raw('MONTH(tbl_monthly_link_views.created_at)'))
            ->get();


        $labels = $LinksChartData->pluck('month')->toArray();
        $data = $LinksChartData->pluck('total_views')->toArray();


        return view('dashboard.dashboard', compact('links', 'labels', 'data'));
    }


    // Esta sección ya no es usada

    /* public function links_index(){
        $LinksData = tbl_links::all();
        return view('dashboard.links', compact('LinksData'));
    } */

    public function referrals_index()
    {
        return view('dashboard.referrals');
    }

    public function payouts_index()
    {
        return view('dashboard.payouts');
    }

    public function support_index()
    {
        return view('dashboard.support');
    }

    public function info_index()
    {
        return view('dashboard.info');
    }

    public function Advertising_index()
    {
        return view('AdLinkShortener.advertising');
    }
}
