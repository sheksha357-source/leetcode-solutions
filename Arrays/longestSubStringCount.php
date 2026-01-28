<?php
function lengthOfLongestSubstring($s) {
    $n = strlen($s);
    $maxLen = 0;

    for ($i = 0; $i < $n; $i++) {
        $seek = [];

        for ($j = $i; $j < $n; $j++) {
            if (!in_array($s[$j], $seek)) {
                $seek[] = $s[$j];
                $maxLen = max($maxLen, count($seek));
            } else {
                break;
            }
        }
    }

    return $maxLen;
}
?>