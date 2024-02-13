<?php

namespace App\Framework\Repository;

use PDO;
use PDOException;

class BddConnection
{
    private $connec;
    private $db;
    private $login;
    private $pass;

    public function __construct(string $db, string $login = 'root', string $pass = '')
    {
        $this->db = $db;
        $this->login = $login;
        $this->pass = $pass;

        $this->connection();
    }

    private function connection(): void
    {
        try {
            $bdd = new PDO(
                'mysql:host=127.0.0.1;port=8889;dbname=' . $this->db . ';charset=utf8mb4',
                $this->login,
                $this->pass
            );
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->connec = $bdd;
        } catch (PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            die('inn');
        }
    }

    public function q(string $sql, array $cond = null)
    {
        $stmt = $this->connec->prepare($sql);

        if ($cond) {
            foreach ($cond as $v) {
                $stmt->bindParam($v[0], $v[1], $v[2]);
            }
        }

        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->closeCursor();
        $stmt = NULL;
    }
}