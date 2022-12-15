<?php

namespace App\Http\Controllers;

use App\Models\Chatbot;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            $save_message = Chatbot::whereLike('ask',"%{$message}%")->first();

            if ($message == 'Hola' || $message == 'hola') {
                $this->askName($botman);
            }
            else if($save_message){
                $botman->reply($save_message->answer);
            }
            else {
                $botman->reply("Escriba 'Hola' para iniciar");
            }
        });

        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask('Hola!, Quisieramos saber con quien estamos hablando?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Mucho gusto, ' . $name .' en que podemos ayudarte?');
        });
    }
}