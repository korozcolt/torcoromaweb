<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChatbotRequest;
use App\Http\Requests\UpdateChatbotRequest;
use App\Models\Chatbot;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.chat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChatbotRequest $request)
    {
        Chatbot::create($request->validated());
        
        Alert::success('Chatbot','Pregunta y respuesta registrada exitosamente');
        return redirect()->route('chatbot.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function edit(Chatbot $chatbot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChatbotRequest $request, Chatbot $chatbot)
    {
        $chatbot->fill($request->validated())->save();
        Alert::success('PQRS Actualizado','Mensaje actualizado exitosamente');
        
        return redirect()->route('support.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chatbot  $chatbot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chatbot $chatbot)
    {
        $chatbot->delete();
        Alert::success('Chatbot','Pregunta y respuesta eliminada exitosamente');
        
        return redirect()->route('chatbot.index');
    }
}