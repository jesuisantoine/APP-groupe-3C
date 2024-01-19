

function search() {
    // Get the input value
    var keyword = document.getElementById('searchInput').value;

    // Get all paragraphs on the page
    var paragraphs = document.querySelectorAll('.mainPage h1, .mainPage p');

    // Loop through paragraphs and check for the keyword
    paragraphs.forEach(function (paragraph) {
        var content = paragraph.innerText;

        // Check if the keyword is present in the paragraph
        if (content.includes(keyword)) {
            // Highlight the keyword in the paragraph
            var highlightedContent = content.replace(new RegExp(keyword, 'gi'), match => `<span class="highlight">${match}</span>`);
            paragraph.innerHTML = highlightedContent;
        } else {
            // Remove the highlight class if not matching
            paragraph.classList.remove('highlight');
        }
    });
}

function responsiveNavbar() {
    var x = document.getElementById("navi");
    if (x.className === "navbar")
    {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }

}

// Open Q&A Modal
function openQAModal() {
    document.getElementById('qAModal').style.display = 'block';
}

// Close Q&A Modal
function closeQAModal() {
    document.getElementById('qAModal').style.display = 'none';
}

function selectOption(event) {
    if (event.target.classList.contains('option')) {
        var selectedAnswer = event.target.getAttribute('data-answer');
        document.getElementById('answer').innerHTML = '<strong>Réponse:</strong> ' + selectedAnswer;
    }
}

// Close Q&A Modal if clicked outside the modal content
window.addEventListener('click', function (event) {
    var modal = document.getElementById('qAModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});



// Fonction existante pour ajouter un commentaire
function addComment() {
    var commentInput = document.getElementById('commentInput').value;

    if (commentInput.trim() !== "") {
        var commentList = document.getElementById('commentList');

        var commentDiv = document.createElement('div');
        commentDiv.className = 'comment';
        commentDiv.textContent = commentInput;

        commentList.appendChild(commentDiv);

        // Effacer le champ de commentaire après l'ajout
        document.getElementById('commentInput').value = "";
    }
}

// Nouvelle fonction pour gérer la pression des touches dans la zone de texte
function handleCommentInput(event) {
    if (event.key === 'Enter' && !event.shiftKey) {
        event.preventDefault(); // Empêcher le saut de ligne automatique
        addComment();
    }
}

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
