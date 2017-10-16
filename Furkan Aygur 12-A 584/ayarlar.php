<?php 
ob_start();//sayfalar arası yönlendirme yapar 
session_start(); //oturum başlatır.
error_reporting(0);
   $host="localhost";
	$kadi="root";
	$sifre="";
	$veritabani="kitap";

	$baglan=@mysql_connect($host,$kadi,$sifre) or die("MySQL\'e bağlanılamadı");
	
	$vt_sec=mysql_select_db($veritabani,$baglan) or die("Veritabanı seçilemedi");
    mysql_set_charset('utf8');
  
  
  
 
?>