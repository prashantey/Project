<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <script src="/assets/scripts/forgetPass.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Forget Password</title>
    <link rel="stylesheet" href="/assets/styles/forgetPass.css">
</head>
<body onload="return clearFields()">
    <div class="header">
        <h3>Prashant Heroo?</h3>
        <div class="right">
            <ul>
                <li>
                    <a href="?page=signup">Create an Account</a>
                </li>
                <li>
                    <a href="?page=login">Already Have An Account?</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <form id="forgetPassForm">
        <h2>Find your Account</h2>
        <hr>
        <div class="text">
          Please enter your email or mobile number to search for your account.
        </div>
        <div id="errorMsg"></div>
        <br>
        <input type="text" name="emailOrPhone" id="emailOrPhone" placeholder="Email or mobile number" required><hr>
            <a href="/?page=login" id="cancel">Cancel</a>
            <button id="bottom" onclick="return submitForm()">Search</button>
        </form>
    </div>
</body>
</html>
