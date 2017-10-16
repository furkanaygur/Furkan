<?php include("ayarlar.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Belge</title>
</head>
<body>
<?php 
if($_POST)
{
$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];
$mail=$_POST["mail"];
if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
$uyeler=@mysql_query("insert into uyeler(kadi,sifre,mail,yetki) values('$kadi','$sifre','$mail','uye')");
	if($uyeler)
	{
	header("Location:index.php");
	}else{echo "Uyelik Geçersiz";}}
}
?>
<form action="" method="post">
<table width="100%">
  <tr>
    <td width="11%">Kullanıcı Adı:</td>
    <td width="89%"><label>
      <input type="text" name="kadi" id="user" />
      </label></td>
  </tr>
  <tr>
    <td>Sifre:</td>
    <td><label>
      <input type="text" name="sifre" id="sifre" />
    </label></td>
    </tr>

  <tr>
    <td>E-Mail</td>
    <td><label>
      <input type="text" name="mail" id="eposta" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" value="Üye Ol" name="git" id="git" />
    </label></td>
  </tr>
  </table>
</form>
</body>
</html>