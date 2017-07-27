<?php

	?>
<div class="spacer"></div>

		<article class="module width_full" style="padding-bottom:20px">
			<header><h3>HASTA SİL</h3></header>
			  <?php
			
		   $id=g("id");
		   $sql="DELETE FROM Hasta WHERE hastaId='$id'";
		   $result=odbc_exec($conn,$sql);
		  
		   if($result){
		      echo '<h4 class="alert_success">Hasta kayitlardan silindi.</h4>';
			  go(URL."/admin/index.php?do=hasta&s",2);
		  }else{
          	echo '<h4 class="alert_error">Hasta kayitlardan silinemedi..</h4>';
	     }
			?>
		</article>
<div class="spacer"></div>	
<div class="spacer"></div>
<div class="spacer"></div>	
<div class="spacer"></div>