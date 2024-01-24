<?php
class NumLivre extends Livre {
    private float $taille;
    private bool $pisteAudio;

    public function getTaille():float{
        return $this->taille;
    }
    public function setTaille(float $taille):void{
        $this->taille = $taille;
    }

    public function getPisteAudio():bool{
        return $this->pisteAudio;
    }
    public function setPisteAudio(bool $pisteAudio):void{
        $this->pisteAudio = $pisteAudio;
    }

}