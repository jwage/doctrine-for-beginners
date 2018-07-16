<?php
// src/Entities/User.php
namespace App\Entities;

/**
 * @Entity(repositoryClass="UserRepository")
 * @Table(name="users")
 */
final class User
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

    /**
     * @Embedded(class="Address", columnPrefix="address_")
     * @var Address|null
     */
    private $address;

    /**
     * @Column(name="phone_number", type="string", length=22, nullable=true)
     * @var string|null
     */
    private $phoneNumber;

    // ...

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function setStatus(string $status) : void
    {
        $this->status = $status;
    }

    public function getStatus() : string
    {
        return $this->status;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function getAddress() : ? Address
    {
        return $this->address;
    }

    public function setPhoneNumber(string $phoneNumber) : void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber() : ? string
    {
        return $this->phoneNumber;
    }
}
