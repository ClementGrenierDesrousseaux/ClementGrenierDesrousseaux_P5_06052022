<?php

namespace App\Entity;

use PDO;

define('DB_USER',$_ENV["dbUsername"]);
define('DB_PASS',$_ENV["dbPassword"]);
define('DB_HOST',$_ENV["dbHost"]);
define('DB_NAME',$_ENV["dbName"]);

class DatabaseConnector extends PDO
{
    function __construct()
    {
        parent::__construct('mysql:dbname='.DB_NAME.';host='.DB_HOST,DB_USER,DB_PASS);
    }
}
