<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

abstract class Character {

}

interface GenerateCode
{
    public function generateHTML();

}
trait DisplayCategory
{
    public function CharacterCategory($Category)
    {
        echo $Category;
    }

}
class GameCharacter extends Character {

    // Attributs
    public $Name;
    public $Pictures;
    public $Description;
    public const CLASS_CATEGORY = "Character";

    //Trait 
    use DisplayCategory;

//Méthodes et Fonctions 
public function __construct($Name,$Picture,$Description)
{
    $this->Name =$Name;
    $this->Picture =$Picture;
    $this->Description =$Description;

    echo "<h2>" . $this->Name . "</h2>";
}


public function generateHTML ()
{
    echo "<div>";
    echo "<img src'" . $this->Picture . "'/>";
    echo "<p>" . $this->Description . "</p>";
    echo "</div>";
}


}

class AnimeCharacter extends Character{

    // Attributs
    public $Name;
    public $Pictures;
    public $Description;
    public const CLASS_CATEGORY = "Character";

    //Trait 
    use DisplayCategory;

//Méthodes et Fonctions 
public function __construct($Name,$Picture,$Description)
{
    $this->Name =$Name;
    $this->Picture =$Picture;
    $this->Description =$Description;

    echo "<h2>" . $this->Name . "</h2>";
}


public function generateHTML ()
{
    echo "<div>";
    echo "<img src'" . $this->Picture . "'/>";
    echo "<p>" . $this->Description . "</p>";
    echo "</div>";
}

}

?>

<?php

$Ditto= new GameCharacter("Ditto", "Ditto.jpg", "Like use Morphing");
$Ditto->generateHTML();
$Ditto->CharacterCategory("Playable Character");


$GojoSatoru = new AnimeCharacter("Gojo Satoru", "Garshomp.jpg", "Ryoiki Tenkai");
$GojoSatoru->generateHTML();
$GojoSatoru->CharacterCategory("Overpowered Character");
 


?>



</body>
</html>