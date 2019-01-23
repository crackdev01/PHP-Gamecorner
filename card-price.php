<?php

//Filter For price between 20 and 30

    include "db_connection.php";        

    $sql_querie = "SELECT * FROM gameinfo WHERE game_price BETWEEN 20 AND 30"; 
    
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