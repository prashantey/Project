<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/styles/newPass.css">
    <script src="/assets/scripts/newPass.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create NewPassword</title>
</head>

<body onload="return clearFields()">

    <div class="container">
        <form id="newPassform">
        <h2>Create New Password</h2>
        <hr>
        <div class="text">
          Please enter your New Password for your account.

        </div>
        <br>
        <div id="errorMsg"></div>
            <input type="password" id="password" name="password" placeholder="New Password">
            <input type="password" id="Cpassword" name="confirmPassword" placeholder="Confirm Password">
            <hr>


            <a href="/?page=login" id="cancel">Cancel</a>
            <button id="bottom" onclick="return validateForm()">Confirm</button>
        </form>
    </div>
</body>
</html>
