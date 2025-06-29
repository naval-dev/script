<?php
// Ce script lit et affiche le contenu du fichier index.php

$chemin_fichier = 'index.php';

// Vérifie si le fichier existe
if (file_exists($chemin_fichier)) {
    // Lit le contenu du fichier
    $contenu = file_get_contents($chemin_fichier);
    // Affiche le contenu
    echo "<pre>" . htmlspecialchars($contenu) . "</pre>";
} else {
    echo "Le fichier index.php n'existe pas.";
}
?>
