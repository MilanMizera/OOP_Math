<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulačka</title>
    <link rel="stylesheet" href="style.css?v=<?php
    echo time(); ?> ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php
require_once("math.php");

use math\Math;
?>
<div class="calculator_container">
    <h1 class="form_title"> Matematická kalkulačka</h1>

    <form method="post" action="index.php">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <div class="col">
                <input value="" type="text" name="number1" class="form-control" id="inputEmail3"
                       placeholder="Zde zadejte Vaše první číslo">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input value="" type="text" name="number2" class="form-control" id="inputPassword3"
                       placeholder="Zde zadejte Vaše druhé číslo">
            </div>
        </div>

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0"></legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operation" id="gridRadios1" value="+"
                               checked>
                        <label class="form-check-label" for="gridRadios1">
                            Sčítání +
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operation" id="gridRadios2" value="-">
                        <label class="form-check-label" for="gridRadios2">
                            Odčítání -
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operation" id="gridRadios3" value="*">
                        <label class="form-check-label" for="gridRadios2">
                            Násobení x
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operation" id="gridRadios4" value="/">
                        <label class="form-check-label" for="gridRadios2">
                            Dělení ÷
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="col">
                <button type="submit" name="submit" class="btn btn-primary">Odeslat</button>
            </div>
        </div>
    </form>

    <?php
    $math = new Math();
    $math->calculation();
    ?>

    <h2 class="my_result"><b>Výsledek:</b></h2>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
</body>
</html>