<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/header.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="title-header">
            <img class="chatimg" src="assets/img/chatbon.png" alt="">
            <h1>Tom'sFilms</h1>
        </div>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <div class="menu_sidebar">Menu</div>
                <a class="hoverbuton" href="index.php">Accueil</a>
                <a class="hoverbuton "href="#">Catalogue</a>
                <a class="hoverbuton btnco" href="connexion.php">Connexion</a>
                <a class="hoverbuton btnco" href="inscription.php">Inscription</a>
                <a class="hoverbuton" href="contact.php">Contact</a>
            </div>
            <div class="burgerwrap"> 
                <img class="frenchflag" src="assets/img/icons8-la-france-48.png" alt="">
                <div class="dropdown">
                <img class="clienticon" src="assets/img/icons8-account-64.png"alt="">
                        <div class="dropdown-content">
                        <a href="connexion.php">Connexion</a>
                        <a href="inscription.php">Inscription</a>
                        
                        </div>
                </div> 
                
                <div id="burgerbutton">
                    <div class="openbtn" onclick="openNav()"><img class="burgericon" src="assets/img/icons8-menu-rounded-50.png"alt=""></div>
                </div>
            </div>  
            
        </div>
    </header>
    <script src="../java/header.js"></script>
</body>
</html>