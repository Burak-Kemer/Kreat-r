<?php
session_start();

$htmlForm = <<< BLOK
   
<form name="login" method="post">
            <table> <table align="center">
                <tr>
                    <td>Kullanıcı Adı</td>
                    <td><input type="text" name="kullanici_adi" /></td> 
                </tr>
                <tr>
                    <td>Şifre</td>
                    <td><input type="password" name="kullanici_sifre" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Giriş" /></td>
                </tr>
            </table>
        </form>
BLOK;

$YetkisizGiris= <<< BLOK
   <div style="width:300px; height:100px; padding:50px; margin:50px auto; background-color:black; color:red; font-weight:20px;">Bu sayfayı görme yetkiniz yoktur</div>
   
BLOK;

$adminGiris = <<< BLOK
   <div style="width:500px; height:100px; padding:50px; margin:50px auto; background-color:black; color:green; font-weight:20px;">Hoşgeldiniz Admin</div>
   
BLOK;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        if (!empty($_POST)) {

            if ($_POST['kullanici_adi'] == 'admin' && $_POST['kullanici_sifre'] == '123') {
                $_SESSION["user"] = $_POST['kullanici_adi'];
				$_SESSION["authority"] = "admin";
                header("Location:index.php");
            }
			else if ($_POST['kullanici_adi'] == 'editor' && $_POST['kullanici_sifre'] == '123') {
                $_SESSION["user"] = $_POST['kullanici_adi'];
				$_SESSION["authority"] = "editor";
                header("Location:index.php");
            }
			else {
                $Mesaj=$YetkisizGiris;
            }
           
        } else {
            $Mesaj = $htmlForm;
        }

        echo $Mesaj;
       
        ?>
    </body>
</html>