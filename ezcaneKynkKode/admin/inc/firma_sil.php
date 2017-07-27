<?php

	?>
<div class="spacer"></div>

		<article class="module width_full" style="padding-bottom:20px">
			<header><h3>FİRMA SİL</h3></header>
			  <?php
			
		   $id=g("id");
		   $sql="DELETE FROM Firma WHERE firmaId='$id'";
		   $result=odbc_exec($conn,$sql);
		  
		   if($result){
		      echo '<h4 class="alert_success">Firma kayitlardan silindi.</h4>';
			  go(URL."/admin/index.php?do=hasta&s",2);
		  }else{
          	echo '<h4 class="alert_error">Firma kayitlardan silinemedi..</h4>';
	     }
			?>
		</article>
<div class="spacer"></div>	
<div class="spacer"></div>
<div class="spacer"></div>	
<div class="spacer"></div>