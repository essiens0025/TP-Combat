<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body style="background-image: url('http://twistedsifter.com/wp-content/uploads/2013/05/animated-gifs-of-fighting-game-backgrounds-45.gif'); background-repeat: no-repeat;
   background-position: center center;
   background-size: cover">
    <h1 class="h1-index">Ultimate Fighting Game !</h1>
    <div style="text-align:center">
        <p class="p-index">Entrez votre Pseudo !</p>
        <form action="classes/HeroesManager.php" method="POST">
            <input style="padding-bottom: -40px;" type="text" name="nom">
            <br>
            <h2>Classes :</h2>
        <select name='classe'>
        <option>--Choisissez une classe</option>
        <option>Archer</option>
        <option>Mage</option>
        <option>Guerrier</option>
        </select>
            <input type="submit" value="Soumettre">
        </form>
    </div>
</body>

</html>
