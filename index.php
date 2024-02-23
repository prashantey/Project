<?php
    require("./helpers/authentication.php");
    require("./routes.php");

    $apiUrl = null;
    $pageUrl = null;

    if (isset($_GET["api"])) {
        $apiUrl = getApiUrl($_GET["api"]);
    } else {
        $pageKey = isset($_GET["page"]) ? $_GET["page"] : "default";
        $pageUrl = getPageUrl($pageKey);
    }
?>

<?php 
    require($apiUrl ? $apiUrl : $pageUrl);
?>