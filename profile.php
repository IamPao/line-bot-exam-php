<?php


$access_token = 'G8K/xCgYaaQQz7KfFFNhtr74/xoYUL9qErsYgIc8RJuN+ZsDOt6E4AoB8I0co3Uli8nb2bN9FkizTEwQshXJcBXPq5li8H+76SjxhIvZNc1z7aiUXQ0twn4Ba8okJV6MCPelfG9r7zBMJHKcAh1JMwdB04t89/1O/w1cDnyilFU=';

$userId = 'Uc581721d958bb121a98ca0979e2b27c3';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

