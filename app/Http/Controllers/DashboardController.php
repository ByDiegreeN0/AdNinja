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

    public function links_index(){
        $LinksData = tbl_links::all();
        return view('dashboard.links', compact('LinksData'));
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

    // metodos para LINKS

    public function shorten_links(){
       
    }

    public function store_link(Request $request){
        $linksData = $request->except('_token');
        $newLink = tbl_links::create($linksData);
    
        $linkShortener = $this->createShortUrl();
        $newLink->url_new_url = $linkShortener;
        $newLink->save();
    
        return redirect()->back()->with('success', 'Link added successfully');
    }
    
    private function createShortUrl(){
        $longitud = 15;
        $linkShortener = Str::random($longitud);
        return route('redirect', ['id' => $linkShortener]);
    }
    
    public function linkRedirect($id){
        $link = tbl_links::where('url_new_url', $id)->first();

         if ($link) {
           
            if (filter_var($link->url_old_url, FILTER_VALIDATE_URL)) {
                return view('AdLinkShortener.advertising', ['enlace' => $link->url_old_url]);
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }

       /* if ($link) {
           
            if (filter_var($link->url_old_url, FILTER_VALIDATE_URL)) {
                return redirect($link->url_old_url);
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }

        */
    
    }
    

    public function edit_link(){

    }

    public function destroy_link($url_id){

        tbl_links::destroy($url_id);
        return redirect('dashboard/links');
    }
}
