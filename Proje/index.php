<?php
session_start();
// print_r($_SESSION);
if(empty($_SESSION["user"])){
    echo "user yok";
    header("Location:login.php");

    }else{
        echo "hoşgeldiniz " . $_SESSION["user"];
    }
if($_SESSION["authority"] == "admin")
{
echo '<br><br><a href="content1.php">CONTENT 1</a><br>';  
echo '<a href="content2.php">CONTENT 2</a><br>';
}
else if ($_SESSION["authority"] == "editor")
{
echo '<br><br><a href="content1.php">CONTENT 1</a><br>';
}
echo '<a href="logout.php">Çıkış Yap</a>';    