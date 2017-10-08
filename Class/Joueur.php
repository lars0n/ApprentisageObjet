<?php

class Joueur
{

    /**
     * [protected description]
     * @var [string]
     */
    protected $nom;

    /**
     * [protected description]
     * @var [array]
     */
    protected $heros;

    /**
     * [protected description]
     * @var [array]
     */
    protected $equipes = [];

    /**
     * [protected description]
     * @var [int]
     */
    protected $energie;

    function __construct(string $nom)
    {
        $this->setNom($nom);
        $this->setEnergie(100);
    }

    /**
     *
     * @return [string]
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     *
     * @param [string] nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     *
     * @return [array]
     */
    public function getHeros()
    {
        return $this->heros;
    }

    /**
     * @param [array] heros
     *
     * @return self
     */
    public function setHeros( $heros)
    {
        $this->heros = $heros;

        return $this;
    }

    public function getHero(string $nom)
    {
        return ($this->heros[$nom]) ?? trigger_error('Vous ne posseder pas ce héro :(', E_USER_WARNING);
    }

    /**
     * Ajout des heros pour le personnage en verifant si il ne dispose pas deja et si il est libre
     * @param array $heros tableaux de heros
     */
    public function addHeros(...$heros)
    {
        foreach ($heros as $hero) {
            if(
                $hero instanceof Heros &&
                !isset($this->heros[$hero->getNom()]) &&
                empty($hero->getProprietaire())
                )
            {
                $this->heros[$hero->getNom()] = $hero;
                $hero->setProprietaire($this);
            }else {
                trigger_error("Ce Heros n'a pas pu etre ajouté");
            }
        }
    }

    /**

     * @return [array]
     */
    public function getEquipes()
    {
        return $this->equipes;
    }

    /**

     * @param [array] equipes
     *
     * @return self
     */
    public function setEquipes( $equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }

    /**
     * crée une equipe puis le stock dans l'equipe du jouuer verifie egalement que l'equipe n'existe pas et que le heros n'est pas déja dans une equipes
     * @param  string $nom    [description]
     * @param  array  $equipe [description]
     */
    public function createEquipe(string $nom, array $equipe)
    {
        if(isset($this->equipes[$nom])){ trigger_error('Cette Equipe existe déja', E_USER_WARNING); }

        foreach ($equipe as $heros)
        {
            if (!$heros instanceof Heros) {
                trigger_error('Ce n\'est pas un Heros >(');
            }else
            {
                foreach ($this->equipes as $equipeloop)
                {
                    if(array_key_exists($heros->getNom(), $equipeloop->getHero()))
                    {
                        trigger_error($heros->getNom() ." est déja dans une equipe", E_USER_WARNING);
                    }
                }
            }
        }

        $this->equipes[$nom] = new Equipe($nom, $equipe);
    }

    public function getEquipe($name)
    {
        return ($this->equipes[$name]) ?? trigger_error ('cette equipe n\'existe pas !!!', E_USER_WARNING);
    }

    /**
     * @return [int]
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * @param [int] energie
     *
     * @return self
     */
    public function setEnergie( $energie)
    {
        $this->energie = $energie;

        return $this;
    }

}
