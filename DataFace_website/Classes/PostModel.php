<?php

include_once "./db.php";
session_start();

class PostModel{

    public function __construct()
    {   
        $response = [];
        $action = $_REQUEST["action"];
        if($action == "insert"){
            $response = self::InsertData($_POST);
        }else if($action == "select"){
            $response = self::SelectData($_POST);
        }
        
        echo json_encode($response);
    }


    public static function InsertData($userdata){
        $username = $userdata['username'];
        $password = $userdata['password'];
        $confirmpassword = $userdata['confirmpassword'];
        if($password == $confirmpassword){
            $sql = "insert into userdata (username,password,confirmpassword) values ('$username','$password','$confirmpassword')";
            $dataset_path = "../views/dataset/".$username;
            if(!file_exists($dataset_path)){
                mkdir($dataset_path);
            }
            $response = DB::insert_data($sql);
        }
        return $response;
        
    }


    public static function SelectData($userdata){
        $response = [
            "status" =>"Error",
            "message" => "Try Again",
        ];
        $username = $userdata['username'];
        $password = $userdata['password'];
        $_SESSION['user'] = $username;
        $sql = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";
        $dt_array = DB::select_data($sql);
        if($dt_array){
            $response['status'] = "Success";
            $response['message'] = "Record Check";
        }
        return $response;
        
    }   


    
}


if(isset($_REQUEST['action'])){
    new PostModel();
}





?>