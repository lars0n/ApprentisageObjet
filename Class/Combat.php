<?php

/**
 *
 */
class Combat
{

    protected $score;

    protected $date;

    function __construct(Equipe $equipeA, Equipe $equipeB)
    {
        $this->combat($equipeA, $equipeB);
        $this->setDate(new DateTime());
        $equipeA->addCombat($this);
        $equipeB->addCombat($this);
    }

    protected function combat($equipeA, $equipeB)
    {
        if($equipeA->getAtk() < $equipeB->getAtk())
        {
            $this->score = new Score($equipeB, $equipeA);
            $equipeB->gainExperience();
        }
        elseif($equipeA->getAtk() > $equipeB->getAtk())
        {
            $this->score = new Score($equipeA, $equipeB);
        }else {
            $this->score = new Score($equipeA, $equipeB, Score::MATCH_NULL);
        }
    }

    /**
     * Get the value of Score
     *
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of Score
     *
     * @param mixed score
     *
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get the value of Date
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of Date
     *
     * @param mixed date
     *
     * @return self
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

}
