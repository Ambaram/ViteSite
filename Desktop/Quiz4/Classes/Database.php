<?php
namespace Model;
class Database
{
    private static $user = 'root';
    private static $password = '';
    private static $dsn="mysql:host=localhost;dbname='quiz4'";
    private static $dbcon ;

    // static properties and private constructor: Singleton classes: Require Once only
    private function __construct()
    {
    }

    // Get pdo connection
    public static function getdb(){
        if(!isset(self::$dbcon)){
            try{
                self::$dbcon = new \PDO(self::$dsn, self::$user,self::$password);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\PDOException $e){
                $msg = $e->getMessage();
                echo $msg;
                exit();
            }
        }
        return self::$dbcon;
    }
}
