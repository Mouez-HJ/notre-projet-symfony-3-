<?php

namespace FOND\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="FOND\AnnonceBundle\Repository\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="nomentreprise", type="string", length=255)
     */
    private $nomentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="discriptif", type="string", length=255)
     */
    private $discriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set nomentreprise
     *
     * @param string $nomentreprise
     *
     * @return Annonce
     */
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    /**
     * Get nomentreprise
     *
     * @return string
     */
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Annonce
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set discriptif
     *
     * @param string $discriptif
     *
     * @return Annonce
     */
    public function setDiscriptif($discriptif)
    {
        $this->discriptif = $discriptif;

        return $this;
    }

    /**
     * Get discriptif
     *
     * @return string
     */
    public function getDiscriptif()
    {
        return $this->discriptif;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }
}

