<?php

require_once 'UserInterface.php';
require_once 'Services/Model.php';

class Utilisateur extends Model implements UserInterface
{
    private int $id;

    private string $email;

    private string $password;

    private string $nom_utilisateur;

    private array $data =[];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getNomUtilisateur(): string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(string $nom_utilisateur): void
    {
        $this->nom_utilisateur = $nom_utilisateur;
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
    public function seConnecter(string $email, string $password) :bool
    {
        $req = "SELECT * FROM Utilisateur WHERE mail = :email";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $utilisateur['mot_de_passe'])) {
                $_SESSION['user'] = $utilisateur;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

        return $user;
    }

    public function inscrire(string $email, string $password, string $nom_utilisateur): bool
    {
        $req = "INSERT INTO Utilisateur (mail, mot_de_passe, nom) VALUES (:email, :password, :nom_utilisateur)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->bindValue(":password", password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $stmt->bindValue(":nom_utilisateur", $nom_utilisateur, PDO::PARAM_STR);

        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
    }
}