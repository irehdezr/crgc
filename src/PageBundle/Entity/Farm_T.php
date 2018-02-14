<?php

namespace PageBundle\Entity;

/**
 * Farm_T
 */
class Farm_T
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pageTitle;

    /**
     * @var string
     */
    private $descriptionTitle;
    /**
     * @var string
     */
    private $storyBtnTitle;

    /**
     * @var string
     */
    private $informationTitle;

    /**
     * @var string
     */
    private $awardsTitle;

    /**
     * @var string
     */
    private $locationTitle;

    /**
     * @var string
     */
    private $productsTitle;

    /**
     * @var string
     */
    private $regionTitle;

    /**
     * @var string
     */
    private $elevationTitle;

    /**
     * @var string
     */
    private $harvestTitle;

    /**
     * @var string
     */
    private $speciesTitle;

    /**
     * @var string
     */
    private $speciesInfo;

    /**
     * @var string
     */
    private $cultivarTitle;

    /**
     * @var string
     */
    private $certificationsTitle;
    /**
     * @var string
     */
    private $orderTitle;
    /**
     * @var string
     */
    private $moreInfoTitle;

    /**
     * @var string
     */
    private $reviewsTitle;

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
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return Farm_T
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    /**
     * Set descriptionTitle
     *
     * @param string $descriptionTitle
     *
     * @return Farm_T
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
     * Set storyBtnTitle
     *
     * @param string $storyBtnTitle
     *
     * @return Farm_T
     */
    public function setStoryBtnTitle($storyBtnTitle)
    {
        $this->storyBtnTitle = $storyBtnTitle;

        return $this;
    }

    /**
     * Get storyBtnTitle
     *
     * @return string
     */
    public function getStoryBtnTitle()
    {
        return $this->storyBtnTitle;
    }

    /**
     * Set informationTitle
     *
     * @param string $informationTitle
     *
     * @return Farm_T
     */
    public function setInformationTitle($informationTitle)
    {
        $this->informationTitle = $informationTitle;

        return $this;
    }

    /**
     * Get informationTitle
     *
     * @return string
     */
    public function getInformationTitle()
    {
        return $this->informationTitle;
    }

    /**
     * Set awardsTitle
     *
     * @param string $awardsTitle
     *
     * @return Farm_T
     */
    public function setAwardsTitle($awardsTitle)
    {
        $this->awardsTitle = $awardsTitle;

        return $this;
    }

    /**
     * Get awardsTitle
     *
     * @return string
     */
    public function getAwardsTitle()
    {
        return $this->awardsTitle;
    }

    /**
     * Set locationTitle
     *
     * @param string $locationTitle
     *
     * @return Farm_T
     */
    public function setLocationTitle($locationTitle)
    {
        $this->locationTitle = $locationTitle;

        return $this;
    }

    /**
     * Get locationTitle
     *
     * @return string
     */
    public function getLocationTitle()
    {
        return $this->locationTitle;
    }

    /**
     * Set productsTitle
     *
     * @param string $productsTitle
     *
     * @return Farm_T
     */
    public function setProductsTitle($productsTitle)
    {
        $this->productsTitle = $productsTitle;

        return $this;
    }

    /**
     * Get productsTitle
     *
     * @return string
     */
    public function getProductsTitle()
    {
        return $this->productsTitle;
    }

    /**
     * Set regionTitle
     *
     * @param string $regionTitle
     *
     * @return Farm_T
     */
    public function setRegionTitle($regionTitle)
    {
        $this->regionTitle = $regionTitle;

        return $this;
    }

    /**
     * Get regionTitle
     *
     * @return string
     */
    public function getRegionTitle()
    {
        return $this->regionTitle;
    }

    /**
     * Set elevationTitle
     *
     * @param string $elevationTitle
     *
     * @return Farm_T
     */
    public function setElevationTitle($elevationTitle)
    {
        $this->elevationTitle = $elevationTitle;

        return $this;
    }

    /**
     * Get elevationTitle
     *
     * @return string
     */
    public function getElevationTitle()
    {
        return $this->elevationTitle;
    }

    /**
     * Set harvestTitle
     *
     * @param string $harvestTitle
     *
     * @return Farm_T
     */
    public function setHarvestTitle($harvestTitle)
    {
        $this->harvestTitle = $harvestTitle;

        return $this;
    }

    /**
     * Get harvestTitle
     *
     * @return string
     */
    public function getHarvestTitle()
    {
        return $this->harvestTitle;
    }

    /**
     * Set speciesTitle
     *
     * @param string $speciesTitle
     *
     * @return Farm_T
     */
    public function setSpeciesTitle($speciesTitle)
    {
        $this->speciesTitle = $speciesTitle;

        return $this;
    }

    /**
     * Get speciesTitle
     *
     * @return string
     */
    public function getSpeciesTitle()
    {
        return $this->speciesTitle;
    }

    /**
     * Set speciesInfo
     *
     * @param string $speciesInfo
     *
     * @return Farm_T
     */
    public function setSpeciesInfo($speciesInfo)
    {
        $this->speciesInfo = $speciesInfo;

        return $this;
    }

    /**
     * Get speciesInfo
     *
     * @return string
     */
    public function getSpeciesInfo()
    {
        return $this->speciesInfo;
    }

    /**
     * Set cultivarTitle
     *
     * @param string $cultivarTitle
     *
     * @return Farm_T
     */
    public function setCultivarTitle($cultivarTitle)
    {
        $this->cultivarTitle = $cultivarTitle;

        return $this;
    }

    /**
     * Get cultivarTitle
     *
     * @return string
     */
    public function getCultivarTitle()
    {
        return $this->cultivarTitle;
    }

    /**
     * Set certificationsTitle
     *
     * @param string $certificationsTitle
     *
     * @return Farm_T
     */
    public function setCertificationsTitle($certificationsTitle)
    {
        $this->certificationsTitle = $certificationsTitle;

        return $this;
    }

    /**
     * Get certificationsTitle
     *
     * @return string
     */
    public function getCertificationsTitle()
    {
        return $this->certificationsTitle;
    }

    /**
     * Set orderTitle
     *
     * @param string $orderTitle
     *
     * @return Farm_T
     */
    public function setOrderTitle($orderTitle)
    {
        $this->orderTitle = $orderTitle;

        return $this;
    }

    /**
     * Get orderTitle
     *
     * @return string
     */
    public function getOrderTitle()
    {
        return $this->orderTitle;
    }

    /**
     * Set reviewsTitle
     *
     * @param string $reviewsTitle
     *
     * @return Farm_T
     */
    public function setReviewsTitle($reviewsTitle)
    {
        $this->reviewsTitle = $reviewsTitle;

        return $this;
    }

    /**
     * Get reviewsTitle
     *
     * @return string
     */
    public function getReviewsTitle()
    {
        return $this->reviewsTitle;
    }

    /**
     * Set moreInfoTitle
     *
     * @param string $moreInfoTitle
     *
     * @return Farm_T
     */
    public function setMoreInfoTitle($moreInfoTitle)
    {
        $this->moreInfoTitle = $moreInfoTitle;

        return $this;
    }

    /**
     * Get moreInfoTitle
     *
     * @return string
     */
    public function getMoreInfoTitle()
    {
        return $this->moreInfoTitle;
    }
    /**
     * @var string
     */
    private $contactBtnTitle;


    /**
     * Set contactBtnTitle
     *
     * @param string $contactBtnTitle
     *
     * @return Farm_T
     */
    public function setContactBtnTitle($contactBtnTitle)
    {
        $this->contactBtnTitle = $contactBtnTitle;
    
        return $this;
    }

    /**
     * Get contactBtnTitle
     *
     * @return string
     */
    public function getContactBtnTitle()
    {
        return $this->contactBtnTitle;
    }
}
