
<?php 

   	$do = $_GET["do"];
	  Switch ($do){
		case "arama":
		if($kelime=$_GET["kelime"]){
		  
		  ?>
	
<article  class="module width_3_quarter" style="padding-bottom: 20px; width: 95%">
<header>
<div style="float: right; font-size: 14px; font-weight: bold; padding: 6px 10px">
	
</div>

<h3 class="tabs_involved">
ILACLAR LISTESI
</h3></header>
<div class="tab_container">
	
	<?php
	 $sql="select * from Ilac INNER JOIN Firma on Ilac.firmaId=Firma.firmaId where ilacAd like '%$kelime%'";
	$kayitlar=odbc_exec($conn,$sql);
		   
	//$query = query("SELECT * FROM konular INNER JOIN uyeler ON uyeler.uye_id = konular.konu_ekleyen INNER JOIN kategoriler ON kategoriler.kategori_id = konular.konu_kategori WHERE konu_onay = 1 ORDER BY konu_id DESC LIMIT $baslangic, $limit");
	if ($kayitlar){
	
	?>
	
	<div id="tab1" class="tab_content">
	<table class="tablesorter" cellspacing="0"> 
	<thead> 
		<tr> 
			<th width="10px"></th> 
			<th width="10%">Ilac Adi</th> 
			<th width="10%">Firma Adi</th> 
			<th width="10%">Ilac Barkod</th> 
			<th>Adet</th> 
			<th>Son Kullanma Tarih</th>
			<th>Alis Fiyati</th> 
			<th>Satis Fiyati</th>
			<td><a href="<?php echo URL; ?>/admin/inc/test.php?do=<?php echo $kelime; ?>">RAPORLA</a></td> 
			
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
				<a onclick="return confirm('Ýçeriði Silmek Ýstediðinize Emin misiniz?');" style="margin-left: 10px" href="<?php echo URL; ?>/admin/index.php?do=ilac_sil&id=<?php echo $kayit["ilacId"]; ?>" title="Sil"><img src="images/icn_trash.png" alt=""/></a>
			</td> 
			<td></td>
		</tr>
		<?php } 
		
		
		?>
	</tbody> 
	</table>

	
	</div>
	
	<?php } ?>
	
</div>
</article>
		<?php }else{
			go(URL."admin/index.php?do");
		}
		break;
		
		default:
		go(URL."admin/index.php?do");
			
		break;
	  } 

?>
