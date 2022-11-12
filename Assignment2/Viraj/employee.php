<?php

class employee
{
    private $db;
    function __construct() {  
        // connecting to database
        require_once('database.php');
        $this->db = mysqli_connect(DB_HOST, DB_USER , DB_PASSWORD, DB_DATABSE);
    }

    public function employeeRegister($firstname, $lastname, $email, $mobile, $role, $username, $password, $address) {
        // Check if email already exists
       // if($this->isEmailExist($email)) {
       //  echo "Email already exists.";
       //    exit;
       //}

        // Check if username already exists
       // if($this->isUserExist($username)) {
           // echo "Username already exists.";
            //exit;
       // }

        $query = mysqli_query($this->db, "INSERT INTO tb_user(firstname, lastname, useremail, mobile_no, role, username, userpassword, address) values('".$firstname."','".$lastname."','".$email."', '".$mobile."','".$role."','".$username."', '".$password."','".$address."')");  
        $num = mysqli_affected_rows($this->db);
        
        if(isset($num)&& $num >0 ){
            echo "Record Inserted sucessfully.";
            exit;
        }
        else 
        {
            echo "Record Could not be inserted sucessfully.";
            exit;
        }
       

    }

    public function employeeLogin($username, $password) {
        $response = mysqli_query($this->db, "SELECT * FROM tb_user WHERE username = '".$username."' AND password = '".$password."'");  
        $user_data = mysqli_fetch_array($response);  
        $rows = mysqli_num_rows($response);  
            
        if ($rows == 1) {
            session_start();
            $_SESSION['username'] = $user_data['username'];  
            $_SESSION['firstname'] = $user_data['first_name'];  
            return true;  
        } else {  
            return false;  
        }
    }

    public function isEmailExist($email) {
        $query = mysqli_query($this->db, "SELECT * FROM tb_user WHERE useremail = '".$email."'");  
        echo $row = mysqli_num_rows($query);  
        if($row > 0){  
            return true;  
        } else {  
            return false;  
        }
    }

    public function isUserExist($username) {
        $query = mysqli_query($this->db, "SELECT * FROM tb_user WHERE username = '".$username."'");  
        echo $row = mysqli_num_rows($query);  
        if($row > 0){  
            return true;  
        } else {  
            return false;  
        }
    }
    public function displayDetails(){

        $query = mysqli_query($this->db, "SELECT * FROM tb_user");  
        while($row = mysqli_fetch_array($query))
        {
            $result[] = $row;
        }

       return  $result;
    }  
}