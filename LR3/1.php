﻿<?php
$db_host = "localhost";
$db_name = "f0586192_muh";
$db_user = "f0586192_muh";
$db_pass = "muh";
$tek=$_GET["tek"];
$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Невозможно подключиться к БД");
mysqli_query ($db, "SET NAMES utf8"); 
$res = mysqli_query($db, "SELECT * FROM otziv ORDER BY id");
$arPosts = array();
if ($res){
    while($row = mysqli_fetch_assoc($res)){
        $arPosts[] = $row;
    }   
}
foreach ($arPosts as $article): 
     echo '<br><br><div style="border: 1px solid pink">Имя: <span style="font-weight: bold; color: black;">'.$article['nam'].'</span><br>Почта: '.$article['email'].'<br>';
      echo '<p>Ответ: '.$article['txt'].'</p></div>';
     endforeach; 
?>