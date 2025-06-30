<?php
    class Auth{
            private $db;

            public function __construct($conn){
                $this->db= $conn;
            }

            public function checkEmail ($email){
                $sql = "SELECT * FROM auth WHERE email = '$email'";
                $result= $this->db->query($sql);
                return $result->fetch_assoc();
            }

            public function register($name, $email, $password){
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                
                $sql = "INSERT INTO auth (name, email, password) VALUES ('$name', '$email', '$passwordHash')";
                return $this->db->query($sql);
            }

            public function login ($email, $password){
                $check  = $this->checkEmail($email);

                if($check && password_verify($password, $check['password'])){
                    return $check;
                }
                
                return false;
              
            }

    }

?>