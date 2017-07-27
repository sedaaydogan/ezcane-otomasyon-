
<?php
  
          echo 'hasta duzenleye geldin.';
			 
		?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>ECZANE </title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	
</head>
<body>
<?php

$server = '.';
$database ='eczane';

// No changes needed from now on
$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database"; 
$conn = odbc_connect($connection_string,"","");


if ($conn) {
    echo "Connection established.";
/*$kayitlar = odbc_exec($conn,"Select * From Hasta");
//sql sorgusunu çalıştır ve sonucu kayitlar dizisine ekle
   while($kayit = odbc_fetch_array($kayitlar)){
    //alt alta bütün kayıtları yaz
    echo $kayit["hastaAd"]."</br>";

   }*/
} else{
    die("Connection could not be established.");

	}?>
     <article class="module width_3_quarter" style="padding-bottom:20px" width="95%">
		<header>
		<div style="font-size:14px;font_weight:bold;padding:6px 10px;float:right;">
		
		</div>
		<h3 class="tabs_involved" style="margin-left:30">HASTA KAYIT LISTESI</h3>
		</header>
            <div class="tab_container">
		       <?php
		          $kayitlar = odbc_exec($conn,"Select * From Hasta");
				 
               ?>		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>  
				
				    <th></th> 	
    				<th width="20px" >Tc Kimlik No</th> 
    				<th width="20px">Hasta Adi</th> 
    				<th>Hasta Soyadi</th>
                    <th>Sosyal Guvence</th>	
					<th>Adres</th>
                    <th>Tel</th>	
                   				
				</tr> 
			</thead> 
			<tbody> 
			   <?php
			      while($kayit = odbc_fetch_array($kayitlar)){
			   ?>
				<tr> 
				
   				    <td style="padding-left:5%;"></td> 
					<td><?php  echo $kayit["tcKimlikNo"];?></td> 
    				<td><?php  echo $kayit["hastaAd"];?></td> 
    			    <td><?php  echo $kayit["hastaSoyad"];?></td> 
					<td><?php  echo $kayit["sosyalGuvence"];?></td> 
					<td><?php  echo $kayit["adres"];?></td> 
					<td><?php  echo $kayit["tel"];?></td> 
    				<td><a href="<?php echo URL;?>/admin/index.php?do=hasta_duzenle&id=<?php echo $kayit["hastaId"];?>" title="Düzenle" alt="">
					<img src="images/icn_edit.png" ></a>
					    <a onclick="return confirm('Hastayi silmek istediğinize emin misiniz ?');" style="margin-left:10px" href="<?php echo URL;?>/admin/index.php?do=hasta_sil&id=<?php echo $kayit["hastaId"];?>" title="Sil">
						<img src="images/icn_trash.png" alt=""></a></td>
				</tr> 
				  <?php }?>
				
			</tbody> 
			</table>
			</div>
				  
		</div>
		
		</article>
		
	</br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br>

			
			
	</body>
</html>		