<?php

interface UserInterface extends ArrayAccess
{
    public function getId(): int;

    public function setId(int $id): void;

    public function getEmail(): string;

    public function setEmail(string $email): void;

    public function getPassword(): string;

    public function setPassword(string $password): void;

    public function getNomUtilisateur(): string;

    public function setNomUtilisateur(string $nom_utilisateur): void;

    public function seConnecter(string $email, string $password): bool;

    public function inscrire(string $email, string $password, string $nom_utilisateur): bool;
}