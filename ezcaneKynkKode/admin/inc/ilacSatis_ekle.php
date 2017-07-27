
<article class="module width_full">
	<header><h3>Ilac Ekle</h3></header>
		<?php
		
			if ($_POST){
				
					$hastaAdi=$_POST["hastaAdi"];
					 $ilacAdi=$_POST["ilacAdi"];
					 $ilacSatisBarKod=$_POST["ilacSatisBarKod"];
					$adet=$_POST["adet"];
					 $burutTutar=$_POST["burutTutar"];
					 $muayeneUcreti=$_POST["muayeneUcreti"];
					 $hastaKatPay=$burutTutar*$adet*(20/100);
					 $netOdencekMiktar=$muayeneUcreti+$hastaKatPay;
			  
			         $stmt=odbc_prepare($conn,"INSERT INTO IlacSatis (hastaId,ilacId,ilacSatisBarKod,adet,burutTutar,muayeneUcreti,hastaKatPay,netOdencekMiktar)
							VALUES ('$hastaAdi','$ilacAdi','$ilacSatisBarKod','$adet','$burutTutar','$muayeneUcreti','$hastaKatPay','$netOdencekMiktar');");
					 
			        if(!odbc_execute($stmt)){
							echo '<h4 class="alert_error">Satis islemi gerceklesmemistir..</h4>';
							echo '<h4 class="alert_error"> Hata:'.odbc_errormsg().'</h4>';
					  
					}else{
						
						 echo '<h4 class="alert_success">Satis islemi gerceklesmistir..</h4>';
						
					}
					
				
			}
		
		?>
		<form action="" method="post">
			<div class="module_content">
					<fieldset>
						<label>HASTA ADI</label>
						<select name="hastaAdi" >
							<?php
							if($_POST){
								$sql="select * from Hasta where hastaId='$hastaAdi'";
								$result=odbc_exec($conn,$sql);
								$res=odbc_fetch_array($result);
								echo '<option>'.$res["hastaAd"].'</option>';
								
							}else{
								$kayitlar = odbc_exec($conn,"SELECT * FROM Hasta ORDER BY hastaAd ASC");
								while ($kayit = odbc_fetch_array($kayitlar)){
									echo '<option value="'.$kayit["hastaId"].'">'.$kayit["hastaAd"].'</option>';
									
								}
							}
							?>
						</select>
					</fieldset>
					<fieldset>
						<label>ILAC ADI</label>
						<select name="ilacAdi" >
							<?php
							if($_POST){
								$sql="select * from Ilac where ilacId='$ilacAdi'";
								$result=odbc_exec($conn,$sql);
								$res=odbc_fetch_array($result);
								echo '<option>'.$res["ilacAd"].'</option>';
								
							}else{
								$kayitlar = odbc_exec($conn,"SELECT * FROM Ilac ORDER BY ilacAd ASC");
								while ($kayit = odbc_fetch_array($kayitlar)){
									echo '<option value="'.$kayit["ilacId"].'">'.$kayit["ilacAd"].'</option>';
								}
							}
							?>
						</select>
					</fieldset>
					<fieldset>
						<label>ilac Bar Kod</label>
						<input type="text" name="ilacSatisBarKod" value="<?php if($_POST) echo $ilacSatisBarKod; ?>"/>
					</fieldset>
					<fieldset>
						<label>ADET</label>
						<input type="text" name="adet" value="<?php if($_POST) echo $adet; ?>"/>
					</fieldset>
					<fieldset>
						<label>BURUT TUTAR</label>
						<input type="text" name="burutTutar" value="<?php if($_POST) echo $burutTutar; ?>"/>
					</fieldset>
					<fieldset>
						<label>Muayene Ucreti</label>
						<input type="text" name="muayeneUcreti" value="<?php if($_POST) echo $muayeneUcreti; ?>"/>
					</fieldset>
					<fieldset>
						<label>Hasta Katilim Payi</label>
						<input type="text" name="hastaKatPay" value="<?php if($_POST) echo $hastaKatPay; ?>"/>
					</fieldset>
					<fieldset>
						<label>Net Odencek Miktar</label>
						<input type="text" name="netOdencekMiktar" value="<?php if($_POST) echo $netOdencekMiktar; ?>"/>
					</fieldset>
					
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Ilac Satis Ekle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>