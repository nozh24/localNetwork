<?php
session_start();
include_once ("includes/connect.php");

if (isset($_POST['LogIn'])){
    if (!empty($_POST["login"]) && !empty($_POST["password"])){
        $login = $_POST["login"];
        $password = $_POST["password"];
        $query ="SELECT * FROM user WHERE login ='".$login."'AND password ='".$password."'";
        $result = mysqli_query($connect,$query);
        $numrows = mysqli_num_rows($result);
    if ($numrows!=0) {
    $row =mysqli_fetch_assoc($result);
    $_SESSION["user_id"] = $row["id"];
     $_SESSION["user_login"] = $row["login"];
     $_SESSION["status"] = $row["status"];
     header("location: index.php");
}
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/regin.css">
	<title>Авторизация</title>
</head>
<body>
	<form action="signIn.php" class="box" method="post">
		<h1>Авторизация</h1>
		<input type="text" name="login" placeholder="Введите свой логин">
		<input type="password" name="password" placeholder="Введите свой пароль">
		<input type="submit"  name="LogIn" value="Войти">
		<p>У Вас еще нет аккаунта? <a href="signUp.php">Зарегистрируйтесь!</a></p>
		<a href="index.php">На главную страницу!</a>
	</form>
</body>
</html>