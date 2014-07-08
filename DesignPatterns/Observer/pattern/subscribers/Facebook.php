<?php
namespace Training\DesignPatterns\Subscribers;

use Training\DesignPatterns\Stock;

/**
 * Subscriber for facebook stocks
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */
class Facebook extends StockUpdateSubscriberAbstract
{
    /**
     * @param Stock $stock 
     */
    public function checkUpdatedStock(Stock $stock)
    {
        if ($stock->getName() == "FB" && $stock->getPrice() < 60)
        {
            echo "The price of Facebook is at {$stock->getPrice()}, recommend buying shares.\n";
        }
    }
}
