<?php

namespace App\Http\Controllers;

use App\Models\tbl_links;
use Illuminate\Http\Request;

class TblLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $LinksData = tbl_links::all();
        return view('dashboard.links', compact('LinksData'));
        
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
        $LinksData = request()->except('_token');
        tbl_links::insert($LinksData);
        return response()->json($LinksData);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tbl_links $tbl_links)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($url_id)
    {
        tbl_links::destroy($url_id);
        return redirect('dashboard.links');
    }
}
