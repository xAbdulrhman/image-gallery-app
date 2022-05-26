<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="a0">

    <?php
    require_once('./db_connection.php');
    require('./get_pics.php');
    ?>

    <ul>
        <li><a href="Search-page.php">to Search page</a></li>
        <li><a href="index.php">to Upload page</a> </li>
    </ul>

    <h1>Home Page</h1>

    <form class="pic">
        <h3 style="font-family: Franklin Gothic Medium;">Before Sorting:</h3>
        <img src="https://fontmeme.com/images/Sega-Logo.jpg" height="300" width="300">
        <img src="https://i.insider.com/50083d5269bedd1450000000?width=600&format=jpeg&auto=webp" height="300" width="300">
        <img src="https://logowik.com/content/uploads/images/153_oracle.jpg" height="300" width="300">
        <img src="https://logowik.com/content/uploads/images/atari7759.jpg" height="300" width="300">
        <img src="https://bonitaworldmediaproduction.com/wp-content/uploads/2017/12/ea-sports-logo.jpg" height="300" width="300">
        <img src="https://logowik.com/content/uploads/images/424_asus.jpg" height="300" width="300">
        <img src="https://acclaimmag.com/wp-content/uploads/2013/02/Sony-PlayStation-Logo.jpg" height="300" width="300">
        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/IBM_logo_in.jpg" height="300" width="300">

        <h3 style="font-family: Franklin Gothic Medium;">After Sorting:</h3>
        <div id="result">
            <!-- <img src=""> -->
        </div>
        <script src="script.js"></script>

        <h3 style="font-family: Franklin Gothic Medium;">Uploaded images:</h3>

        <?php get_all_pics(); ?>
    </form>

</body>

</html>