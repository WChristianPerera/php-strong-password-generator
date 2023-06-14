<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. 
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro 
(es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->


<?php
$generatedPassword = '';

if (isset($_GET['password'])) {
    $passwordLength = $_GET['password'];
    include 'functions.php';
    $generatedPassword = generateRandomPassword($passwordLength);
}

if (isset($_GET['reset'])) {
    $generatedPassword = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <form action="index.php" method="GET">
        <label for="passwordLength">Lunghezza password:</label>
        <input type="number" id="passwordLength" name="password" required>
        <button type="submit">Genera Password</button>
        <button type="reset" name="reset">Resetta</button>
        <?php if (!empty($generatedPassword)): ?>
            <input type="text" value="<?php echo $generatedPassword; ?>" readonly>
        <?php endif; ?>
    </form>
</body>
</html>