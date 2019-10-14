<?php

const MILLISECONDS = 0.5;
const MILLISECONDS_RANGE = 5;

function getConnectionConfig()
{
    $config = (object)[];
    $config->host = 'localhost';
    $config->database = 'mysql_test';
    $config->username = 'mysql_user';
    $config->password = 'mysql_password';

    return $config;
}

// MILLISECONDS milliseconds + random[0 ~ MILLISECONDS_RANGE milliseconds] 동안 지연
function randomMillisecondsSleep()
{
    usleep(1000 * MILLISECONDS + rand(0, 1000 * MILLISECONDS * MILLISECONDS_RANGE));
}

function logging($msg)
{
    echo $msg . PHP_EOL;
}

logging('@ require Autoload.php');
