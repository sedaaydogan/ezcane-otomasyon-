<?php
   
     session_start();
	
     ##baglanti degiskenleri##
	 $host="localhost";
     $user="root";
     $pass="123";
     $db="blog";
	 

      ##mysql baglanti##
    $baglan=@mysql_connect($host,$user,$pass)or die(mysql_error());
 
	 ##veritabani secimi##
	 mysql_select_db($db,$baglan)or die(mysql_error());
  
   
	  ##turkce karakter sorunu##
      mysql_query("SET CHARACTER SET 'utf8'");
	   mysql_query("SET NAMES 'utf8'");
	
	##genel ayarlar##
    $query=@mysql_query("select * from ayarlar");	
	$ayar=@mysql_fetch_array($query);
	
	##sabitler##
	define("PATH",realpath("."));
	define("URL",$ayar["site_url"]);
	define("TEMA_URL",$ayar["site_url"]."/tema/".$ayar["site_tema"]);
	define("TEMA",PATH."/tema/".$ayar["site_tema"]); 

	
?>