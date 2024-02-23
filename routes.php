<?php
    function getPageUrl($pageKey) {
        $pages = [ // default pages for common
            "404" => "404.php",
        ];

        $guestUrls = [ //guest pages
            "login" => "auth/login.php",
            "signup" => "auth/signup.php",
            "newPass" => "auth/newPass.php",
            "forget" => "auth/forgetPass.php",
            "homepage" => "auth/homepage.php",


        ];
    
        $authUrls = [ // auth pages
            "dashboard" => "dashboard.php",
        ];

        $isAuth = checkIsAuth(); // check if user is logged in or not

        if ($isAuth) {
            $pages = array_merge($pages, $authUrls);
        } else {
            $pages = array_merge($pages, $guestUrls);
        }
        
        if (!array_key_exists($pageKey, $pages)) { // if page not found
            if ($pageKey == "default") { // check if page is default
                $pageKey = $isAuth ? "dashboard" : "login";
            } else { // if page is not default and not found
                $pageKey = "404";
            }
        }
    
        return "./pages/" . $pages[$pageKey]; // return page url
    }

    function getApiUrl($apiKey) {
        $pages = [ // common api routes
            // you can add more api routes here
        ];

        $authUrls = [
            // you can add more auth api routes here
        ];

        $guestUrls = [ //guest pages
            "login" => "auth/login.php",
            "signup" => "auth/signup.php",
        ];

        $isAuth = checkIsAuth(); // check if user is logged in or not

        if ($isAuth) {
            $pages = array_merge($pages, $authUrls);
        } else {
            $pages = array_merge($pages, $guestUrls);
        }

        if (!array_key_exists($apiKey, $pages)) { // if page not found
            return "404"; // return empty
        } else {
            return "api/". $pages[$apiKey]; // return page url
        }
    }
?>