<?php 
$query=@mysql_query("select * from kitap");
	while($yaz=@mysql_fetch_array($query))
  {	  $id=$yaz['id'];
  	  $kitapadi=$yaz['kitapadi'];
	  $yazar=$yaz['yazar'];
	  $ozet=$yaz['ozet'];
	if($id==1){?>
 <center>
 <div align="left"><h3> <?php echo $kitapadi;?></h3>(<?php echo$yazar;?>)
 </div>
 </center>
  <center>
 <div align="left"><h4>OZET :</h4>
   <?php echo $ozet;?>
 
 </div>
 </center>
    
    <?php }} 
?>