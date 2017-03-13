<?php

namespace ProductBundle\Entity;

/**
 * Presentation
 */
class Presentation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $product;

    /**
     * @var int
     */
    private $roast;

    /**
     * @var int
     */
    private $grind;

    /**
     * @var int
     */
    private $price;

    /**
     * @var int
     */
    private $weight;

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
     * Set price
     *
     * @param integer $price
     *
     * @return Presentation
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return Presentation
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set product
     *
     * @param \ProductBundle\Entity\Product_I $product
     *
     * @return Presentation
     */
    public function setProduct(\ProductBundle\Entity\Product_I $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \ProductBundle\Entity\Product_I
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set roast
     *
     * @param \ProductBundle\Entity\Roast $roast
     *
     * @return Presentation
     */
    public function setRoast(\ProductBundle\Entity\Roast $roast = null)
    {
        $this->roast = $roast;

        return $this;
    }

    /**
     * Get roast
     *
     * @return \ProductBundle\Entity\Roast
     */
    public function getRoast()
    {
        return $this->roast;
    }

    /**
     * Set grind
     *
     * @param \ProductBundle\Entity\Grind $grind
     *
     * @return Presentation
     */
    public function setGrind(\ProductBundle\Entity\Grind $grind = null)
    {
        $this->grind = $grind;

        return $this;
    }

    /**
     * Get grind
     *
     * @return \ProductBundle\Entity\Grind
     */
    public function getGrind()
    {
        return $this->grind;
    }
}
