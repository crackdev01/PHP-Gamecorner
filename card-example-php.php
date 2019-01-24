   
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