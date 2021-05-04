<?php
include 'connecting.php';

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);

    return  (htmlspecialchars($data));

}

$paysErr = $capitaleErr = $popuErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check1
    if (empty($_POST["pays"])) {
        $paysErr = "**Pays is required ! ";
    } else {
        $pays =filter_var(testInput($_POST["pays"]),FILTER_SANITIZE_STRING);
        if (!preg_match("/^[a-zA-Z ]*$/", $pays)) {
            $paysErr = "****Only letters and white space allowed";
        }
    }
    //check2
    if (empty($_POST["cap"])) {
        $capitaleErr = "**Capital is required ! ";
    } else {
        $capi = filter_var(testInput($_POST["cap"]),FILTER_SANITIZE_STRING);
        if (!preg_match("/^[a-zA-Z ]*$/", $capi)) {
            $capitaleErr = "***Only letters and white space allowed";
        }
    }
    //check3
    if (empty($_POST["pop"])) {
        $popuErr = "**population is required ! ";
    } else {
        $varPop = filter_var(testInput($_POST["pop"]),FILTER_SANITIZE_NUMBER_INT);
        if (!preg_match("/^[0-9]*$/", $varPop)) {
            $popuErr = "****Only Numbers  allowed";
        }
    }
}
?>