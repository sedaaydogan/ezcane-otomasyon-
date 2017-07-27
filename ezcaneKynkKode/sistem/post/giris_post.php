<?php

	if ($_POST){
	
		$kadi = p("kadi",true);
		$sifre = md5(p("sifre",true));
		
		if (!$kadi || !$sifre){
			$hata = "Tüm alanları doldurmanız gerekiyor..";
			require_once TEMA."/hata.php";
		}else {
		
			$query = query("SELECT * FROM uyeler WHERE uye_kadi = '$kadi' && uye_sifre = '$sifre'");
			if (mysql_affected_rows()){
			
				$row = row($query);
				$session = array(
					"login" => true,
					"uye_id" => $row["uye_id"],
					"uye_rutbe" => $row["uye_rutbe"],
					"uye_kadi" => $row["uye_kadi"]
				);
				session_olustur($session);
				
				go(URL);
				
			}else {
				$hata = "Böyle bir üye, sistemde kayıtlı gözükmüyor..";
				require_once TEMA."/hata.php";
			}
		
		}
	
	}

?>