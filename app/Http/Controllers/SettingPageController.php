<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class SettingPageController extends Controller
{
    public function index(){
        $info = Page::first();
        return view('admin.settings',compact('info'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'description' => 'required',
            'email'=> 'required',
            'phone' => 'required',
            'address' => 'required',
            'schedules' => 'required',
        ]);
        Page::create($request->post());
        return redirect()->route('settings.admin')->with('success', 'Datos de pagina guardadas correctamente.');
        
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=>'required',
            'description' => 'required',
            'email'=> 'required',
            'phone' => 'required',
            'address' => 'required',
            'schedules' => 'required',
        ]);
        $info = Page::firstOrNew(['id' => $id]);
        $info->fill($request->post());
        $info->save();

        return redirect()->route('settings.admin')->with('success', 'Datos de pagina guardadas correctamente.');
    }
}