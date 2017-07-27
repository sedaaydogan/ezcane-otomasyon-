<?php 
$id=g("id");
$kayitlar = odbc_exec($conn,"Select * From Firma WHERE firmaId='$id'");
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
			<header><h3 style="margin-left:20">FİRMA İŞLEMLERİ</h3></header>
			<?php
			
		     if($_POST){
			
					 $firmaAd=$_POST["firmaAd"];
					 $tel=$_POST["tel"];
					 $fax=$_POST["fax"];
					 $adres=$_POST["adres"];
			  
			         $stmt=odbc_prepare($conn,"UPDATE Firma SET 
					 firmaAd='$firmaAd',
					 tel='$tel',
					 fax='$fax',
					 adres='$adres'
					 
					 WHERE firmaId='$id';");
							
			        if(!odbc_execute($stmt)){
						echo '<h4 class="alert_error">Firma bilgileri guncellenemedi...</h4>';
					  
					}else{
						
						echo '<h4 class="alert_success">Firma bilgileri basariyla guncellendi.</h4>';
						
					}
			  
			  
			 }	  

	?> 
             <form action="" method="post">
				<div class="module_content">
				     
						<fieldset>
							<label>FİRMA ADI</label>
							<input type="text" name="firmaAd" value="<?php echo $kayit["firmaAd"];?>"/>
						</fieldset>
					    <fieldset>
							<label>TELEFON</label>
							<input type="text" name="tel" value="<?php echo $kayit["tel"];?>"/>
						</fieldset>
						<fieldset>
							<label>FAX</label>
							<input type="text" name="fax" value="<?php echo $kayit["fax"];?>"/>
						</fieldset>
						<fieldset>
							<label>ADRES</label>
							<input type="text" name="adres" value="<?php echo $kayit["adres"];?>"/>
						</fieldset>
						
						
				</div>
			<footer>
				<div class="submit_link">
				  <input type="submit" value="firma guncelle!" class="alt_btn">
				  
				</div>
			</footer>
			</form>
			</article>
	
	<div class="spacer"></div>	
		  
	</body>
</html>		