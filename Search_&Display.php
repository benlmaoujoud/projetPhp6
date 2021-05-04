<?php
include 'connecting.php';
$letterErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["letr"])) {
    $letterErr = "**Search for something  ! ";
    }

    else {
        $varLettre = filter_var($_POST["letr"],FILTER_SANITIZE_STRING);
        if ((!preg_match("/^[a-zA-Z]*$/", $varLettre) ) && (strlen($varLettre) != 1)) {
            $letterErr = "****Only One letter allowed";
        }
    }

    $letter = filter_var($_POST['letr'],FILTER_SANITIZE_STRING);

    $sql = "SELECT nom_fr_fr, capitale, population FROM pays WHERE nom_fr_fr LIKE '" . $letter."%'" ;
    $result1 = mysqli_query($conn,$sql);
    echo "<table>";
    if(mysqli_num_rows($result1)>0){
        while($row = mysqli_fetch_assoc($result1)) {
            echo "<tr><td>". $row['nom_fr_fr'] ."</td><td>". $row['capitale'] ."</td><td>". $row['population'] ."</td></tr>";

        }
    }
    echo "</table>";
}

?>