<?php
include "./function.php";
$tab=$personnes;
echo "<center><h1>***********************mini-projet****************************</p> </center>";
if(!empty($_GET["key"])){
    array_push($tab,remplirLigne());
}
afficheChamp($tab);
echo total_age($tab);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini-projet</title>
    <style>
        img{
            position: fixed;
            width:400px;
            height: auto;
            margin-left:500px ;
        }
    </style>
</head>
<body>
    
    <img src="./bmo.jpg" alt="my_classmate">
    <p>************************remplir********************************</p>
    <form action="mini-projet.php" method="get">
        <input type="text" name="key"  placeholder="mot passe" value="<?php if(!empty($_GET["key"])) echo $_GET["key"] ?>"><br>
        <input type="text" name="nom"  placeholder="nom" value="<?php if(!empty($_GET["nom"])) echo $_GET["nom"] ?>"><br>
        <input type="tel" name="prenom"  placeholder="prenom" value="<?php if(!empty($_GET["prenom"])) echo $_GET["prenom"] ?>"><br>
        <input type="number" name="age" placeholder="age" value="<?php if(!empty($_GET["age"])) echo $_GET["age"] ?>"><br>
        <input type="text" name="ville"  placeholder="ville" value="<?php if(!empty($_GET["ville"])) echo $_GET["ville"] ?>"><br>
        <button type="submit">submit</button>
    </form>
    <p>************************filtrage********************************</p>
    <form action="mini-projet.php" method="get">
        <p>
            <label for="filter">filtrer votre recherche</label>
            <input type="text" name="filter" id="filter" value="<?php if(!empty($_GET["filter"])) echo $_GET["filter"] ?>"></p>
        <button type="submit">submit</button>
    </form>
    <?php
    if(!empty($_GET["filter"])){
        $x=$_GET["filter"];
        afficheCondition($tab,$x);
    }
    ?>
    <p>************************modification********************************</p>
    <form action="mini-projet.php" method="get">
        <input type="text" name="cle"  placeholder="donner le nom ou le code" value="<?php if(!empty($_GET["cle"])) echo $_GET["cle"] ?>"><br>
        <input type="text" name="name"  placeholder="donnez le neveau  nom" value="<?php if(!empty($_GET["name"])) echo $_GET["name"] ?>"><br>
        <input type="tel" name="firstname"  placeholder="donnez le neveau prenom" value="<?php if(!empty($_GET["firstname"])) echo $_GET["firstname"] ?>"><br>
        <input type="number" name="old" placeholder="donnez le neveau  age" value="<?php if(!empty($_GET["old"])) echo $_GET["old"] ?>"><br>
        <input type="text" name="vil"  placeholder="donner le neveau ville" value="<?php if(!empty($_GET["vil"])) echo $_GET["vil"] ?>"><br>
        <button type="submit">submit</button>
    </form>
    <?php 
if(!empty($_GET["cle"])){
    $tab[$_GET["cle"]]=["prenom"=> $_GET["firstname"], "nom"=> $_GET["name"], "age"=> $_GET["old"],
    "ville"=> $_GET["vil"]];
    afficheChamp($tab);
}
    ?>
</body>
</html>