<!-- 説明用 -->
<?php
// ★ポイント①★
session_start();
require('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>会員登録をする</title>
	<style>
		.error { color: red;font-size:0.8em; }
	</style>
</head>
<body>
	<h1>会員登録をする</h1>
	<!-- ★ポイント②★ -->
	<form action="" method="post" class="registrationform">
		<label>
			名前
			<!-- ★ポイント③★ -->
			<!-- ★ポイント④★ -->
			<input type="text" name="name" style="width:150px" value="<?php echo $_POST['name']??""; ?>">
		</label>
		<br>
		<label>
			email
			<input type="text" name="email" style="width:150px" value="<?php echo $_POST['email']??""; ?>">
		</label>
		<br>
 
		<label>
			パスワード
			<input type="password" name="password" style="width:150px" value="<?php echo $_POST['password']??""; ?>">
		</label>
		<br>
		<label>
			パスワード再入力<span class="red">*</span>
			<input type="password" name="password2" style="width:150px">
		</label>
		<br>
		<input type="submit" value="確認する" class="button">
	</form>
</body>
</html>