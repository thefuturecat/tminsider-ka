<?php

$url = "https://mp001-pc.turbo.trackmania.com/game/request.php";
$xmlData = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<root>
<game>
    <name>ManiaPlanet</name>
    <version>3.3.0</version>
    <build>2016-11-07_16_15</build>
    <distro>UPLAY</distro>
    <lang>en</lang>
    <title>TMTurbo@nadeolabs</title>
    <network>394</network>
    <dedicated>0</dedicated>
    <beta>0</beta>
</game>
<author>
    <login>tisytahu-pc60043f793f1a9</login>
    <session>2338483</session>
</author>
<request>
    <name>LiveTick</name>
    <check>0</check>
    <count>1</count>
</request>
</root>
XML;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/xml',
    'Accept: application/xml',
]);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo "IS STILL ALIVE!!!!<br>";
    echo $response;
}

curl_close($ch);
?>
