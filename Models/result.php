<?php
// Lorsque le formulaire est envoyé

if (isset($_POST['submit-result']) && !empty($_POST)) {
    // Convertion du premier input en float
    $_POST['firstInput'] = floatval($_POST['firstInput']);
    $operator = $_POST['secondInput'];
    // Convertion du premier input en float
    $_POST['thirdInput'] = floatval($_POST['thirdInput']);


    switch ($operator) {
        case "+":
            $result = $_POST['firstInput'] +  $_POST['thirdInput'];
            break;
        case "-":
            $result = $_POST['firstInput'] -  $_POST['thirdInput'];
            break;
        case "/":
            $result = $_POST['firstInput'] /  $_POST['thirdInput'];
            break;
        case "*":
            $result = $_POST['firstInput'] *  $_POST['thirdInput'];
            break;
        default:
            break;
    }
    return $result;
}
