<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

   $marchandise = $_POST["CAmarchandise"];
   $profession = $_POST["CAprestationprof"];
   $commerciale = $_POST["CAprestationcommercial"];
   $Accre = $_POST["ACCRE"];

   if (! is_numeric($marchandise) or !is_numeric($profession) or !is_numeric($commerciale) ){
        header('Location:index.php');
   }


   if (isset($marchandise)){
        $resultat_marchandise = $marchandise * 12.8 / 100;
        ?> <div>
             <p>Vous devez payez <?php  echo $resultat_marchandise  ?>€ en contisation sociale</p>
        </div>
           <?php
                if ($resultat_marchandise >= 34000){ ?>
                <p>Vous devez payez une TVA en plus</p> 
                <?php
            
            } else {
                echo "Vous ne devez pas payez de TVA";
            }

   }

   if (isset($profession)){
        $resultat_profession = $profession * 22 / 100;
        ?> <div>
            <p>Vous devez payez <?php echo $resultat_profession ?> € en contisation sociale</p>
           </div>
           <?php
                if ($resultat_profession >= 34000){ ?>
                    <p>Vous devez payez une TVA en plus</p>
                    <?php
                
                } else {
                    echo "Vous ne devez pas payez de TVA";
                }

   }

   if (isset($commerciale)){
        $resultat_commerciale = $commerciale * 22 / 100;
        ?> <div>
            <p>Vous devez payez <?php echo $resultat_commerciale ?> € en contisation sociale </p>
           </div>
           <?php
            if ($resultat_commerciale >= 34000){ ?>
                <p>Vous devez payez une TVA en plus</p>
                <?php
            
            } else {
                echo "Vous ne devez pas payez de TVA";
            }

   }

   $totalpaye = $resultat_commerciale + $resultat_marchandise + $resultat_profession;

   if (isset($Accre)and $Accre == "Oui"){ ?>
        <p>Vous deviez payez <?php echo $totalpaye ?>, ce total tombe a 0 euro </p>
        <?php
   } else { ?>
        <p>Vous devez payez un total de  <?php echo $totalpaye ?> </p>
        <?php
   }

    ?>
</body>
</html>