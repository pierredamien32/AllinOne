const togglePassword = document.querySelector("#togglePassword");

const password = document.querySelector("#password");

togglePassword.addEventListener('click', function(e){
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    this.classList.toggle("fa-eye");
});

// Sélectionnez l'élément 
const boutonParticulier = document.getElementById('mon-btn-particulier');
const form_particulier = document.getElementById('particulier');

// Ajoutez un écouteur d'événement
boutonParticulier.addEventListener("click", function() {
    form_particulier.style.display = "block";
    form_organisme.style.display = "none";
});


const boutonOrganisme = document.getElementById('mon-btn-organisme');
const form_organisme = document.getElementById('organisme');
boutonOrganisme.addEventListener("click", function() {
    form_particulier.style.display = "none";
    form_organisme.style.display = "block";
});

