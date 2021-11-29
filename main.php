<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        main{
            margin: 20vh 0 0 ;
            text-align: center;
        }
        h1{
            margin-bottom: 60px;
            font-size: 70px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }
        main .pole{
            margin-top: 10px;
            border: 4px solid rgba(0, 0, 0, 0.5);
            width: 35%;
            height: 40px;
            padding-left: 5px;
            border-radius: 40px;
            
        }
        main .sub{
            margin-top: 20px;
            padding: 5px 50px;
        }
    </style>
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