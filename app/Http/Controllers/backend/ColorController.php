<?php

namespace App\Http\Controllers\backend;

use App\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        $this->data['colors'] = Color::latest()->get();
        return view('backend.color.index',$this->data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required','unique:colors'],
        ]);

        $size = new Color();
        $size->name = ucwords($request->name);
        if($size->save()){
            return redirect()->back()->with('toast_success','New Color Added! ['.$request->name.']');
        }
    }

    public function update(Request $request,$id){
        $size = Color::find($id)->update([
            'name' => ucwords($request->name),
        ]);
        if($size){
            return redirect()->back()->with('toast_success','Color name Updated! ['.$request->name.']');
        }
    }

    public function delete(Request $request){
        $del = Color::find($request->id)->delete();
        if($del){
            return redirect()->back();
        }
    }
}
