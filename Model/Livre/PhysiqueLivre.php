<?php
class PhysiqueLivre extends Livre
{
    private float $poids;
    private string $isbn;

    public function getPoids():float{
        return $this->poids;
    }
    public function setPoids(float $poids):void{
        $this->poids = $poids;
    }

    public function getIsbn():string{
        return $this->isbn;
    }
    public function setIsbn(string $isbn):void{
        $this->isbn = $isbn;
    }
}