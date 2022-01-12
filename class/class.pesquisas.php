<?php

class PESQUISAS {

    public function listarDados($logado){
        $db = new DB;
        $sql = $db->select("SELECT * FROM cadastro WHERE nome='$logado'");
        return $sql;
    }

    public function verificarExistencia($cpf){
        $db = new DB;
        $sql = $db->select("SELECT id_cadastro FROM cadastro WHERE cpf = '$cpf'");
        if($db->rows($sql)){
            return true;
        }else{
            return false;
        }
    }

}