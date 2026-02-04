<?phpclass Solution {

   
    function findMedianSortedArrays($nums1, $nums2) {

        // Merge both arrays
        $merged = array_merge($nums1, $nums2);

        // Sort merged array
        sort($merged);

        $n = count($merged);

        // If odd length
        if ($n % 2 != 0) {
            return (float)$merged[intdiv($n, 2)];
        }
        // If even length
        else {
            $mid1 = $merged[$n / 2 - 1];
            $mid2 = $merged[$n / 2];
            return ($mid1 + $mid2) / 2;
        }
    }
}

?>