
<?php

	$id=g("id");
	$kayitlar = odbc_exec($conn,"Select * From Ilac WHERE ilacId='$id'");
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
	<header><h3>Ilac Duzenle</h3></header>
		<?php
		
			if ($_POST){
				
					$ilacAd=$_POST["ilacAd"];
					 $firmaAdi=$_POST["firmaAdi"];
					 $ilacBarkod=$_POST["ilacBarkod"];
					 $Adet=$_POST["Adet"];
					 $sonKullanTarih=$_POST["sonKullanTarih"];
					 $alisFiyat=$_POST["alisFiyat"];
					 $satisFiyat=$_POST["satisFiyat"];
					 
					$stmt=odbc_prepare($conn,"UPDATE Ilac SET 
					 ilacAd='$ilacAd',
					 firmaId='$firmaAdi',
					 ilacBarkod='$ilacBarkod',
					 Adet='$Adet',
					 sonKullanTarih='$sonKullanTarih',
					 alisFiyat='$alisFiyat',
					 satisFiyat='$satisFiyat'
					 WHERE ilacId='$id';");
							
			        if(!odbc_execute($stmt)){
						echo '<h4 class="alert_error">Ilac bilgileri guncellenemedi...</h4>';
						 echo '<h4 class="alert_error"> Hata:'.odbc_errormsg().'</h4>';
					  
					}else{
						
						echo '<h4 class="alert_success">Ilac bilgileri basariyla guncellendi.</h4>';
						
					}
				
				
			}
		
		?>
		<form action="" method="post">
			<div class="module_content">
					<fieldset>
						<label>ILAC ADI</label>
						<input type="text" name="ilacAd" value="<?php echo $kayit["ilacAd"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>FIRMA ADI</label>
						<select name="firmaAdi">
							<?php
								$kayitlarF = odbc_exec($conn,"SELECT * FROM Firma ORDER BY firmaAd ASC");
								while ($kayitF = odbc_fetch_array($kayitlarF)){
									echo '<option ';
									echo $kayitF["firmaId"] == $kayit["firmaId"] ? 'selected ' : null;
									echo 'value="'.$kayitF["firmaId"].'">'.$kayitF["firmaAd"].'</option>';
								}
							?>
						</select>
					</fieldset>
					<fieldset>
						<label>Ilac Barkod</label>
						<input type="text" name="ilacBarkod" value="<?php echo $kayit["ilacBarkod"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>ADET</label>
						<input type="text" name="Adet" value="<?php echo $kayit["Adet"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>Son Kullanma Tarihi</label>
						<input type="text" name="sonKullanTarih" value="<?php echo $kayit["sonKullanTarih"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>Alis Fiyati</label>
						<input type="text" name="alisFiyat" value="<?php echo $kayit["alisFiyat"]; ?>"/>
					</fieldset>
					<fieldset>
						<label>Satis Fiyati</label>
						<input type="text" name="satisFiyat" value="<?php echo $kayit["satisFiyat"]; ?>"/>
					</fieldset>
					
					
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Duzenlemeyi Bitir" class="alt_btn">
				</div>
			</footer>
			</form>
</article>

		<div class="spacer"></div>
	</body>
</html>	