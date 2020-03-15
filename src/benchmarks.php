<?php

function benchmarkIntegersArrayMsgPack(int $items, int $iterations, $value): void
{
    $data = array_fill(0, $items, $value);

    // Encoding
    echo 'Encoding ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $encoded = null;
    for ($i = 0; $i <= $iterations; $i++) {
        $encoded = msgpack_pack($data);
    }

    $totalTime = round(((microtime(true) - $start)), 4);
    echo 'done ' . $items . ' item(s), ' . $iterations
        . ' times in ' . $totalTime
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    for ($i = 0; $i <= $iterations; $i++) {
        msgpack_unpack($encoded);
    }

    $totalTime = round(((microtime(true) - $start)), 4);
    echo 'done ' . $items . ' item(s), ' . $iterations
        . ' times in ' . $totalTime
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb.'
        . PHP_EOL;

    unset($data);
}

function benchmarkIntegersArrayJson(int $items, int $iterations, $value): void
{
    $data = array_fill(0, $items, $value);

    // Encoding
    echo 'Encoding ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $encoded = null;
    for ($i = 0; $i <= $iterations; $i++) {
        $encoded = json_encode($data);
    }

    $totalTime = round(((microtime(true) - $start)), 4);
    echo 'done ' . $items . ' item(s), ' . $iterations
        . ' times in ' . $totalTime
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    for ($i = 0; $i <= $iterations; $i++) {
        json_decode($encoded);
    }

    $totalTime = round(((microtime(true) - $start)), 4);
    echo 'done ' . $items . ' item(s), ' . $iterations
        . ' times in ' . $totalTime
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb.'
        . PHP_EOL;

    unset($data);
}

function benchmarkIntegersArrayJsonAssoc(int $items, int $iterations, $value): void
{
    $data = array_fill(0, $items, $value);

    // Encoding
    echo 'Encoding ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $encoded = null;
    for ($i = 0; $i <= $iterations; $i++) {
        $encoded = json_encode($data);
    }

    $totalTime = round(((microtime(true) - $start)), 4);
    echo 'done ' . $items . ' item(s), ' . $iterations
        . ' times in ' . $totalTime
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    for ($i = 0; $i <= $iterations; $i++) {
        json_decode($encoded, true);
    }

    $totalTime = round(((microtime(true) - $start)), 4);
    echo 'done ' . $items . ' item(s), ' . $iterations
        . ' times in ' . $totalTime
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb.'
        . PHP_EOL;

    unset($data);
}
