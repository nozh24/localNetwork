<?php 
include_once ('includes/connect.php'); 
session_start();

if (isset($_POST["RegIn"])) {

    if (!empty($_POST["login"]) && !empty($_POST["password"])) {
        $login = $_POST["login"];
        $password = $_POST["password"];
        $query = "SELECT * FROM user WHERE login='" . $login . "'";
        $query_s = mysqli_query($connect, $query);
        if($query_s)
         {
            $sql = "INSERT INTO user (login, password, status) VALUES ('$login','$password', 0)";
            $result = mysqli_query($connect, $sql);
            
                $query = "SELECT * FROM user WHERE login='" . $login . "'";
                $query_s = mysqli_query($connect, $query);
                $row = mysqli_fetch_assoc($query_s);
                $_SESSION["status"] = $row["status"];
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["user_login"] = $row["login"];
                header("location:signIn.php");  
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
	<title>Регистрация</title>
</head>
<body>
	<form action="signUp.php" class="box" method="post">
		<h1>Регистрация</h1>
		<input type="text" name="login" placeholder="Введите свой логин">
		<input type="password" name="password" placeholder="Введите свой пароль">
		<input type="submit"  name="RegIn" value="Зарегистрироваться">
		<p>У Вас уже есть аккаунт? <a href="signIn.php">Авторизуйтесь!</a></p>
		 <a href="index.php">На главную страницу!</a>
	</form>
</body>
</html>