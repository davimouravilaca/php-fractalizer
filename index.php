<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Fractalizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="text-bg-dark p-3">
    <div class="container-sm">
    <h1 class="display-1">PHP Fractalizer <img src="favicon.svg" height="90"></h1> 
    <p class="lead">online php fractal generator</p>
    <hr>


    <div class="row">
    <div class="col-4 border border-secondary rounded">
    <h3>Select fractal type:</h3>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Von Koch Snowflake
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
      <label class="form-check-label espacamento-label" for="flexRadioDisabled">
        More soon...
      </label>
    </div>
    </div>

    <div class="col-5">
    <form action="snowflake.php" method="get">
    <label for="stage" class="form-label"><h3>Fractal Stage: <strong><span id="rangeValue">4</span></strong></h3></label>
    <input type="range" name="stage" class="form-range" min="1" max="7" id="stage" oninput="updateRangeValue(this.value)">
    <input class="btn btn-secondary" type="submit" value="Generate">
    </form>
    </div>
    </div>
    </div>
    <footer>
        <p> Made with Love, <img width="25" src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php"/> and <img width="20" src="https://user-images.githubusercontent.com/25181517/183898054-b3d693d4-dafb-4808-a509-bab54cf5de34.png" alt="Bootstrap" title="Bootstrap"/> by <a href="https://davimouravilaca.github.io/" target="_blank">Star Software</a> &copy; <?= date("Y") ?> </p>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>