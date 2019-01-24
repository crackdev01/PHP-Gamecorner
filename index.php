<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/dropdown.js"></script>
    <title>GameCorner || Main</title>
</head>
<body>

<!-- GLOBAL FLEX CONTAINER!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="flexContainer debug">

<!-- NAV TOP!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->        
        <div class="nav debug">
            <div class="navContainer">
                <a href="landingpage.php">LandingPage</a>
            </div>
        </div>

<!-- NAV !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->        
        <div class="nav debug">
            <div class="navContainer">
                <a id="current" href="index.php">Games</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </div>
        </div>
   
<!-- WHITESPACE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <div class="debug whitespace"></div>

<!-- NAV !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->        
<!-- <div class="nav debug">
        <div class="navContainer">
                <a href="#">Filter On:</a>
                <a href="#">Price from low to high</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
        </div>
</div> -->

        <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Dropdown Filter</button>
                        <div id="myDropdown" class="dropdown-content">
                                <input type="text" placeholder="Filter" id="myInput" onkeyup="filterFunction()">
                                        <a href="card-price.php">Price Low To High</a>
                                        <a href="#">Name Alphabetic</a>
                                        <a href="#">Year</a>
                        </div>
        </div>

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