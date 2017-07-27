<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>ECZANE </title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	
</head>
<body>

      <div class="spacer"></div>

		<article class="module width_full">
			<header><h3 style="margin-left:20">FİRMA ISLEMLERI</h3></header>
			<?php
			
		     if($_POST){
			
					 $firmaAd=$_POST["firmaAd"];
					 $tel=$_POST["tel"];
					 $fax=$_POST["fax"];
					 $adres=$_POST["adres"];
			  
			         $stmt=odbc_prepare($conn,"INSERT INTO Firma (firmaAd,tel,fax,adres)
							VALUES ('$firmaAd','$tel','$fax','$adres');");
							
			        if(!odbc_execute($stmt)){
							echo '<h4 class="alert_error">Kayit basarisiz..</h4>';
					  
					}else{
						
						 echo '<h4 class="alert_success">Firma kayitlara eklendi..</h4>';
						
					}
			  
			  
			 }	  

	?> 
             <form action="" method="post">
				<div class="module_content">
				        
						<fieldset>
							<label>FİRMA ADI</label>
							<input type="text" name="firmaAd"/>
						</fieldset>
						<fieldset>
							<label>TELEFON</label>
							<input type="text" name="tel"/>
						</fieldset>
						<fieldset>
							<label>FAX</label>
							<input type="text" name="fax"/>
						</fieldset>
						<fieldset>
							<label>ADRES</label>
							<input type="text" name="adres"/>
						</fieldset>
						
						
				</div>
			<footer>
				<div class="submit_link">
				  <input type="submit" value="Firma kaydet!" class="alt_btn">
				  
				</div>
			</footer>
			</form>
			</article>
		  
	</body>
</html>		