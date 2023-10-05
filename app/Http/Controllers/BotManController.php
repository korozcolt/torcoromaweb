<?php

namespace App\Http\Controllers;

use App\Models\Chatbot;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{

    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function ($botman, $message) {
            if ($message == 'Hola' || $message == 'hola') {
                $this->askName($botman);
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
            $this->askQuestion($this);
        });
    }

    public function askQuestion($botman)
    {
        $botman->ask('¿En que podemos ayudarte?', function (Answer $answer) {
            $question = $answer->getText();
            $answer = Chatbot::where('question', $question)->first();
            $this->say($answer->answer);
        });
    }
}