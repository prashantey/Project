<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prashant Heroo?</title>
    <link rel="stylesheet" href="/assets/styles/login.css">
</head>
<body onload="clearFields()">
    <div id="errorMsg"></div>
    <form id="loginForm">
        <div class="container">
            <input type="text" id="email" name="emailOrPhone" placeholder="Enter Your Email Or Phone Number" value="" autofocus="1" autocomplete="username" aria-label="Enter Your Email Or Phone Number">
            <input type="password" id="password" name="password" placeholder="Password">
            <button type="button" onclick="submitForm()">Login</button><br>
            <a href="/?page=forget" id="forgetpass">Forget Password?</a>
            <div class="hr"></div>
            <!-- <a href="/?page=signup" id="createnewaccount" rel="async"> -->
            <a href="/?page=signup" id="createnewaccount" rel="async">

                Create New Account
            </a>
        </div>
    </form>
    <script src="/assets/scripts/login.js"></script>
</body>
</html>