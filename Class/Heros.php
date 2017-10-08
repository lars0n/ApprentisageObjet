<?php

/**
 *
 */
class Heros
{
    /**
     * nom du Heros
     * @var string
     */
    protected $nom;

    /**
     * proprietaire du Heros
     * @var Joueur
     */
    protected $proprietaire;

    /**
     * experience du heros
     * @var int
     */
    protected $experience;

    /**
     * niveau du Heros
     * @var int
     */
    protected $niveau;

    /**
     * @var int
     */
    protected $atk;


    public function __construct(string $nom, int $atk = 12)
    {
        $this->setNom($nom);
        $this->setExperience(0);
        $this->setNiveau(0);
        $this->setAtk($atk);
    }

    /**
     * Get the value of nom du Heros
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom du Heros
     *
     * @param string nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of proprietaire du Heros
     *
     * @return Joueur
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire du Heros
     *
     * @param Joueur proprietaire
     *
     * @return self
     */
    public function setProprietaire(Joueur $proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get the value of experience du heros
     *
     * @return int
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set the value of experience du heros
     *
     * @param int experience
     *
     * @return self
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get the value of niveau du Heros
     *
     * @return int
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau du Heros
     *
     * @param int niveau
     *
     * @return self
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }


    /**
     * Get the value of Atk
     *
     * @return int
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * Set the value of Atk
     *
     * @param int atk
     *
     * @return self
     */
    public function setAtk($atk)
    {
        $this->atk = (int) $atk;

        return $this;
    }

}
