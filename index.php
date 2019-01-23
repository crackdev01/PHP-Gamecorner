<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>GameCorner</title>
</head>
<body>

<!-- GLOBAL FLEX CONTAINER!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="flexContainer debug">

<!-- TOP WELCOME TEXT!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="top debug">Welcome</div>

<!-- HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="header debug">GameCorner</div>

<!-- NAV !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->        
        <div class="nav debug">
            <div class="navContainer">
                <a id="current" href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
            </div>
        </div>
        
<!-- WHITESPACE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="debug whitespace"></div>

<!-- PHP CARDS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->         
        <div class="cards debug">
            <?php include "card.php"; ?>
        </div>

<!-- WHITESPACE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="debug whitespace"></div>

<!--FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->    
        <div class="debug footer">Copyright &copy; 2019, GameCorner by Philip Andes</div>

    </div>
    
</body>
</html>