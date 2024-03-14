let form = document.querySelector("form");

function validateFirstName() {
    let firstname = document.querySelector('#firstname').value;
    let text = document.querySelector('#firstname + .control .text');
    let pattern = /^[a-zA-Z_-]{4,16}$/; /* min 1 minuscule et 1 majuscule, min. 4 chiffres, max 16 chiffres */

    if (firstname.match(pattern)) {
        text.classList.add('Valid');
        text.classList.remove('invalid');
        text.innerHTML = "Votre nom d'utilisateur est valide";
        text.style.color = "green";
    } else {
        text.classList.remove('Valid'); 
        text.classList.add('invalid'); 
        text.innerHTML = "* Veuillez entrer un prénom d'utilisateur valide";
        text.style.color = "red";
    }

    if (firstname === "") {
        text.classList.remove('valid');
        text.classList.remove('invalid');
        text.innerHTML = "";
    }
}

function validateName() {
    let name = document.querySelector('#name').value;
    let text = document.querySelector('#name + .control .text');
    let pattern = /^[a-zA-Z_-]{4,16}$/; /* min 1 minuscule et 1 majuscule, min. 4 chiffres, max 16 chiffres */

    if (name.match(pattern)) {
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

    if (name === "") {
        text.classList.remove('valid');
        text.classList.remove('invalid');
        text.innerHTML = "";
    }
}

function validateEmail() {
    let email = document.querySelector('#email').value;
    let text = document.querySelector('#email + .control .text');
    let pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 

    if (email.match(pattern)) {
        text.classList.add('Valid');
        text.classList.remove('invalid');
        text.innerHTML = "Votre email est valide";
        text.style.color = "green";
    } else {
        text.classList.remove('Valid'); 
        text.classList.add('invalid'); 
        text.innerHTML = "* Veuillez entrer un email valide";
        text.style.color = "red";
    }

    if (email === "") {
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

function formRegisterValidate() {
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        validateFirstName();
        validateName();
        validateEmail();
        validatePassword();

        if (document.querySelectorAll('.invalid').length > 0) {
            alert("Veuillez remplir tous les champs requis correctement.");
            return;
        }

        form.submit();
    });
}

formRegisterValidate();