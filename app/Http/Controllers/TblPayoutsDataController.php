<?php

namespace App\Http\Controllers;

use App\Models\tbl_payouts_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;


class TblPayoutsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $PayoutData = $user->PayoutData;


        return view('dashboard.payouts', compact('PayoutData'));
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
    public function edit()
    {
        $user = Auth::user();
        $PayoutData = $user->PayoutData;



        $countries = Cache::remember('countries', now()->addDay(), function () {
            $response = Http::get('https://restcountries.com/v3.1/all');
            return $response->json();
        });

        $countries = is_array($countries) ? $countries : [];


        usort($countries, function ($a, $b) {
            return strcasecmp($a['name']['common'], $b['name']['common']);
        });



        return view('dashboard.payoutform', compact('PayoutData', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $PayoutData = $user->PayoutData;

        $PayoutData->paydata_email = $request->input('paydata_email');
        $PayoutData->paydata_user_name = $request->input('paydata_user_name');
        $PayoutData->paydata_phonenumber_prefix = $request->input('paydata_phonenumber_prefix');
        $PayoutData->paydata_phonenumber = (string) $request->input('paydata_phonenumber');
        $PayoutData->paydata_address = $request->input('paydata_address');
        $PayoutData->paydata_address_2 = $request->input('paydata_address_2');
        $PayoutData->paydata_country = $request->input('paydata_country');
        $PayoutData->paydata_city = $request->input('paydata_city');
        $PayoutData->paydata_zip = $request->input('paydata_zip');

        $PayoutData->save();


        return redirect()->route('payouts')->with('success', 'Payout data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tbl_payouts_data $tbl_payouts_data)
    {
        //
    }
}
