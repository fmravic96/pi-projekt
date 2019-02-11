<?php

namespace App\Http\Controllers;
use App\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showUploadForm(){
        return view('upload');
        //return $request->all();
    }
    public function storeFile(request $request){
        if($request->hasFile('file2')){
            for($i = 0;$i<count($request->file2);$i++){
            $filesize = $request->file2[$i]->getClientSize();
            $filename = $request->file2[$i]->getClientOriginalName();
            $request->file2[$i]->storeAs('public/upload/catalogs',$filename);
            $file2[$i]= new Catalog;
            $file2[$i]->name = $filename;
            $file2[$i]->size = $filesize;
            $file2[$i]->save();
            
        }
        return 'spremljeno';
        }
        return $request->all();
    }
    public function index()
    {
     
        $catalog = Catalog::orderBy('created_at', 'desc')->first();;
        return view('home')->with($catalog);
    }
}
