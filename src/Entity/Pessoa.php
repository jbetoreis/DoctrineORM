<?php
namespace Beto\Doctrineorm\Entity;

// Anotação
/**
 * @Entity
 */
class Pessoa{  // A classe é uma entidade
    // @Id Chave primária
    // @GeneratedValue autoincrementavel

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;

    /**
     * @Column(type="string")
     */
    private string $nome;

    /**
     * @Column(type="string")
     */
    private string $email;

    /**
     * @Column(type="string")
     */
    private string $telefone;

    public function getId(): int{
        return $this->id;
    }

    public function setId($id): self{
        $this->id = $id;
        return $this;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome($nome): self{
        $this->nome = $nome;
        return $this;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail($email): self{
        $this->email = $email;
        return $this;
    }

    public function getTelefone(): string{
        return $this->telefone;
    }

    public function setTelefone($telefone): self{
        $this->telefone = $telefone;
        return $this;
    }
}

?>