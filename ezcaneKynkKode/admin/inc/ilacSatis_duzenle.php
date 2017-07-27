
<?php

	$id=g("id");
	$kayitlar = odbc_exec($conn,"Select * From IlacSatis WHERE satisId='$id'");
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
	<header><h3>Ilac Satislarini Duzenle</h3></header>
		<?php
		
			if ($_POST){
				
					 $adet=$_POST["adet"];
					 $burutTutar=$_POST["burutTutar"];
					 $muayeneUcreti=$_POST["muayeneUcreti"];
					  $hastaKatPay=$burutTutar*$adet*(20/100);
					 $netOdencekMiktar=$muayeneUcreti+$hastaKatPay;
					 
					 
					$stmt=odbc_prepare($conn,"UPDATE IlacSatis SET 
					 adet='$adet',
					 burutTutar='$burutTutar',
					muayeneUcreti='$muayeneUcreti',
					hastaKatPay='$hastaKatPay',
					netOdencekMiktar='$netOdencekMiktar'
					 WHERE satisId='$id';");
					
					 	
			        if(!odbc_execute($stmt)){
						echo '<h4 class="alert_error">Ýlac satis bilgileri guncellenemedi...</h4>';
					   echo '<h4 class="alert_error"> Hata:'.odbc_errormsg().'</h4>';
					}else{
						
						echo '<h4 class="alert_success">Ýlac satis bilgileri basariyla guncellendi.</h4>';
						
					}
				
				
			}
		
		
		?>
		<form action="" method="post">
			<div class="module_content">
					
					<fieldset>
						<label>ADET</label>
						<input type="text" name="adet" value="<?php echo $kayit["adet"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>Burut Tutar</label>
						<input type="text" name="burutTutar" value="<?php echo $kayit["burutTutar"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>Muayene Ucreti</label>
						<input type="text" name="muayeneUcreti" value="<?php echo $kayit["muayeneUcreti"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>Hasta Katilim Payi</label>
						<input type="text" name="hastaKatPay" value="<?php if($_POST) echo $hastaKatPay; ?>"/>
					</fieldset>
					<fieldset>
						<label>Net Ödencek Miktar</label>
						<input type="text" name="netOdencekMiktar" value="<?php if($_POST) echo $netOdencekMiktar; ?>"/>
					</fieldset>
					
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Düzenlemeyi Bitir" class="alt_btn">
				</div>
			</footer>
			</form>
			</article>
	<div class="spacer"></div>
		
	</body>
</html>	