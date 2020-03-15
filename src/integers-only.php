<?php

function benchmarkIntegersArrayMsgPack(int $items, int $iterations): void
{
    $data = array_fill(0, $items, PHP_INT_MAX);

    // Encoding
    echo 'Encoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    $encoded = null;
    for ($i = 0; $i <= $iterations; $i++) {
        $encoded = msgpack_pack($data);
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    for ($i = 0; $i <= $iterations; $i++) {
        msgpack_unpack($encoded);
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's with '
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
    for ($i = 0; $i <= $iterations; $i++) {
        $encoded = json_encode($data);
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    for ($i = 0; $i <= $iterations; $i++) {
        json_decode($encoded);
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's with '
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
    for ($i = 0; $i <= $iterations; $i++) {
        $encoded = json_encode($data);
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb. '
        . 'Output string is ' . strlen($encoded) . ' bytes long.'
        . PHP_EOL;

    // Decoding
    echo 'Decoding integers only ..... ';
    $start = microtime(true);
    $memStart = memory_get_peak_usage();

    for ($i = 0; $i <= $iterations; $i++) {
        json_decode($encoded, true);
    }

    echo 'done ' . $items . ' item(s), ' . $iterations . ' times in '
        . round(((microtime(true) - $start)), 4)
        . 's with '
        . ((memory_get_peak_usage() - $memStart) / 1024) . ' Kb.'
        . PHP_EOL;

    unset($data);
}
