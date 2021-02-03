<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {


    // $keywordFind = str_replace(" ","%20",$keyword);
    
    // $getWikiAnswer =json_decode(file_get_contents('https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=1&explaintext=1&redirects=1&titles='.$keywordFind.'&indexpageids'), true);
    // $pageid = $getWikiAnswer['query']['pageids'][0];
    // $getAnswer = $getWikiAnswer['query']['pages'][$pageid]['extract'];

    $bot->reply('Hello');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
