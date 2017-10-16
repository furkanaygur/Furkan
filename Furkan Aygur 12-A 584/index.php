<?php 
include("ayarlar.php");
?>
<html>  
   <head>
   <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
   <title></title>
   <link rel="stylesheet" type="text/css" href="css/styles.css"/>
   </head>
   <body><?php
   if($_POST)
	{
	$kadi=$_POST['kadi'];
	$sifre=$_POST['sifre'];
	if(empty($kadi) || empty($sifre))
	{
		echo "Kullanıcı Adı ve Şifre Boş Bırakılamaz..";
		
		}	else {
			$query=mysql_query("SELECT * FROM `uyeler` WHERE `kadi` = '$kadi' AND `sifre` = '$sifre'") or die(mysql_error());
			$Row = mysql_num_rows($query); // dönen satır bilgisini alıyorum yani kayıt varsa 
			if($Row >0){ //giriş büyükse sıfırdan 
				while($bilgiAl = mysql_fetch_array($query)){//tüm değişkenleri alması için döngüye sokuyorum. ve değerleri tek tek session a yazdırcam.
				$oturum   =md5('kitap');//oturum şifreleme yapıldı. hacklenmeye karşı
				$_SESSION[$oturum] = true; //kitap adına session oluşturdum.  True ise aktif false pasif
				$_SESSION['kadi'] =$bilgiAl['kadi']; //kullanıcı adını session aldım 
				$_SESSION['mail'] =$bilgiAl['mail']; //kullanıcı mail session aldım 
				$_SESSION['yetki'] =$bilgiAl['yetki']; //kullanıcı yetkisini session aldım 
				
				if($_SESSION['yetki'] == "admin"){
					header("Location:panel.php");
				}else{
					//echo 'Normal user';
				}
				}
				
			}else{
				echo 'Kullanıcı adı ve ya şifreniz hatalıdır!';
			}
			
		
   			
   
				}
	}
	if(@$_GET['c']){
		$c =@$_GET['c']=="1";
		if($c){
			session_destroy();
			echo 'Çıkış yaptınız!';
			header("Location:index.php");
		}else{}
	}
	 
		 
		
	 
   ?>
   <div align="right" id="margin"><font color="#000000">
<table width="600" border="0">
<tr><form action="" method="post">
  <td width="380"><font color="#000000">KULLANICI ADI:</font></td><td width="80"><input type="text" name="kadi"></td><td ><font color="#000000">ŞİFRE    :</font></td><td><input type="password" name="sifre"></td></tr>
<tr>
  <td></td>
  <td>
  
 </td>
		<td><input type="submit" value="GİRİŞ YAP" ></td><td> <?php if(@$oturum){
		echo '<a href="index.php?c=1">Çıkış Yap</a>';
		}else{
		}?></td>
		</tr>
		
  <tr>
  <td></td><td></td></tr>
   <tr>
  <td></td><td></td></tr>
  

</table>

</form>

</font></div>
   <div id="container">
   <header>
   <nav>
   <ul>
   <li><a href="index.php?sayfa=anasayfa">Anasayfa</a></li>
   <li><a href="index.php?sayfa=kitapozet">Kitap Özetleri</a></li>
   <li><a href="index.php?sayfa=uye-ol">Üye ol</a></li>
   </ul>
   </nav><img src="images/kitap.jpg" width="300" height="115">
   </header>
   
   <div id="intro" align="left">
   <?php
	isset($_GET['sayfa'])? $sayfa=$_GET['sayfa']:$sayfa="anasayfa";
	switch($sayfa) {
		case "anasayfa":
		include("anasayfa.php");
		break;
		
		case "kitapozet":
		include("kitapozetleri.php");
		break;
		
		case "iletisim":
		include("iletisim.php");
		break;
		
		case "uye-ol":
		include("uyeol.php");
		break;
		
		default:
			include("anasayfa.php");
		break;
	  echo "<br><br><br><br>";}?></div>
   <footer>
   <div class="container">  
   <div id="FooterTwo">Furkan Aygür Kişisel Blog Tüm Hakları Saklıdır.  Copyright  ©  2016 </div>
   </div>
   </footer>
   </body>
</html>
