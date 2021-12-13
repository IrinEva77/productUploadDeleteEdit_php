<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/13/2021
 * Time: 9:31 AM
 */

namespace App\classes;


class Front
{
public function index()
{
    header('location:pages/action.php?status=index');
}
}