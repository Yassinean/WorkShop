<?php

require 'db_config.php';

class database
{
    public function connection()
    {
        try{
            $conn = new PDO('mysql:host=' . host . ';dbname=' . dbName . ';user='. user . ';password=' . password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "allo " . $e->getMessage(); 
        }
    }   
}
