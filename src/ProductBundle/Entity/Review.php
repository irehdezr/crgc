<?php

namespace ProductBundle\Entity;

/**
 * Review
 */
class Review
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $rate;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $reviewSubject;


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
     * Set userId
     *
     * @param string $userId
     *
     * @return Review
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Review
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     *
     * @return Review
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    
        return $this;
    }

    /**
     * Get rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Review
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set reviewSubject
     *
     * @param string $reviewSubject
     *
     * @return Review
     */
    public function setReviewSubject($reviewSubject)
    {
        $this->reviewSubject = $reviewSubject;
    
        return $this;
    }

    /**
     * Get reviewSubject
     *
     * @return string
     */
    public function getReviewSubject()
    {
        return $this->reviewSubject;
    }
    /**
     * @var \ProductBundle\Entity\Product_I
     */
    private $product;


    /**
     * Set product
     *
     * @param \ProductBundle\Entity\Product_I $product
     *
     * @return Review
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
     * @var string
     */
    private $user;


    /**
     * Set user
     *
     * @param string $user
     *
     * @return Review
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
}
