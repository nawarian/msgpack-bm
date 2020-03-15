MsgPack vs. JSON vs. JSON Assoc comparison
---

This repo contains very simple and dumb code for comparing
MsgPack, json_\[en|de]code and json_\[en|de]code with assoc = true.

These numbers were gathered for a benchmark published on [thePHP Website](https://thephp.website/en/).

# Environment

This repository is being built by Travis CI. The current document
available ran on the following specs:

CPU: Intel(R) Xeon(R); 1 @ 2,8 GHz; Cache 33 MB
RAM: 7,79 GB
OS: linux/amd64 (Ubuntu 16.04.6 LTS - Xenial)

PHP Version: 7.3.15 and 7.4.3
MsgPack Version: 2.1.0

# Results

The entity being encoded/decoded is [available here.](https://github.com/nawarian/msgpack-bm/blob/master/github-issues.json)

## Using PHP 7.4.3

### MsgPack C Extension

- **Encoded Size:** 120799 bytes
- **Encoded and Gzipped Size:** 26074 bytes

Loops | Encoding Time (s) | Decoding Time (s)
----- | ----------------- | ----------------
1 | 0.00019 | 0.00051
10 | 0.00082 | 0.00194
100 | 0.00732 | 0.01700
1000 | 0.07250 | 0.16785
10000 | 0.72503 | 1.65804
100000 | 7.25324 | 16.71792

### Json native extension

- **Encoded Size:** 143025 bytes
- **Encoded and Gzipped Size:** 26214 bytes

Loops | Encoding Time (s) | Decoding Time (s) {Assoc = False} | Decode Time (s) {Assoc = True}
----- | ----------------- | --------------------------------- | ------------------------------
1 | 0.00064 | 0.00167 | 0.00164
10 | 0.00340 | 0.00904 | 0.00866
100 | 0.03135 | 0.08136 | 0.07905
1000 | 0.30385 | 0.80416 | 0.77422
10000 | 3.02723 | 7.99221 | 7.74523
100000 | 30.29353 | 79.90700 | 77.48423

## Using PHP 7.3.15

### MsgPack C Extension

- **Encoded Size:** 120799 bytes
- **Encoded and Gzipped Size:** 26074 bytes

Loops | Encoding Time (s) | Decoding Time (s)
----- | ----------------- | ----------------
1 | 0.00020 | 0.00052
10 | 0.00088 | 0.00227
100 | 0.00810 | 0.01988
1000 | 0.07713 | 0.19712
10000 | 0.75569 | 1.93530
100000 | 7.51740 | 19.37039

### Json native extension

- **Encoded Size:** 143025 bytes
- **Encoded and Gzipped Size:** 26214 bytes

Loops | Encoding Time (s) | Decoding Time (s) {Assoc = False} | Decode Time (s) {Assoc = True}
----- | ----------------- | --------------------------------- | ------------------------------
1 | 0.00066 | 0.00175 | 0.00173
10 | 0.00347 | 0.00922 | 0.00884
100 | 0.03158 | 0.08382 | 0.08083
1000 | 0.31668 | 0.82576 | 0.80127
10000 | 3.14228 | 8.27866 | 8.01997
100000 | 31.42415 | 82.53105 | 80.18064
