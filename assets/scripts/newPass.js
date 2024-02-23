function validateForm() {
    let timeout;

    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('Cpassword').value;

    function showErrorMsg(message) {
        const errorMsg = document.getElementById('errorMsg');
        errorMsg.textContent = message;
        errorMsg.style.display = 'block';
        timeout = setTimeout(function () {
            errorMsg.style.display = 'none';
        }, 3000);
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
        }, 3000);
    });


    if (password === '') {
        showErrorMsg("Enter Your Password");
        return false;
    } else if (password.length < 8) {
        showErrorMsg("Password should be at least 8 characters long");
        return false;
    } else if (confirmPassword === '') {
        showErrorMsg("Enter Your Confirm Password");
        return false;
    } else if (confirmPassword.length < 8) {
        showErrorMsg("Confirm Password should be at least 8 characters long");
        return false;
    } else if (password !== confirmPassword) {
        showErrorMsg("Passwords do not match");
        return false;
    }
    document.getElementById('newPassform').addEventListener('submit', function (event) {
        event.preventDefault();
        var formData = new FormData();
        formData.append('password', password);  

        fetch('api/auth/newPass.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.IsSuccess && data.IsRedirect) {
                    alert("done")
                } else {
                    showErrorMsg(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });


}


function clearFields() {
    document.getElementById('password').value = ''
    document.getElementById('Cpassword').value = ''

}
