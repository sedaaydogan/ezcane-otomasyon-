
<article class="module width_full">
	<header><h3>İlaç Ekle</h3></header>
		<?php
		
			if ($_POST){
				
					$ilacAd=$_POST["ilacAd"];
					 $firmaAdi=$_POST["firmaAdi"];
					 $ilacBarkod=$_POST["ilacBarkod"];
					 $Adet=$_POST["Adet"];
					 $sonKullanTarih=$_POST["sonKullanTarih"];
					 $alisFiyat=$_POST["alisFiyat"];
					 $satisFiyat=$_POST["satisFiyat"];
			  
			         $stmt=odbc_prepare($conn,"INSERT INTO Ilac (ilacAd,firmaId,ilacBarkod,Adet,sonKullanTarih,alisFiyat,satisFiyat)
							VALUES ('$ilacAd','$firmaAdi','$ilacBarkod','$Adet','$sonKullanTarih','$alisFiyat','$satisFiyat');");
							
			        if(!odbc_execute($stmt)){
							echo '<h4 class="alert_error">Kayit basarisiz..</h4>';
							echo '<h4 class="alert_error"> Hata:'.odbc_errormsg().'</h4>';
					  
					}else{
						
						 echo '<h4 class="alert_success">İlaç kayitlara eklendi..</h4>';
						
					}
					
				
			}
		
		?>
		<form action="" method="post">
			<div class="module_content">
					<fieldset>
						<label>İLAÇ ADI</label>
						<input type="text" name="ilacAd" />
					</fieldset>
					<fieldset>
						<label>FİRMA ADI</label>
						<select name="firmaAdi">
							<?php
								$kayitlar = odbc_exec($conn,"SELECT * FROM Firma ORDER BY firmaAd ASC");
								while ($kayit = odbc_fetch_array($kayitlar)){
									echo '<option value="'.$kayit["firmaId"].'">'.$kayit["firmaAd"].'</option>';
								}
							?>
						</select>
					</fieldset>
					<fieldset>
						<label>İlaç Barkod</label>
						<input type="text" name="ilacBarkod" />
					</fieldset>
					<fieldset>
						<label>ADET</label>
						<input type="text" name="Adet" />
					</fieldset>
					<fieldset>
						<label>Son Kullanma Tarihi</label>
						<input type="text" name="sonKullanTarih" />
					</fieldset>
					<fieldset>
						<label>Alış Fiyatı</label>
						<input type="text" name="alisFiyat" />
					</fieldset>
					<fieldset>
						<label>Satış Fiyatı</label>
						<input type="text" name="satisFiyat" />
					</fieldset>
					
			</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="İlaç Ekle" class="alt_btn">
				</div>
			</footer>
		</form>
</article>

<div class="spacer"></div>