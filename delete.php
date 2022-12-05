<?php

require_once '../../../conexao_bd/db/ConMysqlPdo.php'; //Importando conexão do banco de dados
require_once '../../../Linha/model/Linha.php'; //Importando classe

class Classe {

    public static function delete($id) {

        try {

            $pdo = ConMysqlPdo::getInstance();
            $sql = "DELETE FROM linha
                    WHERE ID = :ID";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":ID", $id);

            $stmt->execute();

            return true;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

}