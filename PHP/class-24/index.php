<?php
//there are 4 types of functions to connect files : 1. require, 2. require_once 3. include 4. include_once
require_once 'vendor/autoload.php';

use App\classes\HelloWorld;

$helloWorld = new HelloWorld();
$helloWorld->index();