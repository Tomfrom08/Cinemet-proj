<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/connexion.css">
    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    
</head>
<body>
<?php require("assets/includ/header.php"); ?>
    <main>
        <div class="box-shadow">
        

            <form action="" method="post">

                <div class="container">
                    <h2>Inscription</h2>
                    <label for="familyname"><b>Nom</b></label>
                    <input type="text" placeholder="nom" name="familyname" required>
                    <label for="name"><b>Prénom</b></label>
                    <input type="text" placeholder="prénom" name="name" required>
                    <label for="name"><b>Password</b></label>
                    <input type="password" placeholder="mot de passe" name="name" required>

                    <label for="psw-verif"><b>Confirmer mot de passe</b></label>
                    <input type="password" placeholder="confirmer mot de passe" name="psw-verif" required>
                        
                    <button type="submit">s'inscrire</button>
                </div>
            </form>
        </div>
    

    </main>
    <?php require("assets/includ/footer.php"); ?>

    <script src="assets/java/header.js"></script>
</body>
</html>