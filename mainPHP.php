<?php
session_start(); 

include 'Add_Data_Form.php';
include 'Search_&Display.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pays du Monde </title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container search-container">
            <form action="mainPHP.php" method="POST">
                <h1> I want to search for ...</h1>
                <input name="letr" type="text" placeholder="Premier lettre"/>
                <span class="error"><?php echo $letterErr;?> </span>

                <button id="btn">search</button> 

            </form>
        </div>
        <div class="form-container s1-in-container">
            <form action="mainPHP.php" method="POST">
                <h1>Add Population, Capital !</h1>
                <input type="text"  name="pays" placeholder="Le pays choisie" />
                <span class="error"><?php echo $paysErr; ?> </span>
                <span class="error"><?php echo $flag; ?> </span>

                <input type="text" name="cap" placeholder="Capitale" />
                <span class="error"><?php echo $capitaleErr; ?> </span>

                <input type="text" name="pop" placeholder="Population"/>
                <span class="error"><?php echo $popuErr; ?> </span>

                <button>Ajouter</button>
                <div>   
                <?php
                if(isset($_SESSION['status'])){
                    $var = $_SESSION['status'];
                    echo "<script>alert(\"$var\")</script>";
}
                    unset($_SESSION['status']);
                
                ?>
                </div>
            </form>
        </div>
        <div class="mpays-container">
            <div class="mpays">
                <div class="mpays-panel mpays-left" >
                    <h1 class="aff_tab">Liste des capitales du monde par population</h1>
                    <div id="div1">

                    </div>
                        <button class="ghost1" id="Go2"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                </div>
                <div class="mpays-panel mpays-right">
                    <h1 class="right_we">Number of Country</h1>
                    <p class="num_pays"><?php echo $total_pays?></p>
                    <button class="ghost" id="Go1">Go to search </button>
                </div>
            </div>
        </div>
    </div>
    <script src="./main.js "></script>
    <script src="https://kit.fontawesome.com/e2504ed527.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <script type="text/javascript">

    $(".num_pays").counterUp({delay:15,time:2500});

  </script>

</body>
</html>

