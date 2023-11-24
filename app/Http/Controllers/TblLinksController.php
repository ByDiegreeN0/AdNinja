<?php

namespace App\Http\Controllers;

use App\Models\tbl_links;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Psy\VarDumper\Dumper;

class TblLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();
        $links = $user->links;

        return view('dashboard.links', compact('links'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $user = Auth::user();

        $linksData = $request->except('_token');
        $linksData['user_id'] = $user->id;

        $newLink = tbl_links::create($linksData);
        $linkShortener = $this->createShortUrl();
        $newLink->url_new_url = $linkShortener;
        $newLink->save();

        return redirect()->back()->with('success', 'Link added successfully');
    }


    private function createShortUrl()
    {

        $linkShortener = Str::random(15);
        $ShortUrl = route('redirect', ['id' => $linkShortener]);

        return $ShortUrl;
    }

    public function ShowAdvertising($short_url)
    {

        $short_url_key = last(explode('/', $short_url));

        $link = tbl_links::where('url_new_url', 'like',  "%{$short_url_key}%")->first();

        if ($link) {
            $link->url_views++;
            $link->save();
        } else {
            return abort(404);
        }

        

        return view('AdLinkShortener.advertising', ['url_new_url' => $short_url]);
    }

    /**
     * Display the specified resource.
     */
    public function show(tbl_links $tbl_links)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tbl_links $tbl_links)
    {
        // no se usa actualmente
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tbl_links $tbl_links)
    {
        // no se usa actualmente
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($url_id)
    {
        tbl_links::destroy($url_id);
        return redirect('dashboard/links');
    }
}
