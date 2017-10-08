<?php

/**
 *
 */
class Equipe
{
    /**
     * Nom du groupe
     * @var string
     */
    protected $nom;

    /**
     * liste heros
     * @var array[heros]
     */
    protected $heros;

    function __construct(string $nom, array $Equipe)
    {
        $this->setNom($nom);
        $this->setEquipe($Equipe);
    }

    /**
     * Get the value of Nom du groupe
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom du groupe
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
     * Get the value of liste heros
     *
     * @return array[heros]
     */
    public function getHeros()
    {
        return $this->heros;
    }

    /**
     * Set the value of liste heros
     *
     * @param array[heros] heros
     *
     * @return self
     */
    public function setHeros($heros)
    {
        $this->heros = $heros;

        return $this;
    }

    private function setEquipe($equipes)
    {
        // TODO: verifier dans le tableau si ce sont tous des heros de la classe heros
        if(count($equipes) !== 4){ trigger_error('Une équipe doit etre compsé de 4 Heros', E_USER_WARNING); }

        foreach ($equipes as $heros) {
            $this->heros[$heros->getNom()] = $heros;
        }
    }

    public function getAtk()
    {
        $atk = 0;
        foreach ($this->getHeros() as $heros) {
            $atk += $heros->getAtk();
        }

        return $atk;
    }

}
