<?php
/**
 * Simple application that simulates stock market ticker
 * @link http://www.investopedia.com/articles/01/070401.asp Short explanation of what a stock market ticker is
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */

require_once __DIR__ . '/../common/Stock.php';
require_once __DIR__ . '/../common/StockProvider.php';

use Training\DesignPatterns\StockProvider;

echo "\nDemo stock market ticker\n\n";

$provider = new StockProvider();
$listing = $provider->getListing();
foreach ($listing as $stock)
{
    if ($stock->getName() == "AAPL")
    {
        echo "The current price of Apple is {$stock->getPrice()}.\n";
    }

    if ($stock->getName() == "FB" && $stock->getPrice() < 60)
    {
        echo "The price of Facebook is at {$stock->getPrice()}, recommend buying shares.\n";
    }
}

echo "\nEnd of Program\n";