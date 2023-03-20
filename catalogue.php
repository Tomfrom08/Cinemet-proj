<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/catalogue.css">
    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
</head>
<body>
<?php require("assets/includ/header.php"); ?>
    <main>
        <div class="up-pic">
            <h2>Catalogue</h2>
        </div>
        <div class="filter-box">
            <div class="filter1">
            <input type="text"placeholder="Search for names.." title="Search">
            </div>
            <div class="filter2">
            <input type="text"placeholder="Search by type " title="Search">
            <input type="number"placeholder="Search by year " title="Search">
            
        </div>
    </main>
    <?php require("assets/includ/footer.php"); ?>
    <script src="assets/java/header.js"></script>
</body>
</html>