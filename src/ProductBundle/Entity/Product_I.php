<?php

namespace ProductBundle\Entity;

/**
 * Product_I
 */
class Product_I{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $rank;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $presentations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reviews;

    /**
     * @var \FarmBundle\Entity\Farm_I
     */
    private $farm;

    /**
     * @var \FarmBundle\Entity\Cultivar
     */
    private $cultivar;

    /**
     * @var \ProductBundle\Entity\Grade
     */
    private $grade;

    /**
     * @var \ProductBundle\Entity\Processing
     */
    private $processing;

    /**
     * @var \ProductBundle\Entity\Flavor
     */
    private $flavor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->presentations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add review
     *
     * @param \ProductBundle\Entity\Review $review
     *
     * @return Product_I
     */
    public function addReview(\ProductBundle\Entity\Review $review)
    {
        $this->reviews[] = $review;
    
        return $this;
    }

    /**
     * Remove review
     *
     * @param \ProductBundle\Entity\Review $review
     */
    public function removeReview(\ProductBundle\Entity\Review $review)
    {
        $this->reviews->removeElement($review);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews()
    {
        return $this->reviews;
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

    /**
     * Set cultivar
     *
     * @param \FarmBundle\Entity\Cultivar $cultivar
     *
     * @return Product_I
     */
    public function setCultivar(\FarmBundle\Entity\Cultivar $cultivar = null)
    {
        $this->cultivar = $cultivar;
    
        return $this;
    }

    /**
     * Get cultivar
     *
     * @return \FarmBundle\Entity\Cultivar
     */
    public function getCultivar()
    {
        return $this->cultivar;
    }

    /**
     * Set grade
     *
     * @param \ProductBundle\Entity\Grade $grade
     *
     * @return Product_I
     */
    public function setGrade(\ProductBundle\Entity\Grade $grade = null)
    {
        $this->grade = $grade;
    
        return $this;
    }

    /**
     * Get grade
     *
     * @return \ProductBundle\Entity\Grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set processing
     *
     * @param \ProductBundle\Entity\Processing $processing
     *
     * @return Product_I
     */
    public function setProcessing(\ProductBundle\Entity\Processing $processing = null)
    {
        $this->processing = $processing;
    
        return $this;
    }

    /**
     * Get processing
     *
     * @return \ProductBundle\Entity\Processing
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * Set flavor
     *
     * @param \ProductBundle\Entity\Flavor $flavor
     *
     * @return Product_I
     */
    public function setFlavor(\ProductBundle\Entity\Flavor $flavor = null)
    {
        $this->flavor = $flavor;
    
        return $this;
    }

    /**
     * Get flavor
     *
     * @return \ProductBundle\Entity\Flavor
     */
    public function getFlavor()
    {
        return $this->flavor;
    }
}
