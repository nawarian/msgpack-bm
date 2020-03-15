<?php

ini_set('memory_limit', '-1');

require_once __DIR__ . '/benchmarks.php';

$data = json_decode(file_get_contents(__DIR__ . '/github-issues.json'), true);

echo '--> Run msgpack benchmark' . PHP_EOL;

benchmarkMsgPack(1, $data);
benchmarkMsgPack(10, $data);
benchmarkMsgPack(100, $data);
benchmarkMsgPack(1000, $data);
benchmarkMsgPack(10000, $data);
benchmarkMsgPack(100000, $data);
