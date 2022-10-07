<?php

namespace App\Entity;

use PDO;

define('DB_USER','root');
define('DB_PASS','root');
define('DB_HOST','localhost');
define('DB_NAME','bdd_P5');

class DatabaseConnector extends PDO
{
    function __construct()
    {
        parent::__construct('mysql:dbname='.DB_NAME.';host='.DB_HOST,DB_USER,DB_PASS);
    }
}
