// document.getElementById("createnewaccount").addEventListener('click', function(event) {
//     event.preventDefault();
//     window.location.href = './../singup/index.html';
// });

let timeout; 
function showErrorMsg(message) {
    const errorMsg = document.getElementById('errorMsg');
    errorMsg.textContent = message;
    errorMsg.style.display = 'block';
    timeout = setTimeout(function() {
        errorMsg.style.display = 'none';
    }, 3000);
}

function clearErrorMsg() {
    const errorMsg = document.getElementById('errorMsg');
    clearTimeout(timeout); 
    errorMsg.style.display = 'none';
}

const errorMsg = document.getElementById('errorMsg');
errorMsg.addEventListener('mouseover', function() {
    clearTimeout(timeout); 
});

errorMsg.addEventListener('mouseout', function() {
    timeout = setTimeout(function() {
        errorMsg.style.display = 'none';
    }, 3000); 
});

function submitForm() {
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;
    
    if (email === '') {
        showErrorMsg("Please Enter your Email or Phone.")
        return false;
    } else if (password === "") {
        showErrorMsg("Please Enter Your password");
        return false;
    } else if (password.length < 8) {
        showErrorMsg("Enter a valid password.");
        return false;
    }
    
    var formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);

    fetch('/api/auth/login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.IsSuccess && data.IsRedirect) {
            window.location.href = '/?page=homepage';
        } else {
            showErrorMsg(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function clearFields() {
    document.getElementById('email').value = '';
    document.getElementById('password').value = '';
}
