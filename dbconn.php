<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount('qrcode-2a1d0-firebase-adminsdk-mv91f-b090d0b8c6.json')
    ->withDatabaseUri('https://qrcode-2a1d0-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();
$auth = $factory->createAuth();
