<?php

namespace App\Http\Controllers;

use App\Models\tbl_payouts_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TblPayoutsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('dashboard.payouts');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tbl_payouts_data $tbl_payouts_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tbl_payouts_data $tbl_payouts_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tbl_payouts_data $tbl_payouts_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tbl_payouts_data $tbl_payouts_data)
    {
        //
    }
}
