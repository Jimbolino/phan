<?php
/**
 * Simple test of Phan's ability to infer if a closure is unused.
 * Phan has false positives with arrays, as well as closures being returned from functions.
 * @suppress PhanNoopArray
 */
function test17() {
    [
        (static function(string $x) { echo "$x\n"; })('test'),
        [static function(string $x) { echo "$x\n"; }],
    ];
}
test17();
