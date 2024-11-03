<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User {
    #[ORM\Id]
    #[ORM\Column(name:'id_user', type: 'integer')]
    #[ORM\GeneratedValue]
    protected int $id;

    #[ORM\Column(name: 'pseudo_user', type: 'string', length: 50)]
    protected string $pseudo;

    #[ORM\Column(name: 'email_user', type: 'string', length: 100, unique: true)]
    protected string $email;

    #[ORM\Column(name: 'password_user', type: 'string')]
    protected string $password;

    public function getId(): int {
        return $this->id;
    }

    public function getPseudo(): string {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): void {
        $this->pseudo = $pseudo;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }
}
