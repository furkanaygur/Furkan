<?php 
 function kisalt($metin, $uzunluk){
  	// substr ile belirlenen uzunlukta kesiyoruz
        $metin = substr($metin, 0, $uzunluk)."...";
	// kesilen metindeki son kelimeyi buluyoruz
        $metin_son = strrchr($metin, " ");
	// son kelimeyi " ..." ile değiştiriyoruz
        $metin = str_replace($metin_son," ...<span style='color:red'><a href=''>devamını okumak için lütfen giriş yapınız!</a></span>", $metin);
        
        return $metin;
    }
$query=@mysql_query("select * from kitap");
	while($yaz=@mysql_fetch_array($query))
  {	  $id=$yaz['id'];
  	  $kitapadi=$yaz['kitapadi'];
	  $yazar=$yaz['yazar'];
	  $ozet=$yaz['ozet'];
	if($id>1){?>
 <center>
 <div align="left"><h3> <?php echo $kitapadi;?></h3>(<?php echo$yazar;?>)
 </div>
 </center>
  <center>
 <div align="left"><h4>OZET :</h4>
 <?php 
  if($oturum==true){
	   echo $ozet;
   }else{
	    
		echo kisalt($ozet,250);
   }
 
 
 ?>
 </div>
 </center>
    
    <?php }} 
?>