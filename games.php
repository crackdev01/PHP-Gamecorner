<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Document</title>
</head>
<body>

    <div class="card">
        <?php
            include "db_connection.php";

            $id = $_GET['id'];                

            $PhilipQuerie = "SELECT * FROM `gameinfo` WHERE game_id = '$id'";

            $db_result = $conn->query($PhilipQuerie); 
            
            foreach ($db_result as $row)
            {            
                
                echo '<div class="card debug">' .
                    '<img src="' . $row['game_img'] . '" alt="' . $row['game_name'] . '" style="width:100%">' .
                    // h1 game name
                    '<h1>' . $row['game_name']  . '</h1>' .
                    // game info
                    '<p class="gameinfo">' . 'Genre: ' . $row['game_genre'] . '</p>' .
                    '<p class="gameinfo">' . 'Publisher: ' . $row['game_publisher'] . '</p>' .
                    '<p class="gameinfo">' . 'Year: ' . $row['game_year'] . '</p>' .           
                    '<p class="gameinfo">' . 'Order now @' . '<p class="gamestop"> Gamestop</p>' . '</p>' .
                    //go back button
                    '<a href="index.php?id=' . $row['game_id'] . '">' .          
                    '<p>' . '<button>' . 'Go Back' . '</button>' . '</p>' .
                    '</a>' .
                    '</div>';
            
            }    


        ?>
    </div>            

</body>
</html>