<?php

ini_set('memory_limit', '-1');

require_once __DIR__ . '/benchmarks.php';

$data = json_decode(file_get_contents(__DIR__ . '/github-issues.json'), true);

echo '--> Run Json Assoc benchmark' . PHP_EOL;

benchmarkJsonAssoc(1, $data);
benchmarkJsonAssoc(10, $data);
benchmarkJsonAssoc(100, $data);
benchmarkJsonAssoc(1000, $data);
benchmarkJsonAssoc(10000, $data);
benchmarkJsonAssoc(100000, $data);
