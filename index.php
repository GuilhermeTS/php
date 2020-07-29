<?php

$uri = explode('/', $_SERVER["REQUEST_URI"]);

if ($uri[2]) 
{
	print_r($uri[2]);
}