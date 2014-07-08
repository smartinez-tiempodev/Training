<?php
namespace Training\DesignPatterns\Subscribers;

use Training\DesignPatterns\StockMonitor;
use Training\DesignPatterns\Stock;

/**
 * Abstract class to be implemented by subscribers
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */
abstract class StockUpdateSubscriberAbstract
{
    /**
     * @param StockMonitor $monitor
     */
    public function __construct(StockMonitor $monitor)
    {
        $monitor->addStockUpdateSubscriber(array($this, 'checkUpdatedStock'));
    }
    
    /**
     * @param Stock $stock 
     */
    abstract public function checkUpdatedStock(Stock $stock);
}
