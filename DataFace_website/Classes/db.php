<?php

class DB{


    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "facerec";

    public function connect(){
        $con = mysqli_connect($this->host,$this->user,$this->pwd,$this->dbName);
        return $con;
    }


    public static function insert_data($query){
        $response = [
            "status" =>"Error",
            "message" => "Try Again",
        ];
        $db = new DB();
        $con = $db->connect();
        $result = mysqli_query($con,$query);
        if($result){
            $response['status'] = "Success";
            $response['message'] = "Record Inserted";
        }
        return $response;
    }


    public static function select_data($query){
        $db = new DB();
        $con = $db->connect();
        $result = mysqli_query($con,$query);
        $array = [];
        while($row = mysqli_fetch_assoc($result)){
            $array[] = $row;
        }
        return $array;
    }

    
}

?>