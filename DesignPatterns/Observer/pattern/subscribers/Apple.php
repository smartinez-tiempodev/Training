<?php
namespace Training\DesignPatterns\Subscribers;

use Training\DesignPatterns\Stock;

/**
 * Subscriber for apple stocks
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */
class Apple extends StockUpdateSubscriberAbstract
{
    /**
     * @param Stock $stock 
     */
    public function checkUpdatedStock(Stock $stock)
    {
        if ($stock->getName() == "AAPL")
        {
            echo "The current price of Apple is {$stock->getPrice()}.\n";
        }
    }
}
