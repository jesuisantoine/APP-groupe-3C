
function displayPopup() {
    var result = confirm("Votre candidature a été soumise avec succès!");
}

function calculateAgeAndCheck() {
    // entrer la date d'anniv
    var dobInput = document.getElementById('date');
    var dob = new Date(dobInput.value);

    // calcule de l'age
    var today = new Date();
    var age = today.getFullYear() - dob.getFullYear();

    // cacule de la majorité
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

function checkEmail() {
    var email = document.getElementById('email').value;

    if (!validateEmail(email)) {
        alert('Le format email est invalide');
        email.style.color = '#B00';
        
    } else {
        email.style.color = '#0B0';
    }
    
// vérifie au moment de la frappe que le mail de confirmation est égal au mail initial
function checkpasswordConfirmation() {
    var password1 = document.getElementById('password1').value;
    var password2 = document.getElementById('password2').value;
    var password2Field = document.getElementById('password2');

    // Validation du format de l'email
    var passwordFormatRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var ispasswordFormatValid = passwordFormatRegex.test(password1);

    if (!ispasswordFormatValid) {
        // Le format de l'email est invalide, afficher un message et colorier en rouge
        alert("Le format de votre mot de passe est invalide");
        return;
    }

    if (password1 === password2) {
        // Les deux emails correspondent, colorier en vert
        password2Field.style.color = 'green';
    } else {
        // Les deux emails ne correspondent pas, colorier en rouge
        password2Field.style.color = 'red';
    }
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

function checkLastName(name) {//Vérifier le champs prénom
    var verif = /[0-9]/;

    if (name.value.match(verif)) {
        name.style.color = '#B00';
        alert("Le prénom comporte un ou plusieurs chiffres");
    } else {
        name.style.color = '#0B0';
    }
}
