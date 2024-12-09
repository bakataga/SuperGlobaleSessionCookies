<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $animal = $_POST['animal'];
    $couleur = $_POST['couleur'];
    
    // Définir les cookies pour stocker les informations
    setcookie("animal", $animal, time() + (86400 * 30), "/"); // Cookie valable 30 jours
    setcookie("couleur", $couleur, time() + (86400 * 30), "/"); // Cookie valable 30 jours
    
    // Rediriger vers une page de confirmation ou d'affichage des préférences
    header("Location: preferences.php");
    exit();
}
?>
