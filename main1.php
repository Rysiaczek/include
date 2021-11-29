<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        @$kolor = $_POST['kolorek'];
    ?>
    <h1 style="color:'$kolor';">Google</h1>
    <form action="" method="post">
    <input type="text"class="pole" name="kolorek"><br>
    <input type="submit" class="sub" value="zmień">
    </form>
</body>
</html>