const LoginButton = document.getElementById("uLogin");
LoginButton.addEventListener("click",sendProcessLogin);
const RegButton = document.getElementById("singup");
RegButton.addEventListener("click",sendProcessreg);



function sendProcessLogin(){
    location.href="http://localhost//WEB//Login.php"
}

function sendProcessreg(){
    location.href = "http://localhost//WEB//Login.php"
}