<!-- 
Descrizione

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). 
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. 
-->

<?php ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>password generator</title>

    <style>
        body {
            background-color: lightcyan;
        }
    </style>
</head>

<body>

    <div class="container text-center mt-5">
        <h1 class="mb-5">Password Generator 3.0</h1>
        <div class="card p-4">
            <form action="" method="get">

                <div class="input-group mb-3 py-3 border-bottom">
                    <label for="limit" class="me-5">Type a number to choose the password length</label>
                    <input type="number" name="limit" id="limit" class="form-control" placeholder="Type a number" aria-label="Number" aria-describedby="basic-addon1" required>
                </div>

                <div class="input-group mb-3 py-3 border-bottom">
                    <label class="me-auto">Do you want repeat characters?</label>

                    <label for="repeat-yes">Yes</label>
                    <input value="1" type="radio" name="repeat" id="repeat-yes" class="mx-2">

                    <label for="repeat-no">no</label>
                    <input value="0" type="radio" name="repeat" id="repeat-no" class="mx-2">
                </div>

                <div class="input-group py-3 border-bottom">
                    <label class="me-auto">Choose a type of characters:</label>

                    <label for="letters">Letters</label>
                    <input value="1" type="checkbox" name="repeat" id="letters" class="mx-2">

                    <label for="number" class="ms-4">Number</label>
                    <input value="1" type="checkbox" name="repeat" id="number" class="mx-2">

                    <label for="symbol" class="ms-4">Symbol</label>
                    <input value="1" type="checkbox" name="repeat" id="symbol" class="mx-2">
                </div>

                <button type="submit" class="btn btn-primary my-4">Genera</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>


            </form>

            <div class="alert alert-primary" role="alert">
                Your new password is:
            </div>
        </div>
    </div>



    <!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>