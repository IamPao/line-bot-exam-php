<?php



require "vendor/autoload.php";

$access_token = 'G8K/xCgYaaQQz7KfFFNhtr74/xoYUL9qErsYgIc8RJuN+ZsDOt6E4AoB8I0co3Uli8nb2bN9FkizTEwQshXJcBXPq5li8H+76SjxhIvZNc1z7aiUXQ0twn4Ba8okJV6MCPelfG9r7zBMJHKcAh1JMwdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '1b621aa964edc8ffba41470c8dc55119';

$pushID = 'Uc581721d958bb121a98ca0979e2b27c3';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







