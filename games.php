<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>GameInfo</title>
</head>
<body>

    <div class="flexContainer debug">

<!-- TOP WELCOME TEXT!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <!-- <div class="top debug">Game Info</div> -->

<!-- NAV !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->        
        <div class="nav debug">
            <div class="navContainer">
                <a href="index.php">Home Page</a>
            </div>
        </div>

<!-- HEADER  !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="header2 debug"></div>
        
<!-- TOP WELCOME TEXT!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="infobar debug">Game Info</div>

<!-- GAMEINFO DB PHP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->       
        <div class="cards debug">
            <?php
                include "db_connection.php";

                $id = $_GET['id'];                

                $PhilipQuerie = "SELECT game_img, game_name, game_genre, game_publisher, game_year, game_info, game_price, game_id FROM `gameinfo` WHERE game_id = '$id'";

                $db_result = $conn->query($PhilipQuerie); 
                
                foreach ($db_result as $row)
                {            
                    
                    echo '<div class="card2 debug">' .
                        '<img src="' . $row['game_img'] . '" alt="' . $row['game_name'] . '" style="width:100%">' .
                        '</div>' .
                        '<div class="card2 debug">' .
                        // h1 game name
                        '<h1>' . $row['game_name']  . '</h1>' .
                        // game info
                        '<p class="gameinfo2">' . 'Genre: ' . $row['game_genre'] . '</p>' .
                        '<p class="gameinfo2">' . 'Publisher: ' . $row['game_publisher'] . '</p>' .
                        '<p class="gameinfo2">' . 'Year: ' . $row['game_year'] . '</p>' .
                        '<p class="gameinfo2">' . $row['game_info'] . '</p>' .
                        '<h2 class="price">' . '€' . $row['game_price'] . ',-' . '</h2>' .           
                        '<p class="gameinfo2">' . 'Order now @' . '<p class="gamestop"> GameCorner</p>' . '</p>' .
                        //go back button
                        '<a href="index.php?id=' . $row['game_id'] . '">' .          
                        '<p>' . '<button>' . 'Go Back' . '</button>' . '</p>' .
                        '</a>' .
                        '</div>';
                
                }    

            ?>
        </div>

<!-- TABLE RELATIONS DB!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        <div class="cards debug">
            <?php
                include "db_connection.php";

                $id = $_GET['id'];                

                $PhilipQuerie = "SELECT gameinfo.game_img, gameinfo.game_name, gameinfo.game_genre, gameinfo.game_publisher, gameinfo.game_year, gameinfo.game_info, gameinfo.game_price, gameinfo.game_id, consoleinfo.con_id, consoleinfo.game_console, consoleinfo.console_release FROM gameinfo 
                INNER JOIN consoleinfo ON gameinfo.con_id = consoleinfo.con_id  
                WHERE game_id = '$id'";

                $db_result = $conn->query($PhilipQuerie); 
                
                foreach ($db_result as $row)
                {            
                    
                    echo '<div class="card2 debug">' .
                        '<img src="' . $row['game_img'] . '" alt="' . $row['game_name'] . '" style="width:100%">' .
                        '</div>' .
                        '<div class="card2 debug">' .
                        // h1 game name
                        '<h1>' . $row['game_name']  . '</h1>' .
                        // game info
                        '<p class="gameinfo2">' . 'Genre: ' . $row['game_genre'] . '</p>' .
                        '<p class="gameinfo2">' . 'Publisher: ' . $row['game_publisher'] . '</p>' .
                        '<p class="gameinfo2">' . 'Year: ' . $row['game_year'] . '</p>' .
                        '<p class="gameinfo2">' . 'Console: ' . $row['game_console'] . '</p>' .
                        '<p class="gameinfo2">' . 'Release: ' .$row['console_release'] . '</p>' .
                        
                        '</div>' .
                        '<div class="card2 debug">' .
                        '<p class="gameinfo2">' . $row['game_info'] . '</p>' .
                        '<h2 class="price">' . '€' . $row['game_price'] . ',-' . '</h2>' .           
                        '<p class="gameinfo2">' . 'Order now @' . '<p class="gamestop"> GameCorner</p>' . '</p>' .

                        //go back button
                        '<a href="index.php?id=' . $row['game_id'] . '">' .          
                        '<p>' . '<button>' . 'Go Back' . '</button>' . '</p>' .
                        '</a>' .
                        '</div>';
                
                }    

            ?>
        </div>

<!--FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->    
        <div class="debug footer">Copyright &copy; 2019, GameCorner by Philip Andes</div> 
         
    </div>

</body>
</html>