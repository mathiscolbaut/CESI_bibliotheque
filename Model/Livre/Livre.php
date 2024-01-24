<?php
class Livre implements LivreInterface{
    private int $id;
    private string $titre;
    private string $auteur;
    private string $image;
    private string $description;


    private array $data =[];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitre():string{
        return $this->titre;
    }
    public function setTitre($titre) :void
    {
        $this->titre=$titre;
    }     

    public function getAuteur():string {
        return $this->auteur ;
    }
    public function setAuteur(string $auteur) :void{
        $this->auteur= $auteur;
    }

    public function getImage():string{
        return $this->image;
    }

    public function setImage($image):void{
        $this->image = $image;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function setDescription($description):void{
        $this->description = $description;
    }

    public function offsetExists($offset):bool {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset) {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet($offset, $value):void{
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset):void {
        unset($this->data[$offset]);
    }

    public function addLivre(Livre $livre){

    }

    public function delLivre(Livre $livre){

    }

    public function updateLivre(int $id,Livre $livre){

    }
}