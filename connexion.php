
<?php
var_dump($_POST);
$dsn = 'mysql:host=localhost;dbname=rqe_librairie;charset=utf8';
$bdd = new pdo($dsn, 'root', '');

$login = $_POST['login'];
$mdp = $_POST['mdp'];

$sql = $bdd->prepare("SELECT * from inscrit where email = :login and mot_de_passe = :mdp ");
$sql -> execute(array('login' => $login, 'mdp' => $mdp));
$data = $sql -> fetch();
if ($data) {
   echo "<h1> Bienvenue </h1>" ;

}
else {
    echo "<h3> Veuillez saisir un mot de passe et un identifiant valide </h3>";
}
?>



