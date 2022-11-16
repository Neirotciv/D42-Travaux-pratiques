<?php

$url = explode('?', $_SERVER['REQUEST_URI'])[0];
$data = explode('/', $url);
$page = $data[1];

print_r($url);
echo '<br>';
print_r($data);
echo '<br>';
$page = $data[1];
echo $page;

switch($page)
{
    
}