<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/connexion.css">
    <link rel="stylesheet" href="assets/styles/contact.css">
</head>
<body>
<?php require("assets/includ/header.php"); ?>
    <main>
        <div class="box-shadow">
            

            <form action="" method="post">

                <div class="container">
                    <h2>Contact</h2>
                    <label for="uname"><b>Votre e-mail</b></label>
                    <input type="email" placeholder="Enter your e-mail" name="email" required>

                    <label for="message"><b>Message</b></label>
                    <textarea class="input-message" name="message" cols="30" rows="10"></textarea>
                        
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    

    </main>
    <?php require("assets/includ/footer.php"); ?>
    <script src="assets/java/header.js"></script>
</body>
</html>