<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Minimal</title>
	<style type="text/css">@import url("<?php echo TEMA_URL; ?>/css/reset.css");</style>
	<script type="text/javascript" src="<?php echo TEMA_URL; ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php echo TEMA_URL; ?>/js/Museo_Sans_500_400.font.js"></script>
	<script type="text/javascript" src="<?php echo TEMA_URL; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo TEMA_URL; ?>/js/site.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>/sistem.js"></script>
</head>
<body>
<!-- Genel -->
<div id="genel">

	<!-- Header -->
	<div id="header">
	
		<!-- Logo -->
		<div class="logo">
			<a href="<?php echo URL;?>/index.php?do">
				<img src="<?php echo TEMA_URL;?>/images/logo.png" alt="logo" />
			</a>
		</div>
		<!--#Logo -->
		
		<!-- Menü -->
		<div id="hMenu">
			<ul>
				<li class="m1 aktif"><a href="<?php echo URL;?>/index.php?do">Anasayfa</a></li>
				<li class="m2"><a href="#">Ben Kimim?</a></li>
				<li class="m3"><a href="#">Galeri</a></li>
				<li class="m4"><a href="#">Dosyalar</a></li>
				<li class="m5"><a href="#">İletişim</a></li>
			</ul>
		</div>
		<!--#Menü -->
	
	</div>
	<!--#Header -->
	
	<!-- Menü -->
	<div id="menu">
		<ul>
			<li class="anasayfa"><a href="<?php echo URL;?>/index.php?do">Anasayfa</a></li>
			<?php tema_kategoriler();?>
		</ul>
	</div>
	<!--#Menü -->
	
	<!-- İçerik -->
	<div class="icerikUst"></div>
	<div id="icerik">
	
		<!-- Sağ -->
		<div id="sag">
			
			<!-- Abone Ol -->
			<div class="sagBaslik">
				<h2>Abone Ol</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok">
				<div class="aboneOl">
					<ul>
						<li class="s1"><a href="#">Delicious</a></li>
						<li class="s2"><a href="#">Mail</a></li>
						<li class="s3"><a href="#">Deviantr</a></li>
						<li class="s4"><a href="#">Facebook</a></li>
						<li class="s5"><a href="#">Feedburner</a></li>
						<li class="s6"><a href="#">Friendfeed</a></li>
						<li class="s7"><a href="#">Likedin</a></li>
						<li class="s8"><a href="#">Rss</a></li>
						<li class="s9"><a href="#">Twitter</a></li>
						<li class="s10"><a href="#">Wordpress</a></li>
					</ul>
					<div class="clear"></div>
					<div class="aboneYazi">
						Web Arayüz Günlügü’ne abone olarak son yazılardan ve güncellemelerden haberdar olabilir, çesitli etkinliklerden yararlanma fırsatını yakalayabilirsiniz.
					</div>
					<div class="aboneInput">
					 <form action="<?php echo URL; ?>" method="get">
					 <input type="hidden" name="do" value="arama"/>
						<span>
							<input type="text" name="kelime" placeholder="Birşeyler yazıp arayın..." />
						</span>
					</form>	
					</div>
				</div>
			</div>
			<!--#Abone Ol -->
			
			<!-- Sponsor Bağlantılar -->
			<div class="sagBaslik scizgi">
				<h2>Sponsor Bağlantılar</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok">
				<div class="sponsor">
					<p>Sponsorluk talebinde bulunmak için <a href="#">buraya</a> tıklayınız.</p>
					<div class="sponsorReklam">
						<span>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/vargonen.png" alt=""/>
							</a>
						</span>
					</div>
					<p class="sponsor-p">Bu websitesi <a href="#">Vargonen</a> sunucularında barınmaktadır</p>
					
					<!-- Banner -->
					<div class="banner">
						<a href="#">
							<img src="<?php echo TEMA_URL;?>/images/banner.png" alt="banner" />
						</a>
					</div>
					<!--#Banner -->
					
				</div>
			</div>
			<!--#Sponsor Bağlantılar -->
			
			<!-- Öne Çıkanlar -->
			<div class="sagBaslik scizgi">
				<h2>Öne Çıkanlar</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok">
				<div class="oneCikanlar">
					<ul>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim.png" alt="" />
								<strong>SVG’nin Önemi</strong>
								<span class="ocYorum">2</span>
								<span class="ocOkunma">345</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim.png" alt="" />
								<strong>Content Delivery Network (CDN)</strong>
								<span class="ocYorum">2</span>
								<span class="ocOkunma">1,117</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim.png" alt="" />
								<strong>WordPress Nitro Teması [HTML5]</strong>
								<span class="ocYorum">2</span>
								<span class="ocOkunma">4,099</span>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- Banner2 -->
				<div class="banner2">
					<a href="#">
						<img src="<?php echo TEMA_URL;?>/images/banner2.png" alt="banner" />
					</a>
				</div>
				<!--#Banner2 -->
				
			</div>
			<!--#Öne Çıkanlar -->
			
			<!-- Her Gün -->
			<div class="sagBaslik scizgi">
				<h2>Her Gün</h2>
			</div>
			<div class="cizgi"></div>
			<div class="sagBlok son">
				<div class="herGun">
					<ul>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo TEMA_URL;?>/images/resim2.png" alt=""/>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!--#Her Gün -->
			
		</div>
		<!--#Sağ -->
	
		<!-- Sol -->
		<div id="sol">
		
			<!-- Neredeyim -->
			<div class="neredeyim">
				<h4>
					<a href="#" class="ansyf">Hüseyin Emanet - Web Arayüz Günlügü</a>\<a href="#">Anasayfa</a>
				</h4>
			</div>
			<!--#Neredeyim -->
			
			<?php tema_icerik(); ?>
		
		</div>
		<!--#Sol -->
	
	<div class="clear"></div>
	</div>
	<div class="icerikAlt"></div>
	<!--#İçerik -->
	
	<!-- Footer -->
	<div id="footer">
	
		<div class="fSag">
			<p>Tasarım: <a href="http://www.huseyinemanet.com">Hüseyin Emanet</a></p>
			<p style="padding-top: 3px">CSS: <a href="http://erbilen.net">Tayfun Erbilen</a></p>
		</div>
	
		<div class="fSol">
			<ul>
				<li><a href="#">Anasayfa</a>|</li>
				<li><a href="#">Ben Kimim?</a>|</li>
				<li><a href="#">Galeri</a>|</li>
				<li><a href="#">Dosyalar</a>|</li>
				<li><a href="#">Arşiv</a>|</li>
				<li><a href="#">İstatistikler</a>|</li>
				<li><a href="#">İletişim</a>|</li>
			</ul>
			<p>Tüm Hakları Saklıdır. &copy; 2012</p>
		</div>
	
	</div>
	<!--#Footer -->

</div>
<!--#Genel -->
</body>
</html>