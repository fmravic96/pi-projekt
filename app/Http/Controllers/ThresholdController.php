<?php

namespace App\Http\Controllers;

use App\Threshold;
use DB;
use Illuminate\Http\Request;

class ThresholdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threshold = Threshold::all();
        return view('receipt')->with($threshold);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        for($i = 1;$i<=12;$i++){
            DB::table('thresholds')->where('month', $i)->update(['moneyThreshold' => $request->get('m'.$i)]);
        }

        return 'radi yyyeeeeeyyy';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Threshold  $threshold
     * @return \Illuminate\Http\Response
     */
    public function show(Threshold $threshold)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Threshold  $threshold
     * @return \Illuminate\Http\Response
     */
    public function edit(Threshold $threshold)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Threshold  $threshold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Threshold $threshold)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Threshold  $threshold
     * @return \Illuminate\Http\Response
     */
    public function destroy(Threshold $threshold)
    {
        //
    }
}
