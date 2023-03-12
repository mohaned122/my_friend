<?php
$personnes = [
    'Directeur'=> ["prenom"=> "Mohamed", "nom"=> "Ali", "age"=> 55,
    "ville"=> "Tunis"],
    'Financier'=> ["prenom"=> "Fahima", "nom"=> "Kadhi", "age"=> 52,
    "ville"=> "Sousse"],
    'Comptable'=> ["prenom"=> "Halima", "nom"=> "Ben Ahmed", "age"=>
    38, "ville"=> "Kef"],
    'Informaticien'=> ["prenom"=> "Ahmed", "nom"=> "EL Kefi", "age"=>
    33, "ville"=> "Jendouba"],
    'Secretaire'=> ["prenom"=>"Samiha", "nom"=>"Attia", "age"=>46,
    "ville"=>"Gabes"],
    'Chauffeur'=> ["prenom"=>"Halim", "nom"=>"Ben
    Slama","age"=>27,"ville"=>"Beja"],
    ];
function remplirLigne(){
    $tab=[];
    $tab["nom"]=$_GET["nom"];
    $tab["prenom"]=$_GET["prenom"];
    $tab["age"]=$_GET["age"];
    $tab["ville"]=$_GET["ville"];
    return $tab;
}
function afficheChamp($tab){
    echo "<table><tr><td>key</td><td>nom</td><td>prenom</td><td>age</td><td>ville</td></tr>";
    foreach($tab as $poste => $details){
        echo "
        <tr>
        <td>".$poste."</td>
        <td>".$details["prenom"]."</td>
        <td>".$details["nom"]."</td>
        <td>".$details["age"]."</td>
        <td>".$details["ville"]."</td>
        </tr>";   
    }
    echo "</table>";
}

function total_age($tab){
    $x=0;
    echo "<br> le total d'age est :";
    foreach($tab as $poste => $details){
        $x+=$details["age"];
    }
    return $x;
}

function afficheCondition($tab,$x){
    $x=strtolower($x);
    echo "<table><tr><td>key</td><td>nom</td><td>prenom</td><td>age</td><td>ville</td></tr>";
    foreach($tab as $poste => $details){
        if($x == strtolower($poste) || $x == strtolower($details["nom"]) || $x == strtolower($details["prenom"]) || $x == strtolower($details["age"]) || $x == strtolower($details["ville"])){
        echo "
        <tr>
        <td>".$poste."</td>
        <td>".$details["prenom"]."</td>
        <td>".$details["nom"]."</td>
        <td>".$details["age"]."</td>
        <td>".$details["ville"]."</td>
        </tr>";
        }
    }
    echo "</table>";
}
function changer($tab,$x){
    $x=strtolower($x);
    foreach($tab as $poste => $details){
        if($x == strtolower($poste) || $x == strtolower($details["nom"]) || $x == strtolower($details["prenom"])){
            $details["nom"]=$_GET["name"];
            $details["prenom"]=$_GET["firstname"];
            $details["age"]=$_GET["old"];
            $details["ville"]=$_GET["vil"];
            echo " le personne de cle $poste a modifié";
        }
    }
    afficheChamp($tab);
}
?>