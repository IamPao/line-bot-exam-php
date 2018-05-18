<?php


$access_token = 'yx2RLbuSr395YaXKY78anUrJOXFLQQa9sw2m5lYF9ulOQwVA6ck3aJ9ft7C9a0txWMTFXu06RYhLrrlmm2HXiiWnBC2CPe99tRX3VyQ4IlX4jJDOb5F+etuBb2sCcXlAoakB76v/nV45uwRQN+0Y+gdB04t89/1O/w1cDnyilFU=';

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

