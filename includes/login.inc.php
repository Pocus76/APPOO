<h1>Login</h1>
<?php
if (isset($_POST['frmLogin'])) {
    $mail = $_POST['mail'] ?? "";
    $password = $_POST['password'] ?? "";

    $erreurs = array();

    if ($mail == "") array_push($erreurs, "Veuillez saisir votre mail");
    if ($password == "") array_push($erreurs, "Veuillez saisir votre mot de passe");

    if (count($erreurs) > 0) {
        $message = "<ul>";

        for ($i = 0 ; $i < count($erreurs) ; $i++) {
            $message .= "<li>";
            $message .= $erreurs[$i];
            $message .= "</li>";
        }

        $message .= "</ul>";

        echo $message;
        include "frmLogin.php";
    }

    else {
        $rec = new Queries();
        $password = sha1($password);
        $token = uniqid(sha1(date('Y-m-d|H:m:s')), false);

        $sql = "SELECT * FROM membres_tbl WHERE mail=$mail AND password=$password";

        $rec -> checkLogin($sql);

        $message = "<h1>Wunderbar !!!</h1>";
        $message .= "<p>Vous êtes inscrit !!!</p>";
        $message .= "<p>Merci de cliquer sur le lien pour valider</p>";
        $message .= "<p><a href='http://localhost/CESI/AP1/index.php?";
        $message .= "page=validationInscription&amp;token=";
        $message .= $token;
        $message .= "' target='_blank'>Lien</a></p>";







        mail($mail, 'Confirmation compte', $message);
        echo "<p>Ich bin dans la base</p>";
    }

}

else {
    include "frmLogin.php";
}