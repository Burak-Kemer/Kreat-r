<?php
session_start();

if($_SESSION["authority"] == "admin" || $_SESSION["authority"] == "editor")
{
echo "Adminler ve editörler görebilir.";

echo "<br><a href='index.php'>Anasayfaya dön</a>";
}
else
{
	header("Location:index.php");
}