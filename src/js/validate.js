let form = document.querySelector("form");

function ValidateUsername() {
    let username = document.querySelector('#username').value;
    let pattern = /^[a-zA-Z_-]{4,16}$/; /* min 1 minuscule et 1 majuscule, min. 4 chiffres, max 16 chiffres */

    if (username.match(pattern)) {
        text.classList.add('Valid');
        text.classList.remove('invalid');
        text.innerHTML = "Your Email Address is Valid";
        text.style.color = "green";
    }

    else {
        text.classList.remove('Valid'); 
        text.classList.add('invalid'); 
        text.innerHTML = "* Please Enter Email Address";
        text.style.color = "red";
    }
    
    if (email === "") {
        text.classList.remove('valid');
        text.classList.remove('invalid');
        text.innerHTML = "";
    }
}

function ValidatePassword() {
    let password = document.querySelector('#password').value;
    let pattern = /^(?=.*[A-Z])(?=.*\d).{6,}$/; /* min. 1 majuscule, min. 1 chiffre, min. 6 caractères */ 

    if (password.match(pattern)) {
        text.classList.add('Valid');
        text.classList.remove('invalid');
        text.innerHTML = "Your Email Address is Valid";
        text.style.color = "green";
    }

    else {
        text.classList.remove('Valid'); 
        text.classList.add('invalid'); 
        text.innerHTML = "* Please Enter Email Address";
        text.style.color = "red";
    }

    if (email === "") {
        text.classList.remove('valid');
        text.classList.remove('invalid');
        text.innerHTML = "";
    }
}

