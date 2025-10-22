<?php
namespace App;
use PDO;



class Database {
    private static ?PDO $instance = null;
    
    public static function getInstance(){
          $host="php2526-db-1";
  $db="citas";
  $user="root";
  $password="root";
  $port=3306;

        if (!self::$instance){
            $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

            // Conectar a la base de datos
            self::$instance = new PDO($dsn, $user, $password);
        }

        return self::$instance;
    }
}