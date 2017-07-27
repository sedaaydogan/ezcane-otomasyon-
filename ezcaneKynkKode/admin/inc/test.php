<?php

$do = $_GET["do"];
	 $kelime=$do;
			
// load library
require 'php-excel.class.php';

$server = '.';
$database ='eczane';

// No changes needed from now on
$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database"; 
$conn = odbc_connect($connection_string,"","");


if ($conn) {
    //echo "Connection established.";

} else{
    die("Connection could not be established.");

	}
	
header( "Content-Type: application/vnd.ms-excel" );
header( "Content-disposition: attachment; filename=ilacRapor.xls" );

	
echo "Ilac Adi\t Firma Adi\tIlac Barkod\tAdet\tSon Kullanma Tarih\tAlis Fiyat\tSatis Fiyati\n";
 $sql="select * from Ilac INNER JOIN Firma on Ilac.firmaId=Firma.firmaId where ilacAd like '%$kelime%'";
$kayitlar=odbc_exec($conn,$sql);
//sql sorgusunu çalýþtýr ve sonucu kayitlar dizisine ekle
   while($kayit = odbc_fetch_array($kayitlar)){
    //alt alta bütün kayýtlarý yaz
    echo $kayit["ilacAd"]."\t".$kayit["firmaAd"]."\t".$kayit["ilacBarkod"]."\t".$kayit["Adet"]."\t".$kayit["sonKullanTarih"]."\t".$kayit["alisFiyat"]."\t".$kayit["satisFiyat"]."\n";

   }
		
?>