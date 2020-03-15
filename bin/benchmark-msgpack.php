<?php

ini_set('memory_limit', '-1');

require_once __DIR__ . '/../vendor/autoload.php';

echo '--> Run msgpack benchmark' . PHP_EOL;

echo '----- Integers array benchmark' . PHP_EOL;

benchmarkIntegersArrayMsgPack(1, 100000, PHP_INT_MAX);
benchmarkIntegersArrayMsgPack(10, 100000, PHP_INT_MAX);
benchmarkIntegersArrayMsgPack(100, 100000, PHP_INT_MAX);
benchmarkIntegersArrayMsgPack(1000, 100000, PHP_INT_MAX);
benchmarkIntegersArrayMsgPack(10000, 100000, PHP_INT_MAX);
