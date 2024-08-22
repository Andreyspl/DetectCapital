<?php

class Solution {
    function detectCapitalUse($word) {
        return ctype_upper($word) || ctype_lower($word) || (ctype_upper($word[0]) && ctype_lower(substr($word, 1)));
    }
}

