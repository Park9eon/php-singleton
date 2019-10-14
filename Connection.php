<?php

require_once 'autoload.php';

logging('@ require Connection.php');

class Connection
{
    private static $instance = null;
    private $host;
    private $database;
    private $username;
    private $password;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            $config = getConnectionConfig();
            self::$instance = self::withConnect($config);
        }

        return self::$instance;
    }

    private static function withConnect($config)
    {
        $connection = new Connection($config);
        $connect = $connection->connect();

        return $connect;
    }

    private function __construct($config)
    {
        $this->host = $config->host;
        $this->database = $config->database;
        $this->username = $config->username;
        $this->password = $config->password;
    }

    private function connect()
    {
        logging('- Start connect!');
        randomMillisecondsSleep();
        logging('- Connected!!');
        return $this;
    }

    public function execute($msg)
    {
        randomMillisecondsSleep();
        logging('* execute - $msg : "' . $msg . '" / count : ');
        return $msg;
    }
    public function disconnect()
    {
        self::$instance = null;
    }
}
