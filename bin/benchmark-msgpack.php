<?php

ini_set('memory_limit', '-1');

require_once __DIR__ . '/../vendor/autoload.php';

echo '--> Run msgpack benchmark' . PHP_EOL;

echo '----- Integers array benchmark' . PHP_EOL;

benchmarkIntegersArrayMsgPack(1, 100000);
benchmarkIntegersArrayMsgPack(10, 100000);
benchmarkIntegersArrayMsgPack(100, 100000);
benchmarkIntegersArrayMsgPack(1000, 100000);
benchmarkIntegersArrayMsgPack(10000, 100000);
