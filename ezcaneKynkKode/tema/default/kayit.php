<div id="giris">
	<h2>Kayıt Ol</h2>
	<?php require_once PATH."/sistem/post/kayit_post.php"; 

	?>
	<form action="" method="post">
		<ul>
			<li>Kullanıcı Adı:</li>
			<li><input type="text" name="kadi" /></li>
			<li>Şifre:</li>
			<li><input type="password" name="sifre" /></li>
			<li>E-Posta:</li>
			<li><input type="text" name="eposta" /></li>
			<li>Cinsiyet:</li>
			<li><select name="cinsiyet">
			      <option value="1">Erkek</option>
				  <option value="2">Kadın</option>
			    </select></li>
			<li>Hakkında</li>
			<li><textarea name="hakkinda" rows="7" cols="30"></textarea></li>
			<li><button type="submit">Kayit Ol</button></li>
		</ul>
	</form>
</div>