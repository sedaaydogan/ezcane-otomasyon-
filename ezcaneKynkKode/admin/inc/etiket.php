
<?php
		$link=g("link");
		$sayfa = g("s") ? g("s") : 1;
        
		
			 
		?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>ECZANE </title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	
</head>
<body>

     <article class="module width_3_quarter" style="padding-bottom:20px" width="95%">
		<header>
		<div style="font-size:14px;font_weight:bold;padding:6px 10px;float:right;">
		
		</div>
		<h3 class="tabs_involved" style="margin-left:30">FÝRMA KAYIT LiSTESi</h3>
		</header>
            <div class="tab_container">
		       <?php
		          $kayitlar = odbc_exec($conn,"Select * From Firma WHERE firmaAd like '%$link%'");
				 
               ?>		
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>  
				
				    <th></th> 	
    				<th width="20px" >Firma Adi</th> 
    				<th width="20px">Tel</th> 
    				<th>Fax</th>
					<th>Adres</th>
					
				</tr> 
			</thead> 
			<tbody> 
			   <?php
			      while($kayit = odbc_fetch_array($kayitlar)){
			   ?>
				<tr> 
				
   				    <td style="padding-left:5%;"></td> 
					<td><?php  echo $kayit["firmaAd"];?></td> 
					<td><?php  echo $kayit["tel"];?></td>
					<td><?php  echo $kayit["fax"];?></td>
					<td><?php  echo $kayit["adres"];?></td> 
					 
    				<td><a href="<?php echo URL;?>/admin/index.php?do=firma_duzenle&id=<?php echo $kayit["firmaId"];?>" title="Düzenle" alt="">
					<img src="images/icn_edit.png" ></a>
					    <a onclick="return confirm('Firmayý silmek istediðinize emin misiniz ?');" style="margin-left:10px" href="<?php echo URL;?>/admin/index.php?do=firma_sil&id=<?php echo $kayit["firmaId"];?>" title="Sil">
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