<?php
class Queries
{
    // DSN : Data Source Name
    private $dsn = "mysql:dbname=ap;host=localhost;charset=utf8";
    private $user = "AP";
    private $password = "ap";
    private $db;

    function __construct()
    {
        try {
            $this -> db = new PDO($this -> dsn, $this -> user, $this -> password);
            $this -> db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        catch (PDOException $e) {
            Log::logWrite($e -> getMessage());
        }
    }

    function insert($sql) {
        return $this -> db -> exec($sql);
    }

    function checkLogin($sql)
    {
        $verif = $this->db->exec($sql);
        $ok = mysqli_query($verif) or die('Erreur SQL !<br>' . '<br>');
        if (!mysqli_num_rows($ok)) {
            echo '<center><br><br><b>Erreur dans la saisie du login et/ou du mot de passe !</b>';
            echo '<br><br><a href="javascript:history.go(-1)">Retour</a></center>';
            exit();
        }
    }

    function __destruct()
    {
        unset($this -> db);
    }
}