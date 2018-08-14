<?php
// src/Entities/User.php
namespace App\Entities;

/**
 * @Entity(repositoryClass=UserRepository::class)
 * @Table(name="users")
 */
class User
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int|null
     */
    private $id;

    /**
     * @Column(type="string", length=32)
     * @var string
     */
    private $username = '';

    /**
     * @Column(type="string", length=8)
     * @var string
     */
    private $status = 'active';

    public function getId() : ?int
    {
        return $this->id;
    }

    public function changeUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function changeStatus(string $status) : void
    {
        $this->status = $status;
    }

    public function getStatus() : string
    {
        return $this->status;
    }
}
