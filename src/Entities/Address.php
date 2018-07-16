<?php
// src/Entities/Address.php
namespace App\Entities;

/**
 * @Embeddable
 */
final class Address
{
    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $street = '';

    /**
     * @Column(name="postal_code", type="string", nullable=true)
     * @var string
     */
    private $postalCode = '';

    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $city = '';

    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $country = '';

    // ...

    public function getStreet() : string
    {
        return $this->street;
    }

    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    public function getPostalCode() : string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getCity() : string
    {
        return $this->city;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function getCountry() : string
    {
        return $this->country;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }
}
