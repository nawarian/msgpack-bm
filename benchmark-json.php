<?php

ini_set('memory_limit', '-1');

require_once __DIR__ . '/benchmarks.php';

$data = json_decode(file_get_contents(__DIR__ . '/github-issues.json'), true);

echo '--> Run json benchmark' . PHP_EOL;

benchmarkJson(1, $data);
benchmarkJson(10, $data);
benchmarkJson(100, $data);
benchmarkJson(1000, $data);
benchmarkJson(10000, $data);
benchmarkJson(100000, $data);
