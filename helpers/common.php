<?php
    function goToPage($pageKey) {
        $pageUrl = getPageUrl($pageKey);
        header("Location: $pageUrl");
    }
?>
