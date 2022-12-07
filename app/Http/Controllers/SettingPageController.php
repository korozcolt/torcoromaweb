<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
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

    public function store(SettingRequest $request){

        Page::create($request->validate());

        Alert::success('Success', 'Configuración guardada con éxito');
        
        return redirect()->route('settings.admin');
        
    }

    public function update(SettingRequest $request, Page $page){

        $info = Page::firstOrFail(['id' => $page->id]);
        $info->fill($request->validated());
        $info->save();
        Alert::success('Success', 'Configuración actualizada');
        return redirect()->route('settings.admin');
    }
}