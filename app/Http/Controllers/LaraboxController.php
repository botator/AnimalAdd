<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\larabox;

class LaraboxController extends Controller
{
    public function GetAnimal(){
        return view('welcome',[
            'result' => larabox::SELECT('name','age','animal','species','color','imgId')->get()
        ]);
    }
    public function AddAnimal(Request $req){
        $req->validate([
            'name' => 'required',
            'age' => 'required|numeric|min:0.1',
            'animal' => 'required',
            'species' => '',
            'color' => '',
            'file' => 'required|file|mimes:jpg,png,pdf'
        ],[
            'name.required' =>"A nevet kötelező megadni",
            'age.required'=>"A kort kötelező megadni",
            'animal.required'=>"Az állat faját kötelező megadni",
            'age.numeric' =>"A kort számbankell megadni",
            'age.min' => "a kor nagyobb kell legyen mint nulla",
            'petPic.required' => "Nem töltöttél fel a kisállatodról képet"
        ]);

        $data = new larabox;
        $data->name = $req->name;
        $data->age = $req->age;
        $data->animal = $req->animal;
        $data->species = $req->species;
        $data->color = $req->color;

        if ($req->file('file')->isValid()) {
            $imgId = $req->file('file')->store('uploads', 'public');
            $data->imgId = $imgId;
            $data->Save();

            return back()->with('success', 'File uploaded successfully')->with('file', $imgId);
        }else{return back()->with('error', 'File upload failed');}

    }
}
