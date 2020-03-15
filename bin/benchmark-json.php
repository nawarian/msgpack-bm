<?php

ini_set('memory_limit', '-1');

require_once __DIR__ . '/../vendor/autoload.php';

echo '--> Run Json benchmark' . PHP_EOL;

echo '----- Integers array benchmark' . PHP_EOL;

benchmarkIntegersArrayJson(1, 100000);
benchmarkIntegersArrayJson(10, 100000);
benchmarkIntegersArrayJson(100, 100000);
benchmarkIntegersArrayJson(1000, 100000);
benchmarkIntegersArrayJson(10000, 100000);
