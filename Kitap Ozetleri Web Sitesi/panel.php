<?php 
include("ayarlar.php");
?>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel='stylesheet' type='text/css' href='css/menu.css' />
</head>
<body bgcolor="#FB7174"><h2 align="center">ADMİN PANELİ</h2>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='panel.php'>İçerik Ekle</a></li>
   <li><a href='kullanicilar.php'>Kullanıcılar</a></li>
   <li class='last'><a href='cikis.php'>Çıkış Yap</a></li>
</ul>
</div>
<center>
<?php
if($_POST)
{
$kitapadi=$_POST['kitapadi'];
$yazar=$_POST['yazar'];
$ozet=mysql_real_escape_string($_POST['ozet']);
$ekleyen =$_SESSION['kadi'];
if(empty($kitapadi) || empty($yazar)|| empty($ozet))
{echo "Boş Geçilmez";}
else{
	$mysql=@mysql_query("insert into kitap SET
										kitapadi ='$kitapadi',
										yazar ='$yazar',
										ozet ='$ozet',
										ekleyen='$ekleyen'
									");
	if($mysql){echo "İçerik Eklendi..";}else{echo "İçerik Eklenmedi".mysql_error();}
	}
}
?>
<form action="" method="post">
<table cellpadding="5" cellspacing="5" align="center">
<tr><td>Kitap Adı :</td><td><input type="text" name="kitapadi" /></td></tr>
<tr><td>Yazar :</td><td><input type="text" name="yazar" /></td></tr>
<tr><td>Özet :</td><td><textarea name="ozet" rows="5" cols="17"></textarea></td></tr>
<tr><td><input type="submit" value="Gönder" /></td><td><input type="reset" value="Temizle" /></td></tr>
</table>
</form>
</div></center>
</body>
</html>