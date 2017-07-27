<?php
	//error_reporting(0);
	require_once "../sistem/ayar.php";
	require_once "../sistem/fonksiyon.php";

error_reporting("0");
$server = '.';
$database ='eczane';

// No changes needed from now on
$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database"; 
$conn = odbc_connect($connection_string,"","");


if ($conn) {
    echo "Connection established.";
/*$kayitlar = odbc_exec($conn,"Select * From Hasta");
//sql sorgusunu çalıştır ve sonucu kayitlar dizisine ekle
   while($kayit = odbc_fetch_array($kayitlar)){
    //alt alta bütün kayıtları yaz
    echo $kayit["hastaAd"]."</br>";

   }*/
} else{
    die("Connection could not be established.");

	}
	?>

	
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Eczane</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	 
	);
	
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
   
	
	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
  <script type="text/javascript">
    $(function()
	{
        $("p#gosterme").hide();
    
	}
	);
  </script>
</head>
<body>

	<header id="header">
		<hgroup>
			
			<h2 class="section_title"></h2>
			<div class="btn_view_site"></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
		
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html"></a> <div class="breadcrumb_divider"></div> <a class="current"></a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
	<form class="quick_search">
			<form action="<?php echo URL; ?>" method="get">
					 <input type="hidden" name="do" value="arama"/>
						<span>
							<input type="text" name="kelime" placeholder="Birşeyler yazıp arayın..." />
						</span>
					</form>
	</form>				
		<hr/>
		<h3>Firmalar</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=firma_ekle">Firma Ekle</a></li>
			<li class="icn_edit_article"><a href="index.php?do=firmalar&s">Firmalari Göster</a></li>
			
		</ul>
		
		<h3>İlaçlar</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=ilac_ekle">İlaç Ekle</a></li>
			<li class="icn_edit_article"><a href="index.php?do=ilaclar&s">İlaçları Göster</a></li>
		</ul>
		
		<h3>İlaç Satış</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="index.php?do=ilacSatis_ekle">İlaç Satış Kaydı Gir</a></li>
			<li class="icn_edit_article"><a href="index.php?do=ilacSatislar&s">İlaç Satışlarını Göster</a></li>
		</ul>
		
		<h3>Hastalar</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="index.php?do=hasta_ekle">hasta ekle</a></li>
			<li class="icn_view_users"><a href="index.php?do=hastalar&s">hastalari göster</a></li>
			
			
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
				 require("inc/ilaclar.php");
			 }
			 
		?>
			<div class="spacer"></div>
	
	</section>



</body>
</html>