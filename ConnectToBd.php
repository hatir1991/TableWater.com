<?php
 function connDb(){

 $dbConn=new PDO('mysql:host=localhost;dbname=Water','root','');
 return $dbConn;
}