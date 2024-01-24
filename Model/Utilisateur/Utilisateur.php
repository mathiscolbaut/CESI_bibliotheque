<?php

class Utilisateur implements UserInterface
{
    private int $id;

    private string $email;

    private string $password;

    private string $nom_utilisateur;

    private $data =[];

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
    public function seConnecter(string $email, string $password): void
    {
        // TODO: Implement seConnecter() method.
    }

    public function inscrire(string $email, string $password, string $nom_utilisateur): void
    {
        // TODO: Implement inscrire() method.
    }
}