<?php
include'header.php';
?>


<html>
<div class="col-xs-6 col-xs-offset-3">
 	<h2>会員登録</h2>
	<form action="insert.php" method="post">
		<div class="form-group">
			<label for="name">名前</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="password">パスワード</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<button type="submit" class="btn btn-default">登録する</button>
	</form>
</div>

<?php
include'footer.php';
?>
