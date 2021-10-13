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
        $info->title = $request->get('title');
        $info->description = $request->get('description');
        $info->email = $request->get('email');
        $info->email2 = $request->get('email2');
        $info->phone = $request->get('phone');
        $info->phone2 = $request->get('phone2');
        $info->address = $request->get('address');
        $info->schedules = $request->get('schedules');
        $info->facebook = $request->get('facebook') ? $request->get('facebook') : '#';
        $info->instagram = $request->get('instagram') ? $request->get('instagram') : '#';
        $info->twitter = $request->get('twitter') ? $request->get('twitter') : '#';
        $info->youtube = $request->get('youtube') ? $request->get('youtube') : '#';
        $info->linkeid = $request->get('linkeid') ? $request->get('linkeid') : '#';
        $info->save();

        return redirect('/admin/page-settings')->with('success', 'Datos de pagina guardadas correctamente.');
    }
}
