let form = document.querySelector("form");

function validateUsername() {
    let username = document.querySelector('#username').value;
    let text = document.querySelector('#username + .control .text');
    let pattern = /^[a-zA-Z_-]{4,16}$/; /* min 1 minuscule et 1 majuscule, min. 4 chiffres, max 16 chiffres */

    if (username.match(pattern)) {
        text.classList.add('Valid');
        text.classList.remove('invalid');
        text.innerHTML = "Votre nom d'utilisateur est valide";
        text.style.color = "green";
    } else {
        text.classList.remove('Valid'); 
        text.classList.add('invalid'); 
        text.innerHTML = "* Veuillez entrer un nom d'utilisateur valide";
        text.style.color = "red";
    }

    if (username === "") {
        text.classList.remove('valid');
        text.classList.remove('invalid');
        text.innerHTML = "";
    }
}

function validatePassword() {
    let password = document.querySelector('#password').value;
    let text = document.querySelector('#password + .control .text');
    let pattern = /^(?=.*[A-Z])(?=.*\d).{6,}$/; /* min. 1 majuscule, min. 1 chiffre, min. 6 caractères */ 

    if (password.match(pattern)) {
        text.classList.add('Valid');
        text.classList.remove('invalid');
        text.innerHTML = "Votre mot de passe est valide";
        text.style.color = "green";
    } else {
        text.classList.remove('Valid'); 
        text.classList.add('invalid'); 
        text.innerHTML = "* Veuillez entrer un mot de passe valide";
        text.style.color = "red";
    }

    if (password === "") {
        text.classList.remove('valid');
        text.classList.remove('invalid');
        text.innerHTML = "";
    }
}

function formValidate() {
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        validateUsername();
        validatePassword();

        if (document.querySelectorAll('.invalid').length > 0) {
            alert("Veuillez remplir tous les champs requis correctement.");
            return;
        }

        form.submit();
    });
}

formValidate();