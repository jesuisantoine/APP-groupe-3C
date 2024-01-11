function displayPopup() {
    var result = confirm("Votre candidature a été soumise avec succès!");
}

function checkFirstName(name) { //Vérifier le champs nom
    var verif = /[0-9]/;

    if (name.value.match(verif)) {
        name.style.color = '#B00';
        alert("Le nom comporte un ou plusieurs chiffres");
    } else {
        name.style.color = '#0B0';
    }
}

function checkEmailConfirmation(email) { //Vérifier le champs nom
    var verif = document.getElementById("email").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailRegex.test(verif)) {
        email.style.color = '#0B0';
    } else {
        alert("Le format de votre email est invalide");
    }
}

function calculateAgeAndCheck() {
    // Get the entered date of birth
    var dobInput = document.getElementById('date');
    var dob = new Date(dobInput.value);

    // Calculate age
    var today = new Date();
    var age = today.getFullYear() - dob.getFullYear();

    // Check if the person is 18 or older
    if (age >= 18) {
        alert("Vous êtes majeur!");
        // Set the background color to green for legal age
        dobInput.style.backgroundColor = 'green';
    } else {
        alert("Vous êtes trop jeune");
        // Set the background color to red for underage
        dobInput.style.backgroundColor = 'red';
    }
}

//verifier que les mots de passe sont les mêmes et suffisament long
function checkpassword() {
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;
    // Vérifier si les mots de passe correspondent
    if (password1 !== password2) {
        alert("Les mots de passe ne correspondent pas.");
        return;
    }

    if (password1 === password2) {
        //les mots de passes sont pareil 
        password2Field.style.color = 'green';
    } else {
        //les mots de passes sont différent 
        password2Field.style.color = 'red';
    }

    // Vérifier si le mot de passe est suffisamment sécurisé (au moins 8 caractères ici)
    if (password1.length < 8) {
        alert("Le mot de passe doit contenir au moins 8 caractères.");
        return;
    }
    // Vérifier si le mot de passe possaide un chiffre
    if (!/\d/.test(password1)) {
        alert("Le mot de passe doit contenir au moins un chiffre.");
        return;
    }

    // Vérifier si le mot de passe possaide un caractère spécial
    if (!/[!@#$%^&*(),.?":{}|<>]/.test(password1)) {
        alert("Le mot de passe doit contenir au moins un caractère spécial.");
        return;
    }

    

}
