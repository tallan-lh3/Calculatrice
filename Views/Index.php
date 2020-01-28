<?php
/*GESTION DES ERREURS PHP*/
ini_set('display_errors', 'on');
error_reporting(-1);
require('../Models/result.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div class="container container-css">
        <div class="row">
            <!-- Calculatrice -->
            <section class="mx-auto col-8 col-sm-7 col-md-6 col-lg-4 col-xl-4 calculator">
            <p class="reset-button h2 mt-2 w-25 mx-auto text-center "><a href="Views/Index.php">RESET</a></p>
                <!-- Inputs opération -->
                <form method="POST" action="">
                    <div class="w90 mt-4 d-flex justify-content-between mx-auto">
                        <input id="first-input" value="<?= isset($_POST['firstInput']) ? $_POST['firstInput'] : '' ?>" name="firstInput" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 css-field-operation" type="text">
                        
                        <input id="second-input" value="<?= isset($_POST['secondInput']) ? $_POST['secondInput'] : '' ?>" name="secondInput" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 css-field-operation" type="text">
                        <input id="third-input" value="<?= isset($_POST['thirdInput']) ? $_POST['thirdInput'] : '' ?>" name="thirdInput" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 css-field-operation" type="text">
                    </div>
                    <!-- Ecran -->
                    <div class="mx-auto screen h1"><?= isset($result) ? $result : '' ?></div>
                    <!-- Zone des touches -->
                    <div class="mx-auto key-area">
                        <div class="d-flex w-100 h25">
                            <input type="button" value=1 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value=2 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value=3 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value="+" class="operator touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />

                        </div>
                        <div class="d-flex w-100 h25">
                            <input type="button" value=5 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value=6 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value=7 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value="-" class="operator touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                        </div>
                        <div class="d-flex w-100 h25">
                            <input type="button" value=7 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value=8 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value=9 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value="*" class="operator touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                        </div>
                        <div class="d-flex w-100 h25">
                            <input id="egal" type="submit" name="submit-result" value="=" class="key2-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value=0 class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value="." class="number touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                            <input type="button" value="/" class="operator touch key-css col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" />
                        </div>
                        <p class="incorrect-synthaxe"></p>

                    </div>
                </form>
            </section>
        </div>
    </div>
    <!--Script jQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--Script Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!--Fontawesome-->
    <script src="https://kit.fontawesome.com/ff01962916.js" crossorigin="anonymous"></script>

    <!--Script perso-->
    <script src="assets/js/main.js"></script>
</body>

</html>