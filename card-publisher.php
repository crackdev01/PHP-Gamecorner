<?php

    //CARD.PHP

    include "db_connection.php";        

    $sql_querie = "SELECT game_id, game_name, game_genre, game_year, game_price, game_publisher, game_img, game_info FROM gameinfo WHERE game_publisher = 'Activision'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card debug">' .
             '<a href="games.php?id=' . $row['game_id'] . '">' .
             '<img src="' . $row['game_img'] . '" alt="' . $row['game_name'] . '" style="width:100%">' .
             '</a>' .
             '<h1>' . $row['game_name']  . '</h1>' .
             '<p class="gameinfo">' . $row['game_info'] . '</p>' .           
             '<p class="gamestop">@ Gamestop</p>' .
             '</div>';
       
    }       

    $conn = null;

?>