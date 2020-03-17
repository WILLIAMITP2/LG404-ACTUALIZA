<?php 

class DB {

    //conexión
    static $host = "localhost";
    static $user = "root";
    static $password = "";
    static $db = "personas";   

    public static function init(){
        echo "Inicia base de datos";
    }

    public static function query($sql){
        // se crea la conexión
        $con = new mysqli(self::$host, self::$user, self::$password, self::$db);
        
        $result = $con->query($sql); 
        
        $con->close();

        return $result;
        
       
    }
}

?>