const modal = document.getElementById("modal");






function login() {
    modal.style.display = "flex";
}

function add() {
    modal2.style.display = "flex";
}

function exit() {
    modal.style.display = "none";
}






window.onclick = function(e) {
    if (e.target === modal) {
        exit();
    }
}

function login2() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'auth.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            alert(response.message);
            if (response.status === 'success') {
                // Перенаправить пользователя на другую страницу
                window.location.href = 'index_in.php';
            }
        }
    };
    xhr.send('username=' + username + '&password=' + password);
}

