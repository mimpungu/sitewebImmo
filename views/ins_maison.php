<?php
    session_start();


function estimatePropertyValue($surface_habitable, $surface_tot_hab, $nbre_pieces, $nbre_niveaux, $etat_maison, $diagnostic, $annee) {
    // Your estimation logic goes here
    // This is a simplified example; you may need to adjust the weights and criteria based on real market data
    $weight_surface_habitable = 5659;   // Adjust based on market analysis
    $weight_surface_tot_hab = 800;      // Adjust based on market analysis
    $weight_nbre_pieces = 5000;         // Adjust based on market analysis
    $weight_nbre_niveaux = 3000;        // Adjust based on market analysis
    $weight_etat_maison = 2000;         // Adjust based on market analysis
    $weight_diagnostic = 1500;          // Adjust based on market analysis
    $weight_annee = 1000;               // Adjust based on market analysis

    $estimated_value = $surface_habitable * $weight_surface_habitable +
                       $surface_tot_hab * $weight_surface_tot_hab +
                       $nbre_pieces * $weight_nbre_pieces +
                       $nbre_niveaux * $weight_nbre_niveaux +
                       getEtatMaisonWeight($etat_maison) +
                       getDiagnosticWeight($diagnostic) +
                       getAnneeWeight($annee);

    return $estimated_value;
}

// Helper function to get weight based on the state of the house
function getEtatMaisonWeight($etat_maison) {
    // Add your logic to assign weights based on the state of the house
    // This is a simplified example; you may need to adjust weights based on real market data
    switch ($etat_maison) {
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

// Helper function to get weight based on the energy performance
function getDiagnosticWeight($diagnostic) {
    // Add your logic to assign weights based on the energy performance
    // This is a simplified example; you may need to adjust weights based on real market data.
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

// Helper function to get weight based on the construction year
function getAnneeWeight($annee) {
    // Add your logic to assign weights based on the construction year
    // This is a simplified example; you may need to adjust weights based on real market data
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
    $surface_tot_hab = $_POST['surface_tot_hab'];
    $nbre_pieces = $_POST['nbre_pieces'];
    $nbre_niveaux = $_POST['nbre_niveaux'];
    $etat_maison = $_POST['etat_maison'];
    $diagnostic = $_POST['diagnostic'];
    $annee = $_POST['annee'];

    // Escape values to prevent SQL injection
    $surface_habitable = $conn->real_escape_string($surface_habitable);
    $surface_tot_hab = $conn->real_escape_string($surface_tot_hab);
    $nbre_pieces = $conn->real_escape_string($nbre_pieces);
    $nbre_niveaux = $conn->real_escape_string($nbre_niveaux);
    $etat_maison = $conn->real_escape_string($etat_maison);
    $diagnostic = $conn->real_escape_string($diagnostic);
    $annee = $conn->real_escape_string($annee);

    // Estimate property value based on provided parameters
    $estimated_value = estimatePropertyValue($surface_habitable, $surface_tot_hab, $nbre_pieces, $nbre_niveaux, $etat_maison, $diagnostic, $annee);

    // Insert data into the database
    $sql = "INSERT INTO maisons (surface_habitable, surface_terrain, nbre_pieces, nbre_niveaux, etat_maison, diagnostic, annee_construction, estimated_value)
    VALUES ('$surface_habitable', '$surface_tot_hab', $nbre_pieces, $nbre_niveaux, '$etat_maison', '$diagnostic', '$annee', $estimated_value)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Enregistrez la valeur estimée dans la session
$_SESSION['estimated_value'] = $estimated_value;

// Redirigez vers la page où vous souhaitez afficher le résultat
header('Location: result.php');
exit();

$conn->close();
?>
