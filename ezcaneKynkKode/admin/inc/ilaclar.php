
<article  class="module width_3_quarter" style="padding-bottom: 20px; width: 95%">
<header>
<div style="float: right; font-size: 14px; font-weight: bold; padding: 6px 10px">
	
</div>
<h3 class="tabs_involved">
İLAÇLAR LİSTESİ
</h3></header>
<div class="tab_container">
	
	<?php
	 $sql="select * from Ilac INNER JOIN Firma on Ilac.firmaId=Firma.firmaId ";
	$kayitlar=odbc_exec($conn,$sql);
		   
	
	if ($kayitlar){
	?>
	
	<div id="tab1" class="tab_content">
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th width="10px"></th> 
			<th width="10%">İlaç Adı</th> 
			<th width="10%">Firma Adı</th> 
			<th width="10%">İlaç Barkod</th> 
			<th>Adet</th> 
			<th>Son Kullanma Tarih</th>
			<th>Aliş Fiyatı</th> 
			<th>Satiş Fiyatı</th>
		</tr> 
	</thead> 
	<tbody>
		<?php
			while ($kayit = odbc_fetch_array($kayitlar)){
		?>
		<tr> 
			<td width="10px"></td> 
			<td><?php echo $kayit["ilacAd"]; ?></td> 
			<td><a href="<?php echo URL; ?>/admin/index.php?do=firma_duzenle&id=<?php echo $kayit["firmaId"]; ?>"><?php echo $kayit["firmaAd"]; ?></a></td> 
			<td><?php echo $kayit["ilacBarkod"]; ?></td>
			<td><?php echo $kayit["Adet"]; ?></td> 
            <td><?php echo $kayit["sonKullanTarih"]; ?></td> 			
			<td><?php echo $kayit["alisFiyat"]; ?></td> 
			<td><?php echo $kayit["satisFiyat"]; ?></td> 
			<td>
				<a href="<?php echo URL; ?>/admin/index.php?do=ilac_duzenle&id=<?php echo $kayit["ilacId"]; ?>" title="Düzenle"><img src="images/icn_edit.png" alt=""/></a>
				<a onclick="return confirm('İçeriği Silmek İstediğinize Emin misiniz?');" style="margin-left: 10px" href="<?php echo URL; ?>/admin/index.php?do=ilac_sil&id=<?php echo $kayit["ilacId"]; ?>" title="Sil"><img src="images/icn_trash.png" alt=""/></a>
			</td> 
		</tr>
		<?php } ?>
	</tbody> 
	</table>

	
	</div>
	
	<?php } ?>
	
</div>
</article>