<?php

require "bootstrap.php";

$newController = new NewsController();
$newsList = $newController->list();

foreach ($newsList as $news) {
    echo("############ NEWS " . $news->title . " ############\n");
    echo($news->body . "\n");
    foreach ($news->comments as $comment) {
        echo("Comment " . $comment->id . " : " . $comment->body . "\n");
    }
}