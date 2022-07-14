<?php

class Fusers {
   
    public function loadCliente(int $moderatoreID){
        try {
            $dbConnection = dbf::getInstance();
            $pdo = $dbConnection->connect();

            $sql = (SELECT  FROM  WHERE ); // <------------------
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(':userID' => $moderatoreID));
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($rows) == 1) {
                $record = $rows[0];
                $moderatoreID = (int)$record[];
                $nome = $record[];
                $cognome = $record[];
                $email = $record[];
                $password = $record[];
            }
        } catch (PDOException $e){
            return null;
        }
    }
}

?>