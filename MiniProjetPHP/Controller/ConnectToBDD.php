<?php
global $bdd;

try {
    $bdd = new PDO('mysql:host=localhost;dbname=MiniProjetPHP', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $e) {
    die("Impossible de se connecter: " . $e -> getMessage());
};
?>
