<?php

class DatabasePDO extends MyObject {

  protected static $localhost="localhost";
  protected static $dbname = "oumaima_jeddi";
  protected static $user = "oumaima.jeddi";
  protected static $password = "sfLVNUro";


  private static   $pdo = null;


    public static function getCurrentpdo() {

        if(is_null(static::$pdo)) {
          static::$pdo = new static();

        }
        static::connect();
        return static::$pdo;
      }

    public static function connect(){
      try {
      self::$pdo = new PDO("mysql:host=".self::$localhost.";dbname=".self::$dbname, self::$user, self::$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOexception $e) {
        $e->getMessage();
    }
    return self::$pdo;
   }
    }
?>
