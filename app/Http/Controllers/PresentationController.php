<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use DB;
use App\Presentation;
use App\Customers;
use App\Guest;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentations = Presentation::all();
        return view('presentations')->with($presentations);
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
        $hostName = Customers::where('id', $request->get('host'))->value('name');
        $guests = $request->get('guests');

        DB::table('customers')->whereId($request->get('host'))->increment('host');
        $presentations = new Presentation([
            'idPrez' => Auth::user()->id,
            'hostId' => $request->get('host'),
            'host' => $hostName,
        ]);
        $presentations->save();
        if($guests==NULL){
            return view('/presentations'); 
        }
        else{
            for($i = 0;$i<count($guests);$i++){
            
                $guestName = Customers::where('id', $guests[$i])->value('name');
                $guest = new Guest([
                    'idPrez' => $presentations['id'],
                    'guestId' => $guests[$i],
                    'name' => $guestName,
                ]);
                
                $guest->save();
            }
        }
        
        $customers = Customers::All()->toArray();
        $presentations = Presentation::All()->toArray();
        $guests = Guest::All()->toArray();
        return view('presentations', compact('customers','presentations', 'guests'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentation $presentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
