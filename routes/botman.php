<?php

use App\Models\Chatbot;
use BotMan\BotMan\Messages\Incoming\Answer;

$botman = app('botman');

$botman->hears('{message}', function ($botman, $message) {
    if ($message == 'Hola' || $message == 'hola') {
        askName($botman);
    }
    else {
        $botman->reply("Escriba 'Hola' para iniciar");
    }
});

function askName($botman){
    $botman->ask('Hola!, Quisieramos saber con quien estamos hablando?', function (Answer $answer) {
        $name = $answer->getText();
        $this->say('Mucho gusto, ' . $name .' en que podemos ayudarte?');
        askQuestion();
    }); 
}

function askQuestion(){
    $botman->ask('¿En que podemos ayudarte?', function (Answer $answer) {
        $question = $answer->getText();
        $answer = Chatbot::where('question', $question)->first();
        $this->say($answer->answer);
    });
}

?>  