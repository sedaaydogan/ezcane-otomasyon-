<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="<?php echo URL;?>/admin/index.php?do=">KAFKAESK</a></h1>
			<h2 class="section_title">Yönetirken Paneli</h2>
			<div class="btn_view_site"><a target="_blank" href="<?php echo URL;?>">Siteye Git</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
		
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>İçerikler</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=icerik_ekle">Yeni yazı ekleyecekk</a></li>
			<li class="icn_edit_article"><a href="index.php?do=icerikler&s">Yazi Düzenle</a></li>
			
		</ul>
		
		<h3>İlave Alanlar</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=ilave_alanlar">İlave Alanlar</a></li>
			<li class="icn_edit_article"><a href="index.php?do=ilave_alan_ekle&s">İlave Alan Ekle</a></li>
		</ul>
		
		<h3>Yorumlar</h3>
		<ul class="toggle">
			
			<li class="icn_edit_article"><a href="index.php?do=yorumlar&s">Yorumları Düzenle</a></li>
			<li class="icn_edit_article"><a href="index.php?do=onay_bekleyen_yorumlar&s">Onay Bekleyen Yorumlar</a></li>
		</ul>
		
		<h3>Üyeler</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="index.php?do=hasta_ekle">hasta ekle</a></li>
			<li class="icn_view_users"><a href="index.php?do=hastalar&s">hastalari göster</a></li>
			
			
		</ul>
		<h3>Kategori</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="index.php?do=kategori_ekle">Yeni Kategori Ekle</a></li>
			<li class="icn_photo"><a href="index.php?do=kategoriler">Kategori Düzenle</a></li>
			
		</ul>
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="index.php?do=ayarlar">Genel Ayarlar</a></li>
			<li class="icn_jump_back"><a href="index.php?do=cikis_yap">Çıkış Yap</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2015-“Lamba cininin “Dile benden ne dilersen” cümlesine, “Canının sağlığı” cevabını verebilecek mahcup adamların hatrı için dönüyor dünya.”</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->

	<section id="main" class="column">
		
		<?php
  
            $do=g("do");	
             			
             if(file_exists("inc/{$do}.php")){
				 require("inc/{$do}.php");
				
			 } else{
				 require("inc/anasayfa.php");
			 }
			 
		?>
			<div class="spacer"></div>
	
	</section>

