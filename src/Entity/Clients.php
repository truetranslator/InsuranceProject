<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientsRepository::class)
 */
class Clients
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clients_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $clients_coherence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $clients_email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $clients_familiar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clients_EGN_EIK;

    /**
     * @ORM\Column(type="integer")
     */
    private $clients_phone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientsName(): ?string
    {
        return $this->clients_name;
    }

    public function setClientsName(string $clients_name): self
    {
        $this->clients_name = $clients_name;

        return $this;
    }

    public function getClientsCoherence(): ?string
    {
        return $this->clients_coherence;
    }

    public function setClientsCoherence(?string $clients_coherence): self
    {
        $this->clients_coherence = $clients_coherence;

        return $this;
    }

    public function getClientsEmail(): ?string
    {
        return $this->clients_email;
    }

    public function setClientsEmail(?string $clients_email): self
    {
        $this->clients_email = $clients_email;

        return $this;
    }

    public function getClientsFamiliar(): ?string
    {
        return $this->clients_familiar;
    }

    public function setClientsFamiliar(?string $clients_familiar): self
    {
        $this->clients_familiar = $clients_familiar;

        return $this;
    }

    public function getClientsEGNEIK(): ?string
    {
        return $this->clients_EGN_EIK;
    }

    public function setClientsEGNEIK(string $clients_EGN_EIK): self
    {
        $this->clients_EGN_EIK = $clients_EGN_EIK;

        return $this;
    }

    public function getClientsPhone(): ?int
    {
        return $this->clients_phone;
    }

    public function setClientsPhone(int $clients_phone): self
    {
        $this->clients_phone = $clients_phone;

        return $this;
    }
}
