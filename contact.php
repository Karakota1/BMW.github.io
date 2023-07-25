<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Тест-Драйв</title>
</head>
<body>
    <div class="test">
        <div class="container">
            <div class="test-content">
                <a href="index.html" class="test-content__back">Вернуться на главную</a>
                <h1 class="test-content__title">Тест-Драйв</h1>
                <div class="test-content__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore autem fuga facilis vel libero numquam atque earum explicabo eius dolorum ex architecto perferendis repudiandae obcaecati quis veritatis debitis, aut ipsum!
                Numquam distinctio doloremque magnam, neque, placeat quasi ut doloribus incidunt quia dolore voluptatum excepturi officiis iure quam at magni repellendus est ratione sit sed ullam temporibus. Quae similique eaque esse!
                Non cumque numquam animi molestiae aspernatur, ad aliquid nam, ab et nihil recusandae officia reiciendis, facilis corrupti. Magni culpa eum ipsum ut esse, corporis assumenda molestiae obcaecati atque beatae maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore autem fuga facilis vel libero numquam atque earum explicabo eius dolorum ex architecto perferendis repudiandae obcaecati quis veritatis debitis, aut ipsum!
                Numquam distinctio doloremque magnam, neque, placeat quasi ut doloribus incidunt quia dolore voluptatum excepturi officiis iure quam at magni repellendus est ratione sit sed ullam temporibus. Quae similique eaque esse!
                Non cumque numquam animi molestiae aspernatur, ad aliquid nam, ab et nihil recusandae officia reiciendis, facilis corrupti. Magni culpa eum ipsum ut esse, corporis assumenda molestiae obcaecati atque beatae maiores?</div>
            </div>
        </div>
    </div>
	
<div>
  <p style="position: relative;left: 3%;width: 97%;">
    <br>
    <font size="7">
    Оставьте отзыв:<br>
    </font>  <br><br>
    <form name="form1" method="post" action="contact.php">  <p> Имя: <input type="text" name="name_of_buyer"></p>  <p> Ваш Ephone_number	: <input  type="text" name="phone_number"></p> <p> <input type="submit" name="send" value="Отправить">  </p> </form>
  </p>
</div>
<br><br><br>
<div class="brd1">
<p text-align: right>
<?php
  $name_of_buyer = $_POST["name_of_buyer"]; 
  $phone_number	 = $_POST["phone_number"];

  /* Подключаемся к базе данных */
  $db = mysqli_connect("localhost", "root", "");
    if ($db === false){
    die("Ошибка: " . mysqli_connect_error());}
  mysqli_select_db($db, "Merin");
  if (!((empty($name_of_buyer))or (empty($phone_number)))) 
  {
    $sql = "INSERT INTO pokupateli(name_of_buyer, phone_number	) VALUES ('$name_of_buyer', '$phone_number')";
    $result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysqli_error($db));
  }
  $sql="SELECT name_of_buyer, phone_number	  FROM pokupateli";
  $result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysqli_error($db));

  while ($line=mysqli_fetch_row($result)) {
  echo "<b text-align: right>Имя:</b>".$line[0]."<br>";
  echo "<b>Ephone_number	:</b>".$line[1]."<br>";

  }
  $name_of_buyer = ""; 
  $phone_number	= "";
?>
</p>
</div>
	
</body>
</html>








