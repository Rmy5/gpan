<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtudeRepository")
 */
class Etude
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomDepartement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $region;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $resumeCourt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $resumeLong;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeDonnee;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $categoriePAN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateModif;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Temoignage", mappedBy="etude")
     */
    private $temoignages;


    /**
     * Etude constructor.
     */
    public function __construct()
    {
        $this->temoignages = new ArrayCollection();
    }


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getNum(): ?string
    {
        return $this->num;
    }

    /**
     * @param string $num
     *
     * @return Etude
     */
    public function setNum(string $num): self
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     *
     * @return Etude
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @param float|null $latitude
     *
     * @return Etude
     */
    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @param float|null $longitude
     *
     * @return Etude
     */
    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param null|string $date
     *
     * @return Etude
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDepartement(): ?int
    {
        return $this->departement;
    }

    /**
     * @param int|null $departement
     *
     * @return Etude
     */
    public function setDepartement(?int $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNomDepartement(): ?string
    {
        return $this->nomDepartement;
    }

    /**
     * @param null|string $nomDepartement
     *
     * @return Etude
     */
    public function setNomDepartement(?string $nomDepartement): self
    {
        $this->nomDepartement = $nomDepartement;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param null|string $region
     *
     * @return Etude
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getResumeCourt(): ?string
    {
        return $this->resumeCourt;
    }

    /**
     * @param null|string $resumeCourt
     *
     * @return Etude
     */
    public function setResumeCourt(?string $resumeCourt): self
    {
        $this->resumeCourt = $resumeCourt;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getResumeLong(): ?string
    {
        return $this->resumeLong;
    }

    /**
     * @param null|string $resumeLong
     *
     * @return Etude
     */
    public function setResumeLong(?string $resumeLong): self
    {
        $this->resumeLong = $resumeLong;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTypeDonnee(): ?string
    {
        return $this->typeDonnee;
    }

    /**
     * @param null|string $typeDonnee
     *
     * @return Etude
     */
    public function setTypeDonnee(?string $typeDonnee): self
    {
        $this->typeDonnee = $typeDonnee;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCategoriePAN(): ?string
    {
        return $this->categoriePAN;
    }

    /**
     * @param null|string $categoriePAN
     *
     * @return Etude
     */
    public function setCategoriePAN(?string $categoriePAN): self
    {
        $this->categoriePAN = $categoriePAN;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDateModif(): ?string
    {
        return $this->dateModif;
    }

    /**
     * @param null|string $dateModif
     *
     * @return Etude
     */
    public function setDateModif(?string $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * @return Collection|Temoignage[]
     */
    public function getTemoignages(): Collection
    {
        return $this->temoignages;
    }

    /**
     * @param Temoignage $temoignage
     *
     * @return Etude
     */
    public function addTemoignage(Temoignage $temoignage): self
    {
        if (!$this->temoignages->contains($temoignage)) {
            $this->temoignages[] = $temoignage;
            $temoignage->setEtude($this);
        }

        return $this;
    }

    /**
     * @param Temoignage $temoignage
     *
     * @return Etude
     */
    public function removeTemoignage(Temoignage $temoignage): self
    {
        if ($this->temoignages->contains($temoignage)) {
            $this->temoignages->removeElement($temoignage);
            // set the owning side to null (unless already changed)
            if ($temoignage->getEtude() === $this) {
                $temoignage->setEtude(null);
            }
        }

        return $this;
    }
}
