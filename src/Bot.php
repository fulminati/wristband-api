<?php

require_once __DIR__.'/../vendor/autoload.php';

Dotenv\Dotenv::createUnsafeImmutable(__DIR__.'/..')->load();

$channelSecret = getenv('LINE_BOT_CHANNEL_SECRET');
$channelAccessToken = getenv('LINE_BOT_CHANNEL_ACCESS_TOKEN');
$userId = getenv('LINE_BOT_USER_ID');

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($channelAccessToken);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello 2');

$response = $bot->pushMessage($userId, $textMessageBuilder);

var_dump($response);
