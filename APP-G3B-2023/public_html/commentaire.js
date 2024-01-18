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
