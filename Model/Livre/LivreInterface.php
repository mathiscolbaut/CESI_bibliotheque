<?php

interface LivreInterface extends ArrayAccess{
    public function getId():int;
    public function setId(int $id):void;
    public function getTitre():string;
    public function setTitre(string $titre):void;
    public function getAuteur():string;
    public function setAuteur(string $auteur):void;
    public function getImage():string;
    public function setImage(string $image):void;
    public function getDescription():string;
    public function setDescription(string $description):void;
    public function offsetExists($offset):bool;
    public function offsetGet($offset);
    public function offsetSet($offset, $value):void;
    public function offsetUnset($offset):void;
    public function addLivre(LivreInterface $livre);
    public function delLivre(int $id);
    public function updateLivre(int $id,Livre $livre);

}