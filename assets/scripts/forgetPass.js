
function clearFields() {
    document.getElementById('emailOrPhone').value = '';

}

function submitForm() {

    let timeout;

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

    document.getElementById('forgetPassForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var emailOrPhone = document.getElementById("emailOrPhone").value;

        var formData = new FormData();
        formData.append('emailOrPhone', emailOrPhone);

        fetch('/api/auth/forgetPass.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.IsSuccess && data.IsRedirect) {
                window.location.href = `/?page=newPass&id=${data.id}`;
            } else {
                showErrorMsg(data.message)
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    
}


