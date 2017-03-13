<?php

namespace PageBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;

Class Home_T{
	/**
     * @var int
     */
	private $id;
	/**
     * @var string
     */
	private $descriptionTitle;
	/**
     * @var string
     */
	private $descriptionInfo;
	
	/**
     * @var string
     */
	private $bannerImage;

	/**
     * @var \ProductBundle\Entity\Product_I
     */
	private $product1;

	/**
     * @var \ProductBundle\Entity\Product_I
     */
	private $product2;

	/**
     * @var \ProductBundle\Entity\Product_I
     */
	private $product3;

	/**
     * @var \ProductBundle\Entity\Product_I
     */
	private $product4;

	/**
     * @var \ProductBundle\Entity\Product_I
     */
	private $product5;

	/**
     * @var \ProductBundle\Entity\Product_I
     */
	private $product6;

	/**
     * @var \FarmBundle\Entity\Farm_I
     */
	private $farm;

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
     * Set descriptionTitle
     *
     * @param string $descriptionTitle
     *
     * @return Home_T
     */
    public function setDescriptionTitle($descriptionTitle)
    {
        $this->descriptionTitle = $descriptionTitle;

        return $this;
    }

    /**
     * Get descriptionTitle
     *
     * @return string
     */
    public function getDescriptionTitle()
    {
        return $this->descriptionTitle;
    }

    /**
     * Set descriptionInfo
     *
     * @param string $descriptionInfo
     *
     * @return Home_T
     */
    public function setDescriptionInfo($descriptionInfo)
    {
        $this->descriptionInfo = $descriptionInfo;

        return $this;
    }

    /**
     * Get descriptionInfo
     *
     * @return string
     */
    public function getDescriptionInfo()
    {
        return $this->descriptionInfo;
    }

    /**
     * Set bannerImage
     *
     * @param string $bannerImage
     *
     * @return Home_T
     */
    public function setBannerImage($bannerImage)
    {
        $this->bannerImage = $bannerImage;

        return $this;
    }

    /**
     * Get bannerImage
     *
     * @return string
     */
    public function getBannerImage()
    {
        return $this->bannerImage;
    }

    /**
     * Set farm
     *
     * @param \FarmBundle\Entity\Farm_I $farm
     *
     * @return Home_T
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
     * Set product1
     *
     * @param \ProductBundle\Entity\Product_I $product1
     *
     * @return Home_T
     */
    public function setProduct1(\ProductBundle\Entity\Product_I $product1 = null)
    {
        $this->product1 = $product1;

        return $this;
    }

    /**
     * Get product1
     *
     * @return \ProductBundle\Entity\Product_I
     */
    public function getProduct1()
    {
        return $this->product1;
    }

    /**
     * Set product2
     *
     * @param \ProductBundle\Entity\Product_I $product2
     *
     * @return Home_T
     */
    public function setProduct2(\ProductBundle\Entity\Product_I $product2 = null)
    {
        $this->product2 = $product2;

        return $this;
    }

    /**
     * Get product2
     *
     * @return \ProductBundle\Entity\Product_I
     */
    public function getProduct2()
    {
        return $this->product2;
    }

    /**
     * Set product3
     *
     * @param \ProductBundle\Entity\Product_I $product3
     *
     * @return Home_T
     */
    public function setProduct3(\ProductBundle\Entity\Product_I $product3 = null)
    {
        $this->product3 = $product3;

        return $this;
    }

    /**
     * Get product3
     *
     * @return \ProductBundle\Entity\Product_I
     */
    public function getProduct3()
    {
        return $this->product3;
    }

    /**
     * Set product4
     *
     * @param \ProductBundle\Entity\Product_I $product4
     *
     * @return Home_T
     */
    public function setProduct4(\ProductBundle\Entity\Product_I $product4 = null)
    {
        $this->product4 = $product4;

        return $this;
    }

    /**
     * Get product4
     *
     * @return \ProductBundle\Entity\Product_I
     */
    public function getProduct4()
    {
        return $this->product4;
    }

    /**
     * Set product5
     *
     * @param \ProductBundle\Entity\Product_I $product5
     *
     * @return Home_T
     */
    public function setProduct5(\ProductBundle\Entity\Product_I $product5 = null)
    {
        $this->product5 = $product5;

        return $this;
    }

    /**
     * Get product5
     *
     * @return \ProductBundle\Entity\Product_I
     */
    public function getProduct5()
    {
        return $this->product5;
    }

    /**
     * Set product6
     *
     * @param \ProductBundle\Entity\Product_I $product6
     *
     * @return Home_T
     */
    public function setProduct6(\ProductBundle\Entity\Product_I $product6 = null)
    {
        $this->product6 = $product6;

        return $this;
    }

    /**
     * Get product6
     *
     * @return \ProductBundle\Entity\Product_I
     */
    public function getProduct6()
    {
        return $this->product6;
    }
}
