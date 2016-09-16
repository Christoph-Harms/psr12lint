<?php
/**
 * Created by IntelliJ IDEA.
 * User: charms-ensink
 * Date: 16.09.16
 * Time: 15:29
 */

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$app = new \Cilex\Application('psr12lint');

$app->run();