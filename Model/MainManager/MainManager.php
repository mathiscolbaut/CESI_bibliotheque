<?php
require_once("Services/Model.php");
class MainManager extends Model{
    /**
     * Fonction permettant de simuler une récupération de donnée
     * depuis une base de donnée ou autres
     */
    public function getDataX(){
       $req = $this->getBdd()->prepare("SELECT * from Article");
       $req->execute();
       $datas = $req->fetchAll(PDO::FETCH_ASSOC);
       $req->closeCursor();
       return $datas;
    }
}