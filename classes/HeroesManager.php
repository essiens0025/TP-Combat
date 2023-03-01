<?php 
session_start();
include '../config/db.php';

$isSuccess = false;

$nom = null;

if(isset($_POST['nom']) && !empty($_POST['nom']) && filter_var($_POST['nom'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z]+$/")))) {
    if (isset($_POST['nom'])) {
        $nomStmnt = $db->prepare('SELECT * FROM heros WHERE nom = ?');
        $nomStmnt->execute([$_POST['nom']]);
        $nom = $nomStmnt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['classe'] = $_POST['classe'];
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['vivant'] = true;
        header('Location:../fight.php');
    }
}

if(empty($nom)) {

    try {

        if (isset($_POST['classe'])) {
            $nomStmnt = $db->prepare('INSERT INTO heros(nom , classe, vivant) VALUES (?,?,?)');
            $isSuccess = $nomStmnt->execute([
                $_POST['nom'],
                $_POST['classe'],
                true
            ]);
        } else {
            // Gérer l'erreur de données manquantes ici
        }

    } catch (PDOException $e) {
        error_log("Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage());
        echo "Une erreur est survenue lors de l'insertion de l'utilisateur : " . $e->getMessage();
    }

}

if ($isSuccess) {
    $_SESSION['classe'] = $_POST['classe'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['vivant'] = true;
    header('Location:../fight.php');
} else {
    // Gérer l'erreur d'insertion ici
    if ($nomStmnt->errorInfo()[1] == 1062) {
        echo "Erreur : cet utilisateur existe déjà";
    }
}
