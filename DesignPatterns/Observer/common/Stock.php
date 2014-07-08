<?php
namespace Training\DesignPatterns;

/**
 * Simple stock representation
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */
class Stock
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var float
     */
    private $price;
    
    /**
     * @param string $name
     * @param float $price
     */
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}
