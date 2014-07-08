<?php
namespace Training\DesignPatterns;

/**
 * Simple stock monitor that will observe stock updates and notify all subscribers
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */
class StockMonitor
{
    /**
     * @var Stock 
     */
    private $stock;
    /**
     * @var callback[] 
     */
    private $stockUpdateSubscribers = array();
    
    /**
     * @return Stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param Stock $stock
     */
    public function setStock(Stock $stock)
    {
        $this->stock = $stock;
        $this->onCommodityChange($stock);
    }

    /**
     * @param callback $callback
     */
    public function addStockUpdateSubscriber($callback)
    {
        $this->stockUpdateSubscribers[] = $callback;
    }

    /**
     * @param Stock $stock
     */
    protected function onCommodityChange(Stock $stock)
    {
        if (!empty($this->stockUpdateSubscribers))
        {
            foreach ($this->stockUpdateSubscribers as $callback)
            {
                call_user_func_array($callback, array($stock));
            }
        }
    }
}
