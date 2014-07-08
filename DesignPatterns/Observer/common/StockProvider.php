<?php
namespace Training\DesignPatterns;

use Training\DesignPatterns\Stock;

/**
 * Simple stock provider
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */
class StockProvider
{
    /**
     * @return Stock[]
     */
    public function getListing()
    {
        return array(
            new Stock("AAPL", 94.74),
            new Stock("FB", 62.65),
            new Stock("YHOO", 34.44),
            new Stock("MSFT", 41.83),
            new Stock("AAPL", 93.47),
            new Stock("FB", 59.88),
        );
    }
}
