<?php
session_start();
include_once ("includes/connect.php");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Создайте свою локальную карту</title>
  <link rel="stylesheet" href="css/map.css">
</head>
<body>
  
  <a href="index.php">На главную страницу</a>
  <?php if(isset($_SESSION["status"] )) { ?>
              <h1 class="hello">Добро пожаловать, user: <?php echo $_SESSION["user_login"]; ?>.Теперь ты можешь создать свою карту!</h1> 
            <?php }  ?>
  <div id="mynetwork" class="canvas"></div>
  <div class="controls">
    <!-- <div class="controls_btns">
      <button id="save">Сохранить карту</button>
    </div> -->
    <!-- ///-->
    <p class="hello">Чтобы сохранить карту, необходимо кликнуть правой кнопкой мыши по карте и выбрать пункт "Сохранить картинку как..."</p>
</body>
</html>