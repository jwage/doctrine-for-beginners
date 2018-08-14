<?php
// src/Entities/Address.php
namespace App\Entities;

/**
 * @Embeddable
 */
class Address
{
    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $street;

    /**
     * @Column(
     *     name="postal_code",
     *     type="string",
     *     nullable=true
     * )
     * @var string
     */
    private $postalCode;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $city;

    /**
     * @Column(type="string", nullable=true)
     * @var string
     */
    private $country;

    public function __construct(
        string $street,
        string $postalCode,
        string $city,
        string $country
    )
    {
        $this->street     = $street;
        $this->postalCode = $postalCode;
        $this->city       = $city;
        $this->country    = $country;
    }

    public function getStreet() : string
    {
        return $this->street;
    }

    public function getPostalCode() : string
    {
        return $this->postalCode;
    }

    public function getCity() : string
    {
        return $this->city;
    }

    public function getCountry() : string
    {
        return $this->country;
    }
}
