<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
</head>
<body>
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Basisgegevens
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="spelers.php">Spelers</a></li>
    <li><a class="dropdown-item" href="scholen.php">Scholen</a></li>
    <li><a class="dropdown-item" href="toernooi.php">Toernooien</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Aanmelden
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="handmatig.php">Handmatig</a></li>
    <li><a class="dropdown-item" href="importeren.php">Importeren</a></li>
    <li><a class="dropdown-item" href="#">Sluiten</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Wedstrijden
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Toernooi Overzicht</a></li>
    <li><a class="dropdown-item" href="#">Uitslagen Beheren</a></li>
    <li><a class="dropdown-item" href="#">Indelen Volgende Ronde</a></li>
  </ul>
</div>

</body>
</html>