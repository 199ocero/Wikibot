<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('{keyword}', function ($bot,$keyword) {
    $bot->reply('Hello! You write: '.$keyword);
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
