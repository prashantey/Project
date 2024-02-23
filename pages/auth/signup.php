<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/assets/styles/signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body onload ="return clearFields()">
    <div id="errorMsg">
    </div>

    <div class="signup-form">
        <div class="text">
            <h2>Sign Up</h2>
            <h4>It’s quick and easy.</h4>
        </div>
        <form id="signupForm">
            <input type="text" placeholder="Full Name" id="fullname" name="fullname" ><br><br>
            <input type="email" placeholder="Email" id="email" name="email" ><br><br>
            <input type="tel" placeholder="Phone Number" id="phone" name="phone" ><br><br>
            <input type="password" placeholder="Password" id="password" name="password" ><br><br>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br><br>
            <a href="/?page=login" id="alreadyExist">Already Have an Account?</a>
            <br>
            <button id="button" onclick="return submitForm()">Sign Up</button>
        </form>
    </div>
</body>
</html>

<script src="/assets/scripts/signup.js"></script>
