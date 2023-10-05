<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Page;
use RealRashid\SweetAlert\Facades\Alert;

class SettingPageController extends Controller
{
    public function index(){
        $page = Page::first();
        return view('admin.settings',compact('page'));
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function store(SettingRequest $request){

        Page::create($request->validated());
        Alert::success('Success', 'Configuración guardada con éxito');
        return redirect()->route('settings.admin');
        
    }

    public function update(SettingRequest $request, Page $page){

        $page->fill($request->validated())->save();
        Alert::success('Success', 'Configuración actualizada');
        return redirect()->route('settings.admin');
    }
}