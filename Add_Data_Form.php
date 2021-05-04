<?php
include 'connecting.php';
include'ErreurException.php';
session_start(); 
$flag = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $varPay = filter_var($_POST['pays'],FILTER_SANITIZE_STRING);
    $varCap = filter_var($_POST['cap'],FILTER_SANITIZE_STRING); 
    $varPop = filter_var($_POST['pop'],FILTER_SANITIZE_NUMBER_INT); 
    $check="SELECT * FROM pays WHERE nom_fr_fr = '$varPay'";
    $req = mysqli_query($conn,$check);
    $total_res =  mysqli_num_rows($req); 
    
    if ($total_res>=1 && $varPop!="" )
    { 
        $newdata="UPDATE pays SET capitale = '$varCap',population = '$varPop' WHERE nom_fr_fr = '$varPay'";
        $qr=mysqli_query($conn,$newdata);
            if (!$qr){
                die("Error!!! ".$query);            
            }
            else {
                $_SESSION['status'] = "DATA INSERTED SUCCESSFULY"; 
            }         
    }
    
    else 
    {
        if($total_res <= 0) {
            $flag = "**Pays n'existe pas ! ! ";
        }
            else {
                $_SESSION['status'] = "OPERATION FAILED"; 
            }
    }

}
?>