<?php

function benchmarkIntegersArrayMsgPack(int $items, int $iterations): void
{
    $data = array_fill(0, $items, PHP_INT_MAX);

    // Encoding
    echo 'Encoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $encoded = null;
    $totalTime = 0;
    for ($i = 0; $i <= $iterations; $i++) {
        $start2 = microtime(true);
        $encoded = msgpack_pack($data);
        $totalTime += microtime(true) - $start2;
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $totalTime = 0;
    for ($i = 0; $i <= $iterations; $i++) {
        $start2 = microtime(true);
        msgpack_unpack($encoded);
        $totalTime += microtime(true) - $start2;
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb.'
        . PHP_EOL;

    unset($data);
}

function benchmarkIntegersArrayJson(int $items, int $iterations): void
{
    $data = array_fill(0, $items, PHP_INT_MAX);

    // Encoding
    echo 'Encoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $encoded = null;
    $totalTime = 0;
    for ($i = 0; $i <= $iterations; $i++) {
        $start2 = microtime(true);
        $encoded = json_encode($data);
        $totalTime += microtime(true) - $start2;
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $totalTime = 0;
    for ($i = 0; $i <= $iterations; $i++) {
        $start2 = microtime(true);
        json_decode($encoded);
        $totalTime += microtime(true) - $start2;
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb.'
        . PHP_EOL;

    unset($data);
}

function benchmarkIntegersArrayJsonAssoc(int $items, int $iterations): void
{
    $data = array_fill(0, $items, PHP_INT_MAX);

    // Encoding
    echo 'Encoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $encoded = null;
    $totalTime = 0;
    for ($i = 0; $i <= $iterations; $i++) {
        $start2 = microtime(true);
        $encoded = json_encode($data);
        $totalTime += microtime(true) - $start2;
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $totalTime = 0;
    for ($i = 0; $i <= $iterations; $i++) {
        $start2 = microtime(true);
        json_decode($encoded, true);
        $totalTime += microtime(true) - $start2;
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's, avg ' . ($totalTime / $iterations) . ' s, '
        . 'with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb.'
        . PHP_EOL;

    unset($data);
}
