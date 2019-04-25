<?php

class database{
    private static $serveur="localhost";
    private static $dbname="avril";
    private static $user="root";
    private static $password="";
    
    private static $connexion=null;

    public static function connect()
    {
        try{
            self::$connexion= new PDO("mysql:host=". self::$serveur.";dbname=". self::$dbname, self::$user, self::$password);
        }
        catch(PDOExeption $e){
            die($se->getMessage());
        }
        return  self::$connexion;
    }
   public static function disconnect()
   {
    self::$connexion=null;
   }
}






