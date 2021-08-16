<?php

namespace App\Entity;

use App\Repository\VehiclesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiclesRepository::class)
 */
class Vehicles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vehicles_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vehicles_document_number;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $vehicles_note;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehiclesNumber(): ?string
    {
        return $this->vehicles_number;
    }

    public function setVehiclesNumber(?string $vehicles_number): self
    {
        $this->vehicles_number = $vehicles_number;

        return $this;
    }

    public function getVehiclesDocumentNumber(): ?string
    {
        return $this->vehicles_document_number;
    }

    public function setVehiclesDocumentNumber(?string $vehicles_document_number): self
    {
        $this->vehicles_document_number = $vehicles_document_number;

        return $this;
    }

    public function getVehiclesNote(): ?string
    {
        return $this->vehicles_note;
    }

    public function setVehiclesNote(?string $vehicles_note): self
    {
        $this->vehicles_note = $vehicles_note;

        return $this;
    }
}
