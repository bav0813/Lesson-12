<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 10.03.18
     * Time: 11:01
     */



/*Домашнее задание: сделать форму с выпадающим списком цветов. В зависимости от того, какой цвет выбран -
записывать его в cookie. И если выбран какой-то цвет делать стиль бекграунда сайта динамически с цветом,
который записан в кукис*/



//$mybgcolor='white';

if (isset($_COOKIE['mycolor'])) {
    $mybgcolor=$_COOKIE['mycolor'];
}

else
    $mybgcolor='white';   //default value

if (!empty($_POST['mycolor'])) {
    $mybgcolor=$_POST['mycolor'];
    setcookie('mycolor',$_POST['mycolor']);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Homework 12</title>


    </head>
<body bgcolor=<?= $mybgcolor ?>>


<form id="signupform"  action="" method="post">
    <label for="selectcolor">Выберите цвет фона:</label>
    <select name="mycolor">
        <option selected value="white">White</option>
        <option selected value="green">Green</option>
        <option selected value="blue">Blue</option>
        <option selected value="red">Red</option>
    </select>
    <p><input type="submit" value="Установить"></p>



</form>
</body>



</html>
