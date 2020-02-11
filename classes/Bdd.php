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
            $this->pdo = new PDO($this->host, $this->login, $this->password);
        } catch (PDOException $e) {
            Log::logWrite($e->getMessage());
        }
    }

    public function inserer(string $table, array $values)
    {
        $sql = "INSERT INTO $table VALUES (";

        foreach ($values as $key => $content) {
            $sql .= $content[0];
            if ($key !== count($values) - 1) {
                $sql .= ", ";
            }
        }

        $sql .= ", NOW());";

        $query = $this->pdo->prepare($sql);

        foreach ($values as $key => $contentBind) {
            if (is_int($contentBind[2])) {
                $query->bindValue($contentBind[0], $contentBind[1], $contentBind[2]);
            }
        }

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