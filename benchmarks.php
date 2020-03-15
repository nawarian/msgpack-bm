<?php

function benchmarkMsgPack(int $iterations, array $data): void
{
    $encoded = msgpack_pack($data);
    $encodedSize = strlen($encoded);
    $gzipEncodedSize = strlen(gzcompress($encoded));

    // Encoding
    $encodingStart = microtime(true);
    $memStartEncoding = memory_get_peak_usage();
    for ($i = 0; $i <= $iterations; $i++) {
        msgpack_pack($data);
    }
    $memEndEncoding = memory_get_peak_usage() - $memStartEncoding;
    $encodingEnd = microtime(true) - $encodingStart;

    // Decoding
    $decodingStart = microtime(true);
    $memStartDecoding = memory_get_peak_usage();
    for ($i = 0; $i <= $iterations; $i++) {
        msgpack_unpack($encoded);
    }
    $memEndDecoding = memory_get_peak_usage() - $memStartDecoding;
    $decodingEnd = microtime(true) - $decodingStart;

    echo <<<RES
====================
Iterations: {$iterations}
====================
Encoded Str. Size: {$encodedSize} bytes
Encoded Str. Gzip: {$gzipEncodedSize} bytes
--
Encoding Time: {$encodingEnd} seconds
Decoding Time: {$decodingEnd} seconds
--
Encoding Memory: {$memEndEncoding} bytes
Decoding Memory: {$memEndDecoding} bytes
--

RES;

    unset($data);
}

function benchmarkJson(int $iterations, array $data): void
{
    $encoded = json_encode($data);
    $encodedSize = strlen($encoded);
    $gzipEncodedSize = strlen(gzcompress($encoded));

    // Encoding
    $encodingStart = microtime(true);
    $memStartEncoding = memory_get_peak_usage();
    for ($i = 0; $i <= $iterations; $i++) {
        json_encode($data);
    }
    $memEndEncoding = memory_get_peak_usage() - $memStartEncoding;
    $encodingEnd = microtime(true) - $encodingStart;

    // Decoding
    $decodingStart = microtime(true);
    $memStartDecoding = memory_get_peak_usage();
    for ($i = 0; $i <= $iterations; $i++) {
        json_decode($encoded);
    }
    $memEndDecoding = memory_get_peak_usage() - $memStartDecoding;
    $decodingEnd = microtime(true) - $decodingStart;

    echo <<<RES
====================
Iterations: {$iterations}
=====================
Encoded Str. Size: {$encodedSize} bytes
Encoded Str. Gzip: {$gzipEncodedSize} bytes
--
Encoding Time: {$encodingEnd} seconds
Decoding Time: {$decodingEnd} seconds
--
Encoding Memory: {$memEndEncoding} bytes
Decoding Memory: {$memEndDecoding} bytes
--

RES;

    unset($data);
}

function benchmarkJsonAssoc(int $iterations, array $data): void
{
    $encoded = json_encode($data);
    $encodedSize = strlen($encoded);
    $gzipEncodedSize = strlen(gzcompress($encoded));

    // Encoding
    $encodingStart = microtime(true);
    $memStartEncoding = memory_get_peak_usage();
    for ($i = 0; $i <= $iterations; $i++) {
        json_encode($data);
    }
    $memEndEncoding = memory_get_peak_usage() - $memStartEncoding;
    $encodingEnd = microtime(true) - $encodingStart;

    // Decoding
    $decodingStart = microtime(true);
    $memStartDecoding = memory_get_peak_usage();
    for ($i = 0; $i <= $iterations; $i++) {
        json_decode($encoded, true);
    }
    $memEndDecoding = memory_get_peak_usage() - $memStartDecoding;
    $decodingEnd = microtime(true) - $decodingStart;

    echo <<<RES
====================
Iterations: {$iterations}
====================
Encoded Str. Size: {$encodedSize} bytes
Encoded Str. Gzip: {$gzipEncodedSize} bytes
--
Encoding Time: {$encodingEnd} seconds
Decoding Time: {$decodingEnd} seconds
--
Encoding Memory: {$memEndEncoding} bytes
Decoding Memory: {$memEndDecoding} bytes
--

RES;

    unset($data);
}
