<?php

namespace App\Entity;

use App\Repository\PretRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PretRepository::class)]
class Pret
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'prets_')]
    private ?Materiel $materiel_emprunte = null;

    #[ORM\ManyToOne(inversedBy: 'pret_')]
    private ?User $user_emprunteur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_pret = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_rendu_prevue = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_rendu_user = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMaterielEmprunte(): ?Materiel
    {
        return $this->materiel_emprunte;
    }

    public function setMaterielEmprunte(?Materiel $materiel_emprunte): static
    {
        $this->materiel_emprunte = $materiel_emprunte;

        return $this;
    }

    public function getUserEmprunteur(): ?User
    {
        return $this->user_emprunteur;
    }

    public function setUserEmprunteur(?User $user_emprunteur): static
    {
        $this->user_emprunteur = $user_emprunteur;

        return $this;
    }

    public function getDatePret(): ?\DateTimeInterface
    {
        return $this->date_pret;
    }

    public function setDatePret(\DateTimeInterface $date_pret): static
    {
        $this->date_pret = $date_pret;

        return $this;
    }

    public function getDateRenduPrevue(): ?\DateTimeInterface
    {
        return $this->date_rendu_prevue;
    }

    public function setDateRenduPrevue(\DateTimeInterface $date_rendu_prevue): static
    {
        $this->date_rendu_prevue = $date_rendu_prevue;

        return $this;
    }

    public function getDateRenduUser(): ?\DateTimeInterface
    {
        return $this->date_rendu_user;
    }

    public function setDateRenduUser(?\DateTimeInterface $date_rendu_user): static
    {
        $this->date_rendu_user = $date_rendu_user;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
