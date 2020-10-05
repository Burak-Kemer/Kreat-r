<?php
session_start();

if($_SESSION["authority"] == "admin")
{
echo "Sadece adminler görebilir.";

echo "<br><a href='index.php'>Anasayfaya dön</a>";
}
else
{
	header("Location:index.php");
}