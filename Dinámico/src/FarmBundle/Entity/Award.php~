<?php

namespace FarmBundle\Entity;

/**
 * Award
 */
class Award
{
    /**
     * @var int
     */
    private $id;
  
    /**
     * @var ArrayCollection
     */
    private $farm_awards;

    /**
     * @var string
     */
    private $description;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->farm_awards = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Award
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add farmAward
     *
     * @param \FarmBundle\Entity\Farm_Award $farmAward
     *
     * @return Award
     */
    public function addFarmAward(\FarmBundle\Entity\Farm_Award $farmAward)
    {
        $this->farm_awards[] = $farmAward;

        return $this;
    }

    /**
     * Remove farmAward
     *
     * @param \FarmBundle\Entity\Farm_Award $farmAward
     */
    public function removeFarmAward(\FarmBundle\Entity\Farm_Award $farmAward)
    {
        $this->farm_awards->removeElement($farmAward);
    }

    /**
     * Get farmAwards
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFarmAwards()
    {
        return $this->farm_awards;
    }
}
