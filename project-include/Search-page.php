<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="a0">
    <ul>
        <li><a href="Home-page.php">to Home page</a> </li>
        <li><a href="index.php">to Upload page</a> </li>
    </ul>

    <h1>Search Page</h1>
    <form>
        <input id="sh" onkeyup="filterImgName()" type="search" placeholder="Search for an image.." title="Type in a name"><br><br>
        <hr><br>
        <div id="SearchResult"></div>
        <div id="mm">
            <img alt="sega" src="https://fontmeme.com/images/Sega-Logo.jpg" height="400" width="400">
            <img alt="cisco" src="https://i.insider.com/50083d5269bedd1450000000?width=600&format=jpeg&auto=webp" height="400" width="400">
            <img alt="oracle" src="https://logowik.com/content/uploads/images/153_oracle.jpg" height="400" width="400">
            <img alt="atari" src="https://logowik.com/content/uploads/images/atari7759.jpg" height="400" width="400">
            <img alt="ea" src="https://bonitaworldmediaproduction.com/wp-content/uploads/2017/12/ea-sports-logo.jpg" height="400" width="400">
            <img alt="asus" src="https://logowik.com/content/uploads/images/424_asus.jpg" height="400" width="400">
            <img alt="playstaion" src="https://acclaimmag.com/wp-content/uploads/2013/02/Sony-PlayStation-Logo.jpg" height="400" width="400">
            <img alt="ibm" src="https://upload.wikimedia.org/wikipedia/commons/f/fc/IBM_logo_in.jpg" height="400" width="400">
        </div>
    </form>

    <script src="script.js"></script>

</body>

</html>