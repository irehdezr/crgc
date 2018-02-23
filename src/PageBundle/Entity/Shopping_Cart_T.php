<?php

namespace PageBundle\Entity;

/**
 * Shopping_Cart_T
 */
class Shopping_Cart_T{
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
    private $cartTitle;

    /**
     * @var string
     */
    private $productTitle;

    /**
     * @var string
     */
    private $farmTitle;

    /**
     * @var string
     */
    private $descriptionTitle;

    /**
     * @var string
     */
    private $weightTitle;

    /**
     * @var string
     */
    private $roastTitle;

    /**
     * @var string
     */
    private $grindTitle;

    /**
     * @var string
     */
    private $unitPriceTitle;

    /**
     * @var string
     */
    private $quantityTitle;

    /**
     * @var string
     */
    private $subTotalTitle;

    /**
     * @var string
     */
    private $totalTitle;

    /**
     * @var string
     */
    private $actionTitle;

    /**
     * @var string
     */
    private $removeButton;

    /**
     * @var string
     */
    private $shippingTitle;

    /**
     * @var string
     */
    private $continueButton;

    /**
     * @var string
     */
    private $checkOutButton;

    /**
     * @var string
     */
    private $emptyCartTitle;


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
     * @return Shopping_Cart_T
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
     * Set cartTitle
     *
     * @param string $cartTitle
     *
     * @return Shopping_Cart_T
     */
    public function setCartTitle($cartTitle)
    {
        $this->cartTitle = $cartTitle;
    
        return $this;
    }

    /**
     * Get cartTitle
     *
     * @return string
     */
    public function getCartTitle()
    {
        return $this->cartTitle;
    }

    /**
     * Set productTitle
     *
     * @param string $productTitle
     *
     * @return Shopping_Cart_T
     */
    public function setProductTitle($productTitle)
    {
        $this->productTitle = $productTitle;
    
        return $this;
    }

    /**
     * Get productTitle
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->productTitle;
    }

    /**
     * Set farmTitle
     *
     * @param string $farmTitle
     *
     * @return Shopping_Cart_T
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
     * Set descriptionTitle
     *
     * @param string $descriptionTitle
     *
     * @return Shopping_Cart_T
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
     * Set weightTitle
     *
     * @param string $weightTitle
     *
     * @return Shopping_Cart_T
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
     * Set roastTitle
     *
     * @param string $roastTitle
     *
     * @return Shopping_Cart_T
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
     * Set grindTitle
     *
     * @param string $grindTitle
     *
     * @return Shopping_Cart_T
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
     * Set unitPriceTitle
     *
     * @param string $unitPriceTitle
     *
     * @return Shopping_Cart_T
     */
    public function setUnitPriceTitle($unitPriceTitle)
    {
        $this->unitPriceTitle = $unitPriceTitle;
    
        return $this;
    }

    /**
     * Get unitPriceTitle
     *
     * @return string
     */
    public function getUnitPriceTitle()
    {
        return $this->unitPriceTitle;
    }

    /**
     * Set quantityTitle
     *
     * @param string $quantityTitle
     *
     * @return Shopping_Cart_T
     */
    public function setQuantityTitle($quantityTitle)
    {
        $this->quantityTitle = $quantityTitle;
    
        return $this;
    }

    /**
     * Get quantityTitle
     *
     * @return string
     */
    public function getQuantityTitle()
    {
        return $this->quantityTitle;
    }

    /**
     * Set subTotalTitle
     *
     * @param string $subTotalTitle
     *
     * @return Shopping_Cart_T
     */
    public function setSubTotalTitle($subTotalTitle)
    {
        $this->subTotalTitle = $subTotalTitle;
    
        return $this;
    }

    /**
     * Get subTotalTitle
     *
     * @return string
     */
    public function getSubTotalTitle()
    {
        return $this->subTotalTitle;
    }

    /**
     * Set totalTitle
     *
     * @param string $totalTitle
     *
     * @return Shopping_Cart_T
     */
    public function setTotalTitle($totalTitle)
    {
        $this->totalTitle = $totalTitle;
    
        return $this;
    }

    /**
     * Get totalTitle
     *
     * @return string
     */
    public function getTotalTitle()
    {
        return $this->totalTitle;
    }

    /**
     * Set actionTitle
     *
     * @param string $actionTitle
     *
     * @return Shopping_Cart_T
     */
    public function setActionTitle($actionTitle)
    {
        $this->actionTitle = $actionTitle;
    
        return $this;
    }

    /**
     * Get actionTitle
     *
     * @return string
     */
    public function getActionTitle()
    {
        return $this->actionTitle;
    }

    /**
     * Set removeButton
     *
     * @param string $removeButton
     *
     * @return Shopping_Cart_T
     */
    public function setRemoveButton($removeButton)
    {
        $this->removeButton = $removeButton;
    
        return $this;
    }

    /**
     * Get removeButton
     *
     * @return string
     */
    public function getRemoveButton()
    {
        return $this->removeButton;
    }

    /**
     * Set shippingTitle
     *
     * @param string $shippingTitle
     *
     * @return Shopping_Cart_T
     */
    public function setShippingTitle($shippingTitle)
    {
        $this->shippingTitle = $shippingTitle;
    
        return $this;
    }

    /**
     * Get shippingTitle
     *
     * @return string
     */
    public function getShippingTitle()
    {
        return $this->shippingTitle;
    }

    /**
     * Set continueButton
     *
     * @param string $continueButton
     *
     * @return Shopping_Cart_T
     */
    public function setContinueButton($continueButton)
    {
        $this->continueButton = $continueButton;
    
        return $this;
    }

    /**
     * Get continueButton
     *
     * @return string
     */
    public function getContinueButton()
    {
        return $this->continueButton;
    }

    /**
     * Set checkOutButton
     *
     * @param string $checkOutButton
     *
     * @return Shopping_Cart_T
     */
    public function setCheckOutButton($checkOutButton)
    {
        $this->checkOutButton = $checkOutButton;
    
        return $this;
    }

    /**
     * Get checkOutButton
     *
     * @return string
     */
    public function getCheckOutButton()
    {
        return $this->checkOutButton;
    }

    /**
     * Set emptyCartTitle
     *
     * @param string $emptyCartTitle
     *
     * @return Shopping_Cart_T
     */
    public function setEmptyCartTitle($emptyCartTitle)
    {
        $this->emptyCartTitle = $emptyCartTitle;
    
        return $this;
    }

    /**
     * Get emptyCartTitle
     *
     * @return string
     */
    public function getEmptyCartTitle()
    {
        return $this->emptyCartTitle;
    }
}
