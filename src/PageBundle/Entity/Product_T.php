<?php

namespace PageBundle\Entity;

/**
 * Product_T
 */
class Product_T{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pageTitle;

    /**
     * @var string
     */
    private $farmTitle;

    /**
     * @var string
     */
    private $orderTitle;

    /**
     * @var string
     */
    private $reviewsTitle;

    /**
     * @var string
     */
    private $informationTitle;

    /**
     * @var string
     */
    private $roastTitle;

    /**
     * @var string
     */
    private $weightTitle;

    /**
     * @var string
     */
    private $grindTitle;

    /**
     * @var string
     */
    private $cupScoringTitle;

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
    private $gradeTitle;

    /**
     * @var string
     */
    private $processingTitle;

    /**
     * @var string
     */
    private $flavorNotesTitle;


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
     * @return Product_T
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
     * Set farmTitle
     *
     * @param string $farmTitle
     *
     * @return Product_T
     */
    public function setFarmTitle($farmTitle)
    {
        $this->farmTitle = $farmTitle;

        return $this;
    }

    /**
     * Get farmTitle
     *
     * @return string
     */
    public function getFarmTitle()
    {
        return $this->farmTitle;
    }

    /**
     * Set orderTitle
     *
     * @param string $orderTitle
     *
     * @return Product_T
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
     * @return Product_T
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
     * Set informationTitle
     *
     * @param string $informationTitle
     *
     * @return Product_T
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
     * Set roastTitle
     *
     * @param string $roastTitle
     *
     * @return Product_T
     */
    public function setRoastTitle($roastTitle)
    {
        $this->roastTitle = $roastTitle;

        return $this;
    }

    /**
     * Get roastTitle
     *
     * @return string
     */
    public function getRoastTitle()
    {
        return $this->roastTitle;
    }

    /**
     * Set weightTitle
     *
     * @param string $weightTitle
     *
     * @return Product_T
     */
    public function setWeightTitle($weightTitle)
    {
        $this->weightTitle = $weightTitle;

        return $this;
    }

    /**
     * Get weightTitle
     *
     * @return string
     */
    public function getWeightTitle()
    {
        return $this->weightTitle;
    }

    /**
     * Set grindTitle
     *
     * @param string $grindTitle
     *
     * @return Product_T
     */
    public function setGrindTitle($grindTitle)
    {
        $this->grindTitle = $grindTitle;

        return $this;
    }

    /**
     * Get grindTitle
     *
     * @return string
     */
    public function getGrindTitle()
    {
        return $this->grindTitle;
    }

    /**
     * Set cupScoringTitle
     *
     * @param string $cupScoringTitle
     *
     * @return Product_T
     */
    public function setCupScoringTitle($cupScoringTitle)
    {
        $this->cupScoringTitle = $cupScoringTitle;

        return $this;
    }

    /**
     * Get cupScoringTitle
     *
     * @return string
     */
    public function getCupScoringTitle()
    {
        return $this->cupScoringTitle;
    }

    /**
     * Set speciesTitle
     *
     * @param string $speciesTitle
     *
     * @return Product_T
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
     * @return Product_T
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
     * @return Product_T
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
     * Set gradeTitle
     *
     * @param string $gradeTitle
     *
     * @return Product_T
     */
    public function setGradeTitle($gradeTitle)
    {
        $this->gradeTitle = $gradeTitle;

        return $this;
    }

    /**
     * Get gradeTitle
     *
     * @return string
     */
    public function getGradeTitle()
    {
        return $this->gradeTitle;
    }

    /**
     * Set processingTitle
     *
     * @param string $processingTitle
     *
     * @return Product_T
     */
    public function setProcessingTitle($processingTitle)
    {
        $this->processingTitle = $processingTitle;

        return $this;
    }

    /**
     * Get processingTitle
     *
     * @return string
     */
    public function getProcessingTitle()
    {
        return $this->processingTitle;
    }

    /**
     * Set flavorNotesTitle
     *
     * @param string $flavorNotesTitle
     *
     * @return Product_T
     */
    public function setFlavorNotesTitle($flavorNotesTitle)
    {
        $this->flavorNotesTitle = $flavorNotesTitle;

        return $this;
    }

    /**
     * Get flavorNotesTitle
     *
     * @return string
     */
    public function getFlavorNotesTitle()
    {
        return $this->flavorNotesTitle;
    }
}
