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
</div><center><div><?php
$query=@mysql_query("select * from uyeler");
	while($yaz=@mysql_fetch_array($query))
  {	  $id=$yaz['id'];
	  $kadi=$yaz['kadi'];
	  $sifre=$yaz['sifre'];
	  $mail=$yaz['mail'];
	  $yetki=$yaz['yetki'];
	
	?>
    <form action="" method="post">
    <input name="id" type="text" value="<?php echo $id;?>" readonly>
    <input name="kadi" type="text" value="<?php echo $kadi;?>" >
    <input name="sifre" type="text" value="<?php echo $sifre;?>">
    <input name="mail" type="text" value="<?php echo $mail;?>">
    <input name="yetki" type="text" value="<?php echo $yetki;?>">
    <input  name="update" type="submit" value="Duzenle">
    <input  name="delete" type="submit" value="Sil">
    </form>
	<?php }
	 
	if($_POST[update]){
		$id=$_POST['id'];
		$kadi=$_POST['kadi'];
		$sifre=$_POST['sifre'];
		$mail=$_POST['mail'];
		$yetki=$_POST['yetki'];
		$update=@mysql_query("update uyeler set kadi='$kadi',sifre='$sifre',mail='$mail',yetki='$yetki' where id='$id'");
		header("Location:kullanicilar.php");
		
		
		
	
	
		}if($_POST[delete]){
		$id=$_POST['id'];
		$kadi=$_POST['kadi'];
		$sifre=$_POST['sifre'];
		$mail=$_POST['mail'];
		$yetki=$_POST['yetki'];
		$update=@mysql_query("delete from uyeler where id='$id'");
		header("Location:kullanicilar.php");}
	
	 ?>
</div></center>
</body>
</html>