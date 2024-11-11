<?php
session_start();

function estimateAppartValue($surface_habitable, $nbre_etages, $etages_du_bien, $nbre_pieces, $etat_appart, $diagnostic, $annee) {
 
    $weight_surface = 4623 * 1.1; 
    $weight_nbre_etages = 2000 * 0.8; 
    $weight_etages_du_bien = 1000;      
    $weight_nbre_pieces = 5000;      
    $weight_etat_appart = 3000;       
    $weight_diagnostic = 1500;    
    $weight_annee = 1000 * 0.9;  

    $estimated_value = $surface_habitable * $weight_surface +
                       $nbre_etages * $weight_nbre_etages +
                       $etages_du_bien * $weight_etages_du_bien +
                       $nbre_pieces * $weight_nbre_pieces +
                       getEtatAppartWeight($etat_appart) +
                       getDiagnosticWeight($diagnostic) +
                       getAnneeWeight($annee);

    return $estimated_value;
}


function getEtatAppartWeight($etat_appart) {
   
    switch ($etat_appart) {

        case 'Mauvais':
            return -5000;
        case 'Moyen':
            return 0;
        case 'Bon':
            return 2000;
        case 'Très bon':
            return 5000;
        default:
            return 0;
    }
}

function getDiagnosticWeight($diagnostic) {

    switch ($diagnostic) {
        case 'A':
            return 5000;
        case 'B':
            return 3000;
        case 'C':
            return 1000;
        case 'D':
            return 0;
        case 'E':
            return -1000;
        case 'F':
            return -3000;
        case 'G':
            return -5000;
        default:
            return 0;
    }
}

function getAnneeWeight($annee) {
  
    switch ($annee) {
        case 'Avant 1950':
            return -5000;
        case '1950 à 2000':
            return 0;
        case 'Apres 2000':
            return 2000;
        default:
            return 0;
    }
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "immobilier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $surface_habitable = $_POST['surface'];
    $nbre_etages = $_POST['nbre_etages'];
    $etages_du_bien = $_POST['etages_du_bien'];
    $nbre_pieces = $_POST['nbre_pieces'];
    $etat_appartement = $_POST['etat_appart'];
    $diagnostic = $_POST['diagnostic'];
    $annee = $_POST['annee'];

    // Escape les valeurs contre les injections SQL
    $surface_habitable = $conn->real_escape_string($surface_habitable);
    $nbre_etages = $conn->real_escape_string($nbre_etages);
    $etages_du_bien = $conn->real_escape_string($etages_du_bien);
    $nbre_pieces = $conn->real_escape_string($nbre_pieces);
    $etat_appartement = $conn->real_escape_string($etat_appartement);
    $diagnostic = $conn->real_escape_string($diagnostic);
    $annee = $conn->real_escape_string($annee);

    // Estimatation des données de l'appart
    $estimated_value = estimateAppartValue($surface_habitable, $nbre_etages, $etages_du_bien, $nbre_pieces, $etat_appartement, $diagnostic, $annee);

    // Insert data into the database
    $sql = "INSERT INTO appartements (surface_habitable, nbre_etages, etages_du_bien, nbre_pieces, etat_appartement, diagnostic, annee_construction, estimated_value)
    VALUES ('$surface_habitable', $nbre_etages, $etages_du_bien, $nbre_pieces, '$etat_appartement', '$diagnostic', '$annee', $estimated_value)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Enregistrez la valeur estimée dans la session
$_SESSION['estimated_value'] = $estimated_value;

// Redirigez vers la page result.php
header('Location: result.php');
exit();

$conn->close();
?>
