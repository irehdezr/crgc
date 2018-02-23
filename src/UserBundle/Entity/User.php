<?php

namespace UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constrains as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
/**
 * User
 */
class User implements AdvancedUserInterface, \Serializable{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addresses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $shoppingCart;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shoppingCart = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add address
     *
     * @param \UserBundle\Entity\Address $address
     *
     * @return User
     */
    public function addAddress(\UserBundle\Entity\Address $address)
    {
        $this->addresses[] = $address;
    
        return $this;
    }

    /**
     * Remove address
     *
     * @param \UserBundle\Entity\Address $address
     */
    public function removeAddress(\UserBundle\Entity\Address $address)
    {
        $this->addresses->removeElement($address);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add shoppingCart
     *
     * @param \UserBundle\Entity\Presentation $shoppingCart
     *
     * @return User
     */
    public function addShoppingCart(\UserBundle\Entity\Presentation $shoppingCart)
    {
        $this->shoppingCart[] = $shoppingCart;
    
        return $this;
    }

    /**
     * Remove shoppingCart
     *
     * @param \UserBundle\Entity\Presentation $shoppingCart
     */
    public function removeShoppingCart(\UserBundle\Entity\Presentation $shoppingCart)
    {
        $this->shoppingCart->removeElement($shoppingCart);
    }

    /**
     * Get shoppingCart
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShoppingCart()
    {
        return $this->shoppingCart;
    }

    public function getRoles(){
        return array('ROLE_USER');
    }

    public function getSalt(){
        return null;
    }
    public function eraseCredentials(){}

    public function serialize(){
            return serialize(array(
                $this->username,
                $this->lastname,
                $this->email,
                $this->password
                ));
    }
    public function unserialize($serialized){
            list(
                $this->username,
                $this->lastname,
                $this->email,
                $this->password
            ) = unserialize($serialized);
    }
    public function isAccountNonExpired(){
        return true;
    }
    public function isAccountNonLocked(){
        return true;
    }
    public function isCredentialsNonExpired(){
        return true;
    }
    public function isEnabled(){
        return true;
    }

}
