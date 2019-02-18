<?php

namespace App\Http\Controllers;

use Storage;
use App\Flyer;
use Illuminate\Http\Request;

class FlyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUploadForm(){
        return view('upload');
        //return $request->all();
    }
    public function storeFile(request $request){
        if($request->hasFile('file')){
            $filesize = $request->file->getClientSize();
            $filename = $request->file->getClientOriginalName();
            $request->file->storeAs('public/upload',$filename);
            $file= new Flyer;
            $file->name = $filename;
            $file->size = $filesize;
            $file->save();
        }
        return view('/editFlyers');
    }
    public function index()
    {
     
        $flyer = Flyer::orderBy('created_at', 'desc')->first();;
        return view('home')->with($flyer);
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
        return 'Sucessfully added.';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flyer  $flyer
     * @return \Illuminate\Http\Response
     */
    public function show(Flyer $flyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flyer  $flyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Flyer $flyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flyer  $flyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flyer $flyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flyer  $flyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flyer $flyer)
    {
        //
    }
}
