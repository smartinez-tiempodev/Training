<?php
/**
 * Simple application that simulates stock market ticker, using observer pattern
 * @link http://www.investopedia.com/articles/01/070401.asp Short explanation of what a stock market ticker is
 * @author Santiago Martinez <smartinez@tiempodevelopment.com>
 * @copyright (c) 2014, Tiempo Development
 * @version 1.0.0
 */

require_once __DIR__ . '/../common/Stock.php';
require_once __DIR__ . '/../common/StockProvider.php';
require_once __DIR__ . '/StockMonitor.php';
require_once __DIR__ . '/subscribers/StockUpdateSubscriberAbstract.php';
require_once __DIR__ . '/subscribers/Apple.php';
require_once __DIR__ . '/subscribers/Facebook.php';

use Training\DesignPatterns\StockProvider;
use Training\DesignPatterns\StockMonitor;
use Training\DesignPatterns\Subscribers\Apple;
use Training\DesignPatterns\Subscribers\Facebook;

echo "\nDemo stock market ticker - With Observer\n\n";

// declare our observer and add subscribers
$monitor = new StockMonitor();
$apple = new Apple($monitor);
$facebook = new Facebook($monitor);

$provider = new StockProvider();
$listing = $provider->getListing();
foreach ($listing as $stock)
{
    $monitor->setStock($stock);
}

echo "\nEnd of Program\n";