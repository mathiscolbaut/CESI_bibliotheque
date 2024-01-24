<?php
require_once 'Services\Model.php';
require_once 'LivreInterface.php';
class Livre extends Model implements LivreInterface{
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

    public function offsetGet($offset): mixed
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet($offset, $value):void{
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset):void {
        unset($this->data[$offset]);
    }

    public function getAllLivre(){
            $req = "SELECT * FROM Livre";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->execute();

            if ($stmt->rowCount() >= 1)
                $listAllLivre = $stmt->fetchAll(PDO::FETCH_ASSOC);
            else
                $listAllLivre = "Rien";

            return $listAllLivre;
    }
    public function addLivre(LivreInterface $livre):bool{
        if($livre instanceof NumLivre ){
            $req = "INSERT INTO Livre (titre, auteur,image, description,taille,pisteAudio) VALUES (:titre,:auteur,:image,:description,:taille,:pisteAudio)";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":titre", $this->titre,PDO::PARAM_STR);
            $stmt->bindValue(":auteur", $this->auteur,PDO::PARAM_STR);
            $stmt->bindValue(":image", $this->image,PDO::PARAM_STR);
            $stmt->bindValue(":description", $this->description,PDO::PARAM_STR);
            $stmt->bindValue(":taille",$this->getTaille(),PDO::PARAM_STR);
            $stmt->bindValue(":pisteAudio",$this->getPisteAudio(),PDO::PARAM_BOOL);
            if($stmt->execute()){
                return true;
            }
            else{
                return false;
            }
        }
        if($livre instanceof PhysiqueLivre){
            $req = "INSERT INTO Livre (titre, auteur,image, description,ISBN,poids) VALUES (:titre,:auteur,:image,:description, :ISBN,:poids)";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":titre", $this->titre,PDO::PARAM_STR);
            $stmt->bindValue(":auteur", $this->auteur,PDO::PARAM_STR);
            $stmt->bindValue(":image", $this->image,PDO::PARAM_STR);
            $stmt->bindValue(":description", $this->description,PDO::PARAM_STR);
            $stmt->bindValue(":ISBN",$this->getIsbn(),PDO::PARAM_STR);
            $stmt->bindValue(":poids", $this->getPoids(),PDO::PARAM_STR);
            if($stmt->execute()){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    public function delLivre($id):bool{
        $req = "SELECT titre FROM Livre WHERE id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        if($stmt->rowCount() == 1){
            $req = "DELETE FROM Livre WHERE id= :id";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":id",$id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }else {
            return false;
        }
    }
    public function getLivreById($id) {
        $req = "SELECT * FROM Livre WHERE id = :id";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() == 1)
            $livreGet = $stmt->fetch(PDO::FETCH_ASSOC);
        else
            $livreGet = "Rien";

        return $livreGet;
    }

    public function updateLivre(int $id,Livre $livre){


    }
}