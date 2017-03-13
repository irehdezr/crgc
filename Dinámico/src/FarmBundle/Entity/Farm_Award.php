<?php

namespace FarmBundle\Entity;

/**
 * Farm_Award
 */
class Farm_Award
{
    /**
     * @var int
     */
    private $farm;
    /**
     * @var int
     */
    private $award;

    /**
     * @var string
     */
    private $place;

    /**
     * @var int
     */
    private $year;

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Farm_Award
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Farm_Award
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set farm
     *
     * @param \FarmBundle\Entity\Farm_I $farm
     *
     * @return Farm_Award
     */
    public function setFarm(\FarmBundle\Entity\Farm_I $farm = null)
    {
        $this->farm = $farm;

        return $this;
    }

    /**
     * Get farm
     *
     * @return \FarmBundle\Entity\Farm_I
     */
    public function getFarm()
    {
        return $this->farm;
    }

    /**
     * Set award
     *
     * @param \FarmBundle\Entity\Award $award
     *
     * @return Farm_Award
     */
    public function setAward(\FarmBundle\Entity\Award $award = null)
    {
        $this->award = $award;

        return $this;
    }

    /**
     * Get award
     *
     * @return \FarmBundle\Entity\Award
     */
    public function getAward()
    {
        return $this->award;
    }
}
