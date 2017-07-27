<?php 
$id=g("id");
$kayitlar = odbc_exec($conn,"Select * From Hasta WHERE hastaId='$id'");
//sql sorgusunu çalıştır ve sonucu kayitlar dizisine ekle
  
   $kayit = odbc_fetch_array($kayitlar);
   
   ?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>ECZANE </title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	
</head>
<body>

      <div class="spacer"></div>

		<article class="module width_full">
			<header><h3 style="margin-left:20">HASTA ISLEMLERI</h3></header>
			<?php
			
		     if($_POST){
			
					 $tcKimlikNo=$_POST["tcKimlikNo"];
					 $hastaAd=$_POST["hastaAd"];
					 $hastaSoyad=$_POST["hastaSoyad"];
					 $sosyalGuvence=$_POST["sosyalGuvence"];
					 $adres=$_POST["adres"];
					 $tel=$_POST["tel"];
			  
			         $stmt=odbc_prepare($conn,"UPDATE Hasta SET 
					 tcKimlikNo='$tcKimlikNo',
					 hastaAd='$hastaAd',
					 hastaSoyad='$hastaSoyad',
					 sosyalGuvence='$sosyalGuvence',
					 adres='$adres',
					 tel='$tel'
					 WHERE hastaId='$id';");
							
			        if(!odbc_execute($stmt)){
						echo '<h4 class="alert_error">Hasta bilgileri guncellenemedi...</h4>';
					  
					}else{
						
						echo '<h4 class="alert_success">Hasta bilgileri basariyla guncellendi.</h4>';
						
					}
			  
			  
			 }	  

	?> 
             <form action="" method="post">
				<div class="module_content">
				        <fieldset>
							<label>HASTA TC KIMLIK NO</label>
							<input type="text" name="tcKimlikNo" value="<?php echo $kayit["tcKimlikNo"];?>"/>
						</fieldset>
						<fieldset>
							<label>HASTA ADI</label>
							<input type="text" name="hastaAd" value="<?php echo $kayit["hastaAd"];?>"/>
						</fieldset>
						<fieldset>
							<label>HASTA SOYADI</label>
							<input type="text" name="hastaSoyad" value="<?php echo $kayit["hastaSoyad"];?>"/>
						</fieldset>
						<fieldset>
							<label>SOSYAL GUVENCE</label>
							<input type="text" name="sosyalGuvence" value="<?php echo $kayit["sosyalGuvence"];?>"/>
						</fieldset>
						<fieldset>
							<label>ADRES</label>
							<input type="text" name="adres" value="<?php echo $kayit["adres"];?>"/>
						</fieldset>
						<fieldset>
							<label>TELEFON</label>
							<input type="text" name="tel" value="<?php echo $kayit["tel"];?>"/>
						</fieldset>
						
				</div>
			<footer>
				<div class="submit_link">
				  <input type="submit" value="hasta guncelle!" class="alt_btn">
				  
				</div>
			</footer>
			</form>
			</article>
	
	<div class="spacer"></div>	
		  
	</body>
</html>		