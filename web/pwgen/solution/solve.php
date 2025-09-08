<?php
// paste the observed password (the one printed by the challenge)
$pwd = "7F6_23Ha8:5E4N3_/e27833D4S5cNaT_1i_O46STLf3r-4AH6133bdTO5p419U0n53Rdc80F4_Lb6_65BSeWb38f86{dGTf4}eE8__SW4Dp86_4f1VNH8H_C10e7L62154";

$n = strlen($pwd);
srand(0x1337);              // same seed as the challenge
$perm = range(0, $n-1);     // indices 0..n-1
shuffle($perm);             // this uses the same RNG sequence PHP used for str_shuffle

$orig = array_fill(0, $n, '');
for ($i = 0; $i < $n; $i++) {
    // perm[$i] is the original index that ended up at position $i
    $orig[ $perm[$i] ] = $pwd[$i];
}

$recovered = implode('', $orig);
echo $recovered . PHP_EOL;
?>