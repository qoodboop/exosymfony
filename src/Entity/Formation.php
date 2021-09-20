<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbreParticipant;

    /**
     * @ORM\OneToOne(targetEntity=Facture::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idFacture;

    /**
     * @ORM\ManyToOne(targetEntity=Formateur::class, inversedBy="formations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idFormateur;

    /**
     * @ORM\ManyToOne(targetEntity=Societe::class, inversedBy="formations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idSociete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getNbreParticipant(): ?int
    {
        return $this->nbreParticipant;
    }

    public function setNbreParticipant(int $nbreParticipant): self
    {
        $this->nbreParticipant = $nbreParticipant;

        return $this;
    }

    public function getIdFacture(): ?facture
    {
        return $this->idFacture;
    }

    public function setIdFacture(facture $idFacture): self
    {
        $this->idFacture = $idFacture;

        return $this;
    }

    public function getIdFormateur(): ?formateur
    {
        return $this->idFormateur;
    }

    public function setIdFormateur(?formateur $idFormateur): self
    {
        $this->idFormateur = $idFormateur;

        return $this;
    }

    public function getIdSociete(): ?Societe
    {
        return $this->idSociete;
    }

    public function setIdSociete(?Societe $idSociete): self
    {
        $this->idSociete = $idSociete;

        return $this;
    }
}
