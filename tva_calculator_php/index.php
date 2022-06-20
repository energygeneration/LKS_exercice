<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVA_Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">TVA_Calculator</a>
          <a class="navbar-brand text-white" href="calculatric.php">Autre</a>
        </div>
      </nav>

    <div class="text-center">
      <h1 class="my-5">Calcul de la TVA</h1>
      <form action="" method="post">
        <div>
          <label for="tva">TVA%</label>
          <input type="number" name="tva" id="tva" class="mb-3" value="18">
        </div>
        <div>
          <label for="ht">Prix hors taxe (HT):</label>
          <input type="number" name="ht" id="ht" class="mb-3">
        </div>
        <button type="submit" class="btn btn-primary my-4 ms-5">Calculer</button>
      </form>

<?php
if(isset ($_POST['tva']) && isset($_POST['ht']) ){
  $tva = $_POST['tva']/100;
  $ht = $_POST['ht'];
  if($tva <= 0){
      echo "Le pourcentage de la tva ne doit pas etre inférieur ou egal à 0";
  }
  else{
      $result = $tva * $ht;
      echo "votre TVA = $result";
  }
}
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>