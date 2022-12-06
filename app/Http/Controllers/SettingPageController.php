<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use RealRashid\SweetAlert\Facades\Alert;

class SettingPageController extends Controller
{
    public function index(){
        $info = Page::first();
        return view('admin.settings',compact('info'));
    }

    public function dashboard(){
        return view('admin.dashboard');
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

        Alert::success('Success', 'Configuración guardada con éxito');
        
        return redirect()->route('settings.admin');
        
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
        Alert::success('Success', 'Configuración actualizada');
        return redirect()->route('settings.admin');
    }
}