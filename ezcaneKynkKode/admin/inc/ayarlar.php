<?php
    $query=query("SELECT * FROM ayarlar");
	$row=row($query);
	?>
<div class="spacer"></div>

		<article class="module width_full">
			<header><h3>Genel Ayarlar</h3></header>
			  <?php
			     if($_POST){
					 
					 $site_url=p("site_url",true);
					 $site_baslik=p("site_baslik",true);
					 $site_keyw=p("site_keyw",true);
					 $site_desc=p("site_desc",true);
					 $site_durum=p("site_durum",true);
					if(!$site_url || !$site_baslik){
						
						echo '<h4 class="alert_error">lütfen alanları boş bırakmayınız...</h4>';
					}else{
						$sql="UPDATE ayarlar SET 
						site_url='$site_url',
						site_baslik='$site_baslik',
						site_keyw='$site_keyw',
						site_desc='$site_desc',
						site_durum='$site_durum';";
						
						echo "<p id='gosterme'>{$sql}</p>";
						$update=query($sql);
						if($update){
							
							echo '<h4 class="alert_success">Degiştirmişin bazı şeyleri..degişim iyidir iyi :)</h4>';
							go(URL."/admin/index.php?do=ayarlar",1);
						}else{
							
							echo '<h4 class="alert_error">Mysql Hatası:'.mysql_Error().'</h4>';
						}
					}
				 }
			
			?>
			<form action="" method="post">
				<div class="module_content">
						<fieldset>
							<label>SİTE URL</label>
							<input type="text" name="site_url" value="<?php echo $row["site_url"] ?>"/>
						</fieldset>
						<fieldset>
							<label>SİTE BAŞLIK</label>
							<input type="text" name="site_baslik" value="<?php echo $row["site_baslik"] ?>"/>
						</fieldset>
						
						<fieldset>
							<label>SİTE KEYWORDS</label>
							<textarea rows="3" name="site_keyw"><?php echo $row["site_keyw"]?></textarea>
						</fieldset>
						<fieldset>
							<label>SİTE AÇIKLAMASI</label>
							<textarea rows="3" name="site_desc"><?php echo $row["site_desc"]?></textarea>
						</fieldset>
						<fieldset> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>SİTE DURUMU</label>
							<select name="site_durum" >
								<option value="1" <?php echo $row["site_durum"] ? 'selected':null; ?>>Online</option>
								<option value="0" <?php echo !$row["site_durum"] ? 'selected':null; ?>>Offline</option>
								
							</select>
						</fieldset>
						
				</div>
			<footer>
				<div class="submit_link">
				  <input type="submit" value="Ayarları Güncelle" class="alt_btn">
				</div>
			</footer>
			</form>
		</article>
<div class="spacer"></div>	
<div class="spacer"></div>
<div class="spacer"></div>	
<div class="spacer"></div>