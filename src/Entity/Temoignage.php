<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemoignageRepository")
 */
class Temoignage
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
    private $NumEtude;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numSEPRA;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numPV;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numTemoignage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeTemoignage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateObservation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reaction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $environnement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $meteo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heureObservation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cadre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $distance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $localisationSpatiale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $directionObservation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $capPhenomene;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $trajectoirePhenomene;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $natureObservation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $caractereObservation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $forme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $couleur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vitesse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bruit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $effetEnvironnement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreObjet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Etude", inversedBy="temoignages")
     */
    private $etude;


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
    public function getNumEtude(): ?string
    {
        return $this->NumEtude;
    }

    /**
     * @param string $NumEtude
     *
     * @return Temoignage
     */
    public function setNumEtude(string $NumEtude): self
    {
        $this->NumEtude = $NumEtude;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumSEPRA(): ?int
    {
        return $this->numSEPRA;
    }

    /**
     * @param int|null $numSEPRA
     *
     * @return Temoignage
     */
    public function setNumSEPRA(?int $numSEPRA): self
    {
        $this->numSEPRA = $numSEPRA;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumPV(): ?int
    {
        return $this->numPV;
    }

    /**
     * @param int|null $numPV
     *
     * @return Temoignage
     */
    public function setNumPV(?int $numPV): self
    {
        $this->numPV = $numPV;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumTemoignage(): ?int
    {
        return $this->numTemoignage;
    }

    /**
     * @param int|null $numTemoignage
     *
     * @return Temoignage
     */
    public function setNumTemoignage(?int $numTemoignage): self
    {
        $this->numTemoignage = $numTemoignage;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTypeTemoignage(): ?string
    {
        return $this->typeTemoignage;
    }

    /**
     * @param null|string $typeTemoignage
     *
     * @return Temoignage
     */
    public function setTypeTemoignage(?string $typeTemoignage): self
    {
        $this->typeTemoignage = $typeTemoignage;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDateObservation(): ?string
    {
        return $this->dateObservation;
    }

    /**
     * @param null|string $dateObservation
     *
     * @return Temoignage
     */
    public function setDateObservation(?string $dateObservation): self
    {
        $this->dateObservation = $dateObservation;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAge(): ?string
    {
        return $this->age;
    }

    /**
     * @param null|string $age
     *
     * @return Temoignage
     */
    public function setAge(?string $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getProfession(): ?string
    {
        return $this->profession;
    }

    /**
     * @param null|string $profession
     *
     * @return Temoignage
     */
    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * @param null|string $sexe
     *
     * @return Temoignage
     */
    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReaction(): ?string
    {
        return $this->reaction;
    }

    /**
     * @param null|string $reaction
     *
     * @return Temoignage
     */
    public function setReaction(?string $reaction): self
    {
        $this->reaction = $reaction;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEnvironnement(): ?string
    {
        return $this->environnement;
    }

    /**
     * @param null|string $environnement
     *
     * @return Temoignage
     */
    public function setEnvironnement(?string $environnement): self
    {
        $this->environnement = $environnement;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getMeteo(): ?string
    {
        return $this->meteo;
    }

    /**
     * @param null|string $meteo
     *
     * @return Temoignage
     */
    public function setMeteo(?string $meteo): self
    {
        $this->meteo = $meteo;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHeureObservation(): ?string
    {
        return $this->heureObservation;
    }

    /**
     * @param null|string $heureObservation
     *
     * @return Temoignage
     */
    public function setHeureObservation(?string $heureObservation): self
    {
        $this->heureObservation = $heureObservation;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCadre(): ?string
    {
        return $this->cadre;
    }

    /**
     * @param null|string $cadre
     *
     * @return Temoignage
     */
    public function setCadre(?string $cadre): self
    {
        $this->cadre = $cadre;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDistance(): ?string
    {
        return $this->distance;
    }

    /**
     * @param null|string $distance
     *
     * @return Temoignage
     */
    public function setDistance(?string $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLocalisationSpatiale(): ?string
    {
        return $this->localisationSpatiale;
    }

    /**
     * @param null|string $localisationSpatiale
     *
     * @return Temoignage
     */
    public function setLocalisationSpatiale(?string $localisationSpatiale): self
    {
        $this->localisationSpatiale = $localisationSpatiale;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getDirectionObservation(): ?string
    {
        return $this->directionObservation;
    }

    /**
     * @param null|string $directionObservation
     *
     * @return Temoignage
     */
    public function setDirectionObservation(?string $directionObservation): self
    {
        $this->directionObservation = $directionObservation;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCapPhenomene(): ?string
    {
        return $this->capPhenomene;
    }

    /**
     * @param null|string $capPhenomene
     *
     * @return Temoignage
     */
    public function setCapPhenomene(?string $capPhenomene): self
    {
        $this->capPhenomene = $capPhenomene;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTrajectoirePhenomene(): ?string
    {
        return $this->trajectoirePhenomene;
    }

    /**
     * @param null|string $trajectoirePhenomene
     *
     * @return Temoignage
     */
    public function setTrajectoirePhenomene(?string $trajectoirePhenomene): self
    {
        $this->trajectoirePhenomene = $trajectoirePhenomene;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNatureObservation(): ?string
    {
        return $this->natureObservation;
    }

    /**
     * @param null|string $natureObservation
     *
     * @return Temoignage
     */
    public function setNatureObservation(?string $natureObservation): self
    {
        $this->natureObservation = $natureObservation;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCaractereObservation(): ?string
    {
        return $this->caractereObservation;
    }

    /**
     * @param null|string $caractereObservation
     *
     * @return Temoignage
     */
    public function setCaractereObservation(?string $caractereObservation): self
    {
        $this->caractereObservation = $caractereObservation;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getForme(): ?string
    {
        return $this->forme;
    }

    /**
     * @param null|string $forme
     *
     * @return Temoignage
     */
    public function setForme(?string $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    /**
     * @param null|string $couleur
     *
     * @return Temoignage
     */
    public function setCouleur(?string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getTaille(): ?string
    {
        return $this->taille;
    }

    /**
     * @param null|string $taille
     *
     * @return Temoignage
     */
    public function setTaille(?string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getVitesse(): ?string
    {
        return $this->vitesse;
    }

    /**
     * @param null|string $vitesse
     *
     * @return Temoignage
     */
    public function setVitesse(?string $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBruit(): ?string
    {
        return $this->bruit;
    }

    /**
     * @param null|string $bruit
     *
     * @return Temoignage
     */
    public function setBruit(?string $bruit): self
    {
        $this->bruit = $bruit;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEffetEnvironnement(): ?string
    {
        return $this->effetEnvironnement;
    }

    /**
     * @param null|string $effetEnvironnement
     *
     * @return Temoignage
     */
    public function setEffetEnvironnement(?string $effetEnvironnement): self
    {
        $this->effetEnvironnement = $effetEnvironnement;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNombreObjet(): ?int
    {
        return $this->nombreObjet;
    }

    /**
     * @param int|null $nombreObjet
     *
     * @return Temoignage
     */
    public function setNombreObjet(?int $nombreObjet): self
    {
        $this->nombreObjet = $nombreObjet;

        return $this;
    }

    public function getEtude(): ?Etude
    {
        return $this->etude;
    }

    public function setEtude(?Etude $etude): self
    {
        $this->etude = $etude;

        return $this;
    }
}
