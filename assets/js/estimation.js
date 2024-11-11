
// Variables globales
var estimationForm = document.getElementById("estimationForm"); // Le formulaire
var addressView = document.getElementById("addressView"); // La vue 1
var typeView = document.getElementById("typeView"); // La vue 2
var surfaceView = document.getElementById("surfaceView"); // La vue 3
var etageView = document.getElementById("etageView"); // La vue 4
var anneeView = document.getElementById("anneeView"); // La vue 5
var statutView = document.getElementById("statutView"); // La vue 6

// Fonction pour afficher la vue 1 et masquer les autres
function showAddressForm() {
    addressView.classList.remove("d-none"); // Enlever la classe d-none
    typeView.classList.add("d-none"); // Ajouter la classe d-none
    surfaceView.classList.add("d-none"); // Ajouter la classe d-none
    etageView.classList.add("d-none"); // Ajouter la classe d-none
    anneeView.classList.add("d-none"); // Ajouter la classe d-none
    statutView.classList.add("d-none"); // Ajouter la classe d-none
}

// Fonction pour afficher la vue 2 et masquer les autres
function showTypeForm() {
    addressView.classList.add("d-none"); // Ajouter la classe d-none
    typeView.classList.remove("d-none"); // Enlever la classe d-none
    surfaceView.classList.add("d-none"); // Ajouter la classe d-none
    etageView.classList.add("d-none"); // Ajouter la classe d-none
    anneeView.classList.add("d-none"); // Ajouter la classe d-none
    statutView.classList.add("d-none"); // Ajouter la classe d-none
}

// Fonction pour afficher la vue 3 et masquer les autres
function showSurfaceForm() {
    addressView.classList.add("d-none"); // Ajouter la classe d-none
    typeView.classList.add("d-none"); // Ajouter la classe d-none
    surfaceView.classList.remove("d-none"); // Enlever la classe d-none
    etageView.classList.add("d-none"); // Ajouter la classe d-none
    anneeView.classList.add("d-none"); // Ajouter la classe d-none
    statutView.classList.add("d-none"); // Ajouter la classe d-none
}

// Fonction pour afficher la vue 4 et masquer les autres
function showEtageForm() {
    addressView.classList.add("d-none"); // Ajouter la classe d-none
    typeView.classList.add("d-none"); // Ajouter la classe d-none
    surfaceView.classList.add("d-none"); // Ajouter la classe d-none
    etageView.classList.remove("d-none"); // Enlever la classe d-none
    anneeView.classList.add("d-none"); // Ajouter la classe d-none
    statutView.classList.add("d-none"); // Ajouter la classe d-none
}

// Fonction pour afficher la vue 5 et masquer les autres
function showAnneeForm() {
    addressView.classList.add("d-none"); // Ajouter la classe d-none
    typeView.classList.add("d-none"); // Ajouter la classe d-none
    surfaceView.classList.add("d-none"); // Ajouter la classe d-none
    etageView.classList.add("d-none"); // Ajouter la classe d-none
    anneeView.classList.remove("d-none"); // Enlever la classe d-none
    statutView.classList.add("d-none"); // Ajouter la classe d-none
}

// Fonction pour afficher la vue 6 et masquer les autres
function showStatutForm() {
    addressView.classList.add("d-none"); // Ajouter la classe d-none
    typeView.classList.add("d-none"); // Ajouter la classe d-none
    surfaceView.classList.add("d-none"); // Ajouter la classe d-none
    etageView.classList.add("d-none"); // Ajouter la classe d-none
    anneeView.classList.add("d-none"); // Ajouter la classe d-none
    statutView.classList.remove("d-none"); // Enlever la classe d-none
}
