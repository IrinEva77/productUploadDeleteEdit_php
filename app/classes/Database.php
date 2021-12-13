<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/13/2021
 * Time: 11:19 AM
 */

namespace App\classes;


class Database
{
private  $hostName;
private  $userName;
private  $password;
private  $dbName;
private  $link;



protected  function  connect()
{
    $this->hostName = 'localhost';
    $this->userName = 'root';
    $this->password = '';
    $this->dbName = 'project_13';
    $this->link = mysqli_connect($this->hostName, $this->userName, $this->password, $this->dbName);
    if ($this->link)
    {
        return $this->link;
    }
    else{
        die ('Connection fail..');
    }
}
}