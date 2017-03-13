<?php

namespace FarmBundle\Entity;

/**
 * Farm_I
 */
class Farm_I
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
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $elevation;

    /**
     * @var string
     */
    private $harvest;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;
  
    /**
     * @var ArrayCollection
     */
    private $products;
  
    /**
     * @var ArrayCollection
     */
    private $certifications;
   
    /**
     * @var ArrayCollection
     */
    private $farm_awards;
  
    /**
     * @var ArrayCollection
     */
    private $species;
  
    /**
     * @var ArrayCollection
     */
    private $cultivars;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->farm_awards = new \Doctrine\Common\Collections\ArrayCollection();
        $this->certifications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->species = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cultivars = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Farm_I
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
     * @return Farm_I
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
     * Set description
     *
     * @param string $description
     *
     * @return Farm_I
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
     * Set elevation
     *
     * @param string $elevation
     *
     * @return Farm_I
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * Get elevation
     *
     * @return string
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * Set harvest
     *
     * @param string $harvest
     *
     * @return Farm_I
     */
    public function setHarvest($harvest)
    {
        $this->harvest = $harvest;

        return $this;
    }

    /**
     * Get harvest
     *
     * @return string
     */
    public function getHarvest()
    {
        return $this->harvest;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Farm_I
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
     * @return Farm_I
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
     * Add product
     *
     * @param \ProductBundle\Entity\Product_I $product
     *
     * @return Farm_I
     */
    public function addProduct(\ProductBundle\Entity\Product_I $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \ProductBundle\Entity\Product_I $product
     */
    public function removeProduct(\ProductBundle\Entity\Product_I $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add farmAward
     *
     * @param \FarmBundle\Entity\Farm_Award $farmAward
     *
     * @return Farm_I
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

    /**
     * Add certification
     *
     * @param \FarmBundle\Entity\Certification $certification
     *
     * @return Farm_I
     */
    public function addCertification(\FarmBundle\Entity\Certification $certification)
    {
        $this->certifications[] = $certification;

        return $this;
    }

    /**
     * Remove certification
     *
     * @param \FarmBundle\Entity\Certification $certification
     */
    public function removeCertification(\FarmBundle\Entity\Certification $certification)
    {
        $this->certifications->removeElement($certification);
    }

    /**
     * Get certifications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCertifications()
    {
        return $this->certifications;
    }

    /**
     * Add species
     *
     * @param \FarmBundle\Entity\Species $species
     *
     * @return Farm_I
     */
    public function addSpecy(\FarmBundle\Entity\Species $species)
    {
        $this->species[] = $species;

        return $this;
    }

    /**
     * Remove species
     *
     * @param \FarmBundle\Entity\Species $species
     */
    public function removeSpecy(\FarmBundle\Entity\Species $species)
    {
        $this->species->removeElement($species);
    }

    /**
     * Get species
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Add cultivar
     *
     * @param \FarmBundle\Entity\Cultivar $cultivar
     *
     * @return Farm_I
     */
    public function addCultivar(\FarmBundle\Entity\Cultivar $cultivar)
    {
        $this->cultivars[] = $cultivar;

        return $this;
    }

    /**
     * Remove cultivar
     *
     * @param \FarmBundle\Entity\Cultivar $cultivar
     */
    public function removeCultivar(\FarmBundle\Entity\Cultivar $cultivar)
    {
        $this->cultivars->removeElement($cultivar);
    }

    /**
     * Get cultivars
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCultivars()
    {
        return $this->cultivars;
    }
}
