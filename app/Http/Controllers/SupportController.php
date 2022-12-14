<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupportRequest;
use App\Http\Requests\UpdateSupportRequest;
use App\Models\Support;
use RealRashid\SweetAlert\Facades\Alert;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('admin.support.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupportRequest $request)
    {
        Support::create($request->validated());
        Alert::success('PQRS Enviado','Mensaje enviado exitosamente');
        
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(Support $support)
    {
        return view('admin.support.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupportRequest  $request
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupportRequest $request, Support $support)
    {
        $support->fill($request->validated())->save();
        Alert::success('PQRS Actualizado','Mensaje actualizado exitosamente');
        
        return redirect()->route('support.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
        $support->delete();
        Alert::success('PQRS Eliminado','Mensaje eliminado exitosamente');
        
        return redirect()->route('support.index');
    }
}