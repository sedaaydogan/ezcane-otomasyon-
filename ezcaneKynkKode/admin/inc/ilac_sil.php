

<?php

	?>
<div class="spacer"></div>

		<article class="module width_full" style="padding-bottom:20px">
			<header><h3>ILAC SIL</h3></header>
			  <?php
			
		   $id=g("id");
		   $sql="DELETE FROM Ilac WHERE ilacId='$id'";
		   $result=odbc_exec($conn,$sql);
		  
		   if($result){
		      echo '<h4 class="alert_success">Ilac kayitlardan silindi.</h4>';
			 }else{
          	echo '<h4 class="alert_error">Ilac kayitlardan silinemedi..</h4>';
	     }
			?>
		</article>
<div class="spacer"></div>	
<div class="spacer"></div>
<div class="spacer"></div>	
<div class="spacer"></div>