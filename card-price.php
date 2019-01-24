<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>GameCorner || Main</title>
</head>
<body>

<!-- GLOBAL FLEX CONTAINER!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="flexContainer debug">

<!-- NAV TOP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->        
    <div class="nav debug">
        <div class="navContainer">
            <a href="index.php">Home</a>
        </div>
    </div>

<!-- NAV !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->        
        <!-- <div class="nav debug">
            <div class="navContainer">
                <a href="index.php">Games</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </div>
        </div> -->
        
<!-- WHITESPACE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="debug whitespace"></div>

<!-- PHP CARDS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->         
        <div class="cards debug">
        <?php

//Filter For price between 20 and 30

    include "db_connection.php";        

    $sql_querie = "SELECT * FROM gameinfo ORDER BY game_price ASC"; 
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo  '<div class="card debug">' .
        '<img src="' . $row['game_img'] . '" alt="' . $row['game_name'] . '" style="width:100%">' .
        '<h1>' . $row['game_name']  . '</h1>' .
        '<h2 class="price">' . '€' . $row['game_price'] . ',-' . '</h2>' .
        '<p class="gameinfo">' . $row['game_info'] . '</p>' . 
        '<a href="games.php?id=' . $row['game_id'] . '">' .          
        '<p>' . '<button>' . 'Click For More Info' . '</button>' . '</p>' .
        '</a>' .
        '</div>';
       
    }       

    $conn = null;

?>
        </div>

<!-- WHITESPACE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="debug whitespace"></div>

<!--FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->    
        <div class="debug footer">Copyright &copy; 2019, GameCorner by Philip Andes</div>

    </div>
    
</body>
</html>