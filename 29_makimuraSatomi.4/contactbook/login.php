<?php
include'header.php';
?>

<html>
		<div class="col-xs-6 col-xs-offset-3">
		<h2>ログイン</h2>
		<form action="login_insert.php" method="post">
			<div class="form-group">
				<label for="login_email">Email</label>
				<input type="email" class="form-control" id="login_email" name="login_email">
			</div>
			<div class="form-group">
				<label for="login_password">パスワード</label>
				<input type="password" class="form-control" id="login_password" name="login_password">
			</div>
			<button type="submit" class="btn btn-default" id= "login" name = "login">ログイン</button>
		</form>
 </div>

 </html>

<?php
include 'footer.php';
?>