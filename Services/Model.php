<?php
abstract class Model{
    private static $pdo;

    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=www.masterit-industries.eu;dbname=CESI_Proc_POO;charset=utf8","app","coussette");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }

    private function __clone() {
        // Bloquer la méthode __clone
        throw new Exception("Clonage interdit");
    }
    private function __wakeup() {
        // Bloquer la méthode __wakeup
        throw  new Exception("Wakeup interdit");
    }
}