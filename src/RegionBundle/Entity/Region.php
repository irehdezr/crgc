<?php

namespace RegionBundle\Entity;

/**
 * Region
 */
class Region{
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
    private $image1;

    /**
     * @var string
     */
    private $image_description1;

    /**
     * @var string
     */
    private $image2;

    /**
     * @var string
     */
    private $image_description2;

    /**
     * @var string
     */
    private $image3;

    /**
     * @var string
     */
    private $image_description3;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $information;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var integer
     */
    private $zoom;


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
     * Set image1
     *
     * @param string $image1
     *
     * @return Region
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
    
        return $this;
    }

    /**
     * Get image1
     *
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set imageDescription1
     *
     * @param string $imageDescription1
     *
     * @return Region
     */
    public function setImageDescription1($imageDescription1)
    {
        $this->image_description1 = $imageDescription1;
    
        return $this;
    }

    /**
     * Get imageDescription1
     *
     * @return string
     */
    public function getImageDescription1()
    {
        return $this->image_description1;
    }

    /**
     * Set image2
     *
     * @param string $image2
     *
     * @return Region
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    
        return $this;
    }

    /**
     * Get image2
     *
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set imageDescription2
     *
     * @param string $imageDescription2
     *
     * @return Region
     */
    public function setImageDescription2($imageDescription2)
    {
        $this->image_description2 = $imageDescription2;
    
        return $this;
    }

    /**
     * Get imageDescription2
     *
     * @return string
     */
    public function getImageDescription2()
    {
        return $this->image_description2;
    }

    /**
     * Set image3
     *
     * @param string $image3
     *
     * @return Region
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;
    
        return $this;
    }

    /**
     * Get image3
     *
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set imageDescription3
     *
     * @param string $imageDescription3
     *
     * @return Region
     */
    public function setImageDescription3($imageDescription3)
    {
        $this->image_description3 = $imageDescription3;
    
        return $this;
    }

    /**
     * Get imageDescription3
     *
     * @return string
     */
    public function getImageDescription3()
    {
        return $this->image_description3;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Region
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
     * Set information
     *
     * @param string $information
     *
     * @return Region
     */
    public function setInformation($information)
    {
        $this->information = $information;
    
        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Region
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Region
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set zoom
     *
     * @param integer $zoom
     *
     * @return Region
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;
    
        return $this;
    }

    /**
     * Get zoom
     *
     * @return integer
     */
    public function getZoom()
    {
        return $this->zoom;
    }
    /**
     * @var string
     */
    private $organoleptic_charactersitics;


    /**
     * Set organolepticCharactersitics
     *
     * @param string $organolepticCharactersitics
     *
     * @return Region
     */
    public function setOrganolepticCharactersitics($organolepticCharactersitics)
    {
        $this->organoleptic_charactersitics = $organolepticCharactersitics;
    
        return $this;
    }

    /**
     * Get organolepticCharactersitics
     *
     * @return string
     */
    public function getOrganolepticCharactersitics()
    {
        return $this->organoleptic_charactersitics;
    }
    /**
     * @var string
     */
    private $organoleptic_characteristics;


    /**
     * Set organolepticCharacteristics
     *
     * @param string $organolepticCharacteristics
     *
     * @return Region
     */
    public function setOrganolepticCharacteristics($organolepticCharacteristics)
    {
        $this->organoleptic_characteristics = $organolepticCharacteristics;
    
        return $this;
    }

    /**
     * Get organolepticCharacteristics
     *
     * @return string
     */
    public function getOrganolepticCharacteristics()
    {
        return $this->organoleptic_characteristics;
    }
}
