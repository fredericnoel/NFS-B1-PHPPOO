<?php


class Bdd implements Requete
{
    private $pdo;
    private $host = 'mysql:host=localhost;port=3306;dbname=michel';
    private $login = 'root';
    private $password = '';

    function __construct()
    {
        try {
            $this->pdo = new PDO($this->host, $this->login,$this->password);
        }

        catch(PDOException $e) {
            Log::logWrite($e->getMessage());
        }
    }

    public function inserer($title,$content)
    {
        $sql = "INSERT INTO $this->table VALUES (NULL,:title,:content,NOW(),'new')";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':title',$title,PDO::PARAM_STR);
        $query->bindValue(':content',$content,PDO::PARAM_STR);
        $query->execute();
        return $this->pdo->lastInsertId();
    }

    public function recuperer()
    {
        // TODO: Implement recuperer() method.
    }

    public function modifier()
    {
        // TODO: Implement modifier() method.
    }


    function __destruct()
    {
        unset($this->pdo);
    }
}