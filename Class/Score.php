<?php

/**
 *
 */
class Score
{

    protected $vainqueur;

    protected $perdant;

    protected $null;

    const MATCH_NULL = 1;

    function __construct($vainqueur, $perdant, $null = 0)
    {
        if ($null === 0) {
            $this->setVainqueur($vainqueur);
            $this->setPerdant($perdant);
        }elseif ($null = self::MATCH_NULL) {
            $this->setNull($vainqueur, $perdant);
        }
    }

    /**
     * Get the value of Vainqueur
     *
     * @return mixed
     */
    public function getVainqueur()
    {
        return $this->vainqueur;
    }

    /**
     * Set the value of Vainqueur
     *
     * @param mixed vainqueur
     *
     * @return self
     */
    public function setVainqueur($vainqueur)
    {
        $this->vainqueur = $vainqueur;

        return $this;
    }

    /**
     * Get the value of Perdant
     *
     * @return mixed
     */
    public function getPerdant()
    {
        return $this->perdant;
    }

    /**
     * Set the value of Perdant
     *
     * @param mixed perdant
     *
     * @return self
     */
    public function setPerdant($perdant)
    {
        $this->perdant = $perdant;

        return $this;
    }


    /**
     * Get the value of Null
     *
     * @return mixed
     */
    public function getNull()
    {
        return $this->null;
    }

    /**
     * Set the value of Null
     *
     * @param mixed null
     *
     * @return self
     */
    public function setNull(...$null)
    {
        $this->null = $null;

        return $this;
    }

}
