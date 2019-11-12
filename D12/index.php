<?php
$data = file_get_contents('example.xml');

$xml = simplexml_load_string($data);

$data = [];

foreach ($xml->children() as $child) {
    $data[] = $child;
}

echo(json_encode($data));

// simple way
//$data = json_encode($xml);
//$data = json_decode($data, TRUE);
//echo(json_encode($data));
