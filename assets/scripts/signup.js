let timeout;

function showErrorMsg(message) {
    const errorMsg = document.getElementById('errorMsg');
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    timeout = setTimeout(function () {
        errorMsg.style.display = 'none';
    }, 5000);
}

function clearErrorMsg() {
    const errorMsg = document.getElementById('errorMsg');
    clearTimeout(timeout);
    errorMsg.style.display = 'none';
}

const errorMsg = document.getElementById('errorMsg');
errorMsg.addEventListener('mouseover', function () {
    clearTimeout(timeout);
});

errorMsg.addEventListener('mouseout', function () {
    timeout = setTimeout(function () {
        errorMsg.style.display = 'none';
    }, 5000);
});
document.getElementById('signupForm').addEventListener('submit', function (event) {
    event.preventDefault();

    fetch('api/auth/signup.php', {
        method: 'POST',
        body: new FormData(this)
    })
        .then(response => response.json())
        .then(data => {
            if (!data.IsSuccess) {
                showErrorMsg(data.message);
            } else {
                setTimeout(function () {

                    window.location.href = '/?page=login';
                }, 2000);
            }

        })
        .catch(error => {
            console.error('Error:', error);
            showErrorMsg('An error occurred. Please try again.');
        });
});

function isValidEmail(email) {
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
function submitForm() {
    var password = document.getElementById('password').value;
    var fullName = document.getElementById("fullname").value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (fullName === "") {
        showErrorMsg("Please Enter Full Name")
        return false
    } else if (email === '') {
        showErrorMsg("Enter an email");
        return false;
    }
    else if (!emailRegex.test(email)) {
        showErrorMsg("Enter a valid email");
        return false;
    } else if (phone === "") {
        showErrorMsg("Enter phone number")
        return false
    } else if (phone.length < 10) {
        showErrorMsg("Enter a valid number")
        return false
    } else if (password === "") {
        showErrorMsg("Enter a password");
        return false;
    } else if (password.length < 8) {
        showErrorMsg("Enter a valid password (at least 8 characters)");
        return false;
    }
}

function clearFields() {
    document.getElementById('password').value = ''
    document.getElementById("fullname").value = ''
    document.getElementById('email').value = ''
    document.getElementById('phone').value = ''
}