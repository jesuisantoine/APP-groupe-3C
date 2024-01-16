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
}
    
// vérifie au moment de la frappe que le mail de confirmation est égal au mail initial
function checkEmailConfirmation() {
    var email1 = document.getElementById('email1').value;
    var email2 = document.getElementById('email2').value;
    var email2Field = document.getElementById('email2');

    // Validation du format de l'email
    var emailFormatRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var isemailFormatValid = emailFormatRegex.test(email1);

    if (!isemailFormatValid) {
        // Le format du email, afficher un message et colorier en rouge
        alert("Le format de votre email est invalide");
        return;
    }

    if (email1 === email2) {
        // Les deux emails correspondent, colorier en vert
        email2Field.style.color = 'green';
    } else {
        // Les deux emails ne correspondent pas, colorier en rouge
        email2Field.style.color = 'red';
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
