<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- custom css file link -->
  <link rel="stylesheet" href="./css/style.css">
  <title>pdo_toets_herkansing</title>
</head>

<body>


  <div class="container">

    <div class="mb-3">
      <h1 class="text-center">Maak je eigen Burrito</h1>
    </div>
    <form action="./insert.php" method="POST">
      <div class="mb-3">
        <label for="Burritoformaat" class="form-label">Burritoformaat</label>
        <select class="form-select" aria-label="Default select example" name="Burritoformaat" required>
          <option selected>Maak je keuze</option>
          <option value="20">20 cm</option>
          <option value="25">25 cm</option>
          <option value="30">30 cm</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="saus" class="form-label">Saus</label>
        <select class="form-select" aria-label="Default select example" name="saus" required>
          <option selected>Maak je keuze</option>
          <option value="Salsa crudo">Salsa crudo</option>
          <option value="Salsa verde">Salsa verde</option>
          <option value="Salsa roja">Salsa roja</option>
          <option value="Créme fraiche">Créme fraiche</option>
        </select>
      </div>


      <div class="mb-3">
        <label for="Bonen" class="form-label">Bonen</label>
        <div class="form-check">
          <input class="form-check-input" name="Bonen" value="vegen" type="radio" name="Bonen" id="Bonen">
          <label class="form-check-label" for="Kidney Bonen">
          Kidney Bonen
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="Bonen" value="Bonen" type="radio" name="Bonen" id="Bonen">
          <label class="form-check-label" for="Zwarte Bonen">
          Zwarte Bonen
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="Bonen" value="Bonen" type="radio" name="Bonen" id="Bonen">
          <label class="form-check-label" for="Bruine Bonen">
          Bruine Bonen
          </label>
        </div>
      </div>


      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">rijst</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="bonen" value="rijst" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
          Witte Rijst
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="rijst" type="checkbox" value="rijst" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
          Zwarte Rijst
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" name="rijst" type="checkbox" value="rijst" id="flexCheckChecked" >
          <label class="form-check-label" for="flexCheckChecked">
          Bruine Rijst
          </label>
        </div>
      </div>


      <div class="mb-3">
        <div class="d-grid gap-2">
          <button class="btn btn-primary" name="submit" type="submit">Bestel</button>
        </div>
      </div>
    </form>
  </div>


  <?php 
  
  include_once('read.php');
  ?>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>