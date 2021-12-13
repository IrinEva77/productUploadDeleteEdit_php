<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/13/2021
 * Time: 11:06 AM
 */

namespace App\classes;
use App\classes\Database;

class Auth extends  Database
{
private  $email;
private  $password;
private  $con;
private  $sql;
private  $queryResult;
private  $data;

public function __construct($data= null)

{
    $this->con = $this->connect();
    if($data)
    {
        $this->email = $data['email'];
        $this->password =md5 ($data['password']);
    }
}



public  function  login()
  {
//      echo '<pre>';
//      print_r($this->con);
//      exit();
        $this->sql = "SELECT * FROM  users WHERE email = '$this->email' AND password = '$this->password' ";
        if($this->queryResult = mysqli_query($this->con, $this->sql))
        {
            $this->data = mysqli_fetch_assoc($this->queryResult);
            if($this->data)
            {
                session_start();
                $_SESSION ['id'] = $this->data['id'];
                $_SESSION ['name'] = $this->data['name'];
                header('location:home.php');
            }
            else{
                return'sorry,email or password is wrong';
            }
        }
        else
        {
            die ('Query Problem...'.mysqli_error($this->con));
        }
   }

   public function logout()
   {
       session_start();
       unset($_SESSION['id']);
       unset($_SESSION ['name']);
       header('location: action.php?status=index');
   }
}