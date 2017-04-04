<?php

namespace FarmBundle\Entity;

/**
 * Region
 */
class Region
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;
  
    /**
     * @var ArrayCollection
     */
    private $farms;


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
     * Set name
     *
     * @param string $name
     *
     * @return Region
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->farms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add farm
     *
     * @param \FarmBundle\Entity\Farm_I $farm
     *
     * @return Region
     */
    public function addFarm(\FarmBundle\Entity\Farm_I $farm)
    {
        $this->farms[] = $farm;

        return $this;
    }

    /**
     * Remove farm
     *
     * @param \FarmBundle\Entity\Farm_I $farm
     */
    public function removeFarm(\FarmBundle\Entity\Farm_I $farm)
    {
        $this->farms->removeElement($farm);
    }

    /**
     * Get farms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFarms()
    {
        return $this->farms;
    }
}
