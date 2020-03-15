<?php

ini_set('memory_limit', '-1');

require_once __DIR__ . '/../vendor/autoload.php';

echo '--> Run Json Assoc benchmark' . PHP_EOL;

echo '----- Integers array benchmark' . PHP_EOL;

benchmarkIntegersArrayJsonAssoc(1, 100000);
benchmarkIntegersArrayJsonAssoc(10, 100000);
benchmarkIntegersArrayJsonAssoc(100, 100000);
benchmarkIntegersArrayJsonAssoc(1000, 100000);
benchmarkIntegersArrayJsonAssoc(10000, 100000);
benchmarkIntegersArrayJsonAssoc(100000, 100000);
