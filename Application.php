<?php

require_once 'autoload.php';
require_once 'Connection.php';

logging('@ require Application.php');

$connection = Connection::getInstance();

$connection->execute('SELECT idx, username WHERE user;');
