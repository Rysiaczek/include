<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="form">
            <form action="" method="post">
                <a><input type="submit" name="color" value="jasny"></a>
                <a><input type="submit" name="color" value="ciemny"></a>
            </form>
        </div>
        <div class="php">   
            <?php
            if(isset($_POST['color'])){
                switch($_POST['color']){
                    case "jasny" : include('nav.php');
                    break;
                    case "ciemny" : include('nav1.php');
                    break;
                    default;
                }
            }
            else{
                echo "<a href='' class='bta1'>Gmail</a>";
                echo "<a href='' class='bta2'>Grafika</a>";
                echo "<a href='' class='bta5'>konto</a>"; 
            }
            ?>
        </div>
    </nav>
    <main>
        <?php
            if(isset($_POST['color'])){
                switch($_POST['color']){
                    case "jasny" : include('main.php');
                    break;
                    case "ciemny" : include('main1.php');
                    break;
                    default;
                }
            }
            else{  
                @$kolor = $_POST['kolorek'];

                echo "<h1 style='color:$kolor;'>Google</h1>";
                echo "<form action='' method='post'>";
                echo     "<input type='text'class='pole' name='kolorek'><br>";
                echo     "<input type='submit' class='sub' value='zmień'>";
                echo "</form>";
            }
        ?>
        <p>Wpisz dowolny kolor po angielku / w formacie rgb " rgb(38, 155, 135) "/ rgba " rgba(38, 155, 135, 0.5) " / hex " #26FC8E "</p>
    </main>
</body>
</html>