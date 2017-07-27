
<article  class="module width_3_quarter" style="padding-bottom: 20px; width: 95%">
<header>
<div style="float: right; font-size: 14px; font-weight: bold; padding: 6px 10px">
	
</div>
<h3 class="tabs_involved">
ILACLAR LISTESI
</h3></header>
<div class="tab_container">
	
	<?php
	 $sql="select * from IlacSatis INNER JOIN Hasta ON IlacSatis.hastaId=Hasta.hastaId INNER JOIN Ilac ON IlacSatis.ilacId=Ilac.ilacId   ";
	$kayitlar=odbc_exec($conn,$sql);
		   
	
	if ($kayitlar){
	?>
	
	<div id="tab1" class="tab_content">
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th width="10px"></th> 
			<th>Hasta Adi</th> 
			<th>Ilac Adi</th> 
			<th>Ilac Bar Kod</th> 
			<th>Adet</th> 
			<th>BurutTutar</th> 
			<th>Muayene Ucreti</th>
			<th>Hasta Katilim Payi</th> 
			<th>Net Ödencek Miktar</th>
		</tr> 
	</thead> 
	<tbody>
		<?php
			while ($kayit = odbc_fetch_array($kayitlar)){
		?>
		<tr> 
			<td width="10px"></td> 
			<td><a href="<?php echo URL; ?>/admin/index.php?do=hasta_duzenle&id=<?php echo $kayit["hastaId"]; ?>"><?php echo $kayit["hastaAd"]; ?></a></td> 
			<td><a href="<?php echo URL; ?>/admin/index.php?do=ilac_duzenle&id=<?php echo $kayit["ilacId"]; ?>"><?php echo $kayit["ilacAd"]; ?></a></td> 
			<td><?php echo $kayit["ilacSatisBarKod"]; ?></td>
			<td><?php echo $kayit["adet"]; ?></td> 
       			
			<td><?php echo $kayit["burutTutar"]; ?></td> 
			<td><?php echo $kayit["muayeneUcreti"]; ?></td> 
			<td><?php echo $kayit["hastaKatPay"]; ?></td> 
			<td><?php echo $kayit["netOdencekMiktar"]; ?></td> 
			<td>
				<a href="<?php echo URL; ?>/admin/index.php?do=ilacSatis_duzenle&id=<?php echo $kayit["ilacId"]; ?>" title="Düzenle"><img src="images/icn_edit.png" alt=""/></a>
				<a onclick="return confirm('Ýçeriði Silmek Ýstediðinize Emin misiniz?');" style="margin-left: 10px" href="<?php echo URL; ?>/admin/index.php?do=ilacSatis_sil&id=<?php echo $kayit["ilacId"]; ?>" title="Sil"><img src="images/icn_trash.png" alt=""/></a>
			</td> 
		</tr>
		<?php } ?>
	</tbody> 
	</table>

	
	</div>
	
	<?php } ?>
	
</div>
</article>