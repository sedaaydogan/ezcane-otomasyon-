<?php

	if ($_POST){
	
		$kadi = p("kadi",true);
		$link = sef_link($kadi);
		$sifre = p("sifre",true);
		$eposta = p("eposta",true);
		$cinsiyet = p("cinsiyet",true);
		$hakkinda = p("hakkinda",true);
		
		if (!$kadi || !$sifre || !$eposta || !$cinsiyet || !$hakkinda){
			$hata = "Tüm alanları doldurmanız gerekiyor..";
			require_once TEMA."/hata.php";
		}else {
		
			$sifre = md5($sifre);
		
			$query = query("SELECT uye_id FROM uyeler WHERE uye_link = '$link'");
			if (mysql_affected_rows()){
				$hata = "Böyle bir üye, sistemde kayıtlı gözüküyor.. Başka bir tane deneyin..";
				require_once TEMA."/hata.php";
			}else {
			
				$insert = query("INSERT INTO uyeler SET
				uye_kadi = '$kadi',
				uye_sifre = '$sifre',
				uye_link = '$link',
				uye_hakkinda = '$hakkinda',
				uye_cinsiyet = '$cinsiyet',
				uye_eposta = '$eposta',
				uye_rutbe = 2,
				uye_onay = 1");
				
				if ($insert){
					
					$uid = mysql_insert_id();
					$session = array(
						"login" => true,
						"uye_id" => $uid,
						"uye_rutbe" => 2,
						"uye_kadi" => $kadi
					);
					session_olustur($session);
					
					$class = "ok";
					$hata = "Başarıyla kayıt oldunuz, yönlendiriliyorsunuz..";
					require_once TEMA."/hata.php";
					
					go(URL,1);
				
				}
				
			}
		
		}
	
	}

?>