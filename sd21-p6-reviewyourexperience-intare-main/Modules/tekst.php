<?php
    
    function getTekst(int $id)
    {
        try{
            global $pdo;
            $teksten = $pdo->Prepare("SELECT * FROM `tekst` WHERE `auto_id` =:auto_id");
            $teksten->bindValue(":auto_id", $id);
            $teksten->execute();
            $tekst = $teksten->fetchAll(PDO::FETCH_CLASS, 'tekst');
            return $tekst;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }