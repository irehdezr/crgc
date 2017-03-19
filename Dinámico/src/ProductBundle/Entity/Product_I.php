<?php

namespace ProductBundle\Entity;

/**
 * Product_I
 */
class Product_I
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $farm;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $rank;

    /**
     * @var int
     */
    private $reviews;

    /**
     * @var string
     */
    private $description;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $presentations;

    /**
     * @var int
     */
    private $defaultPresentation;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->presentations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Product_I
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
     * Set image
     *
     * @param string $image
     *
     * @return Product_I
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return Product_I
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set reviews
     *
     * @param integer $reviews
     *
     * @return Product_I
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * Get reviews
     *
     * @return integer
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product_I
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
     * Add presentation
     *
     * @param \ProductBundle\Entity\Presentation $presentation
     *
     * @return Product_I
     */
    public function addPresentation(\ProductBundle\Entity\Presentation $presentation)
    {
        $this->presentations[] = $presentation;

        return $this;
    }

    /**
     * Remove presentation
     *
     * @param \ProductBundle\Entity\Presentation $presentation
     */
    public function removePresentation(\ProductBundle\Entity\Presentation $presentation)
    {
        $this->presentations->removeElement($presentation);
    }

    /**
     * Get presentations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPresentations()
    {
        return $this->presentations;
    }

    /**
     * Set farm
     *
     * @param \FarmBundle\Entity\Farm_I $farm
     *
     * @return Product_I
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
}
