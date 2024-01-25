<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\V\style\style.css">
    <?php
    session_start()
    ?>
</head>

<body>
    <div class="parent">
        <!--set all division for grid-->
       <div class="div1">  
           <?php echo $_SESSION["shuffled_list"]["PLACE_1"] ?>
       </div>
       <div class="div2"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_2"] ?>
       </div>
       <div class="div3"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_3"] ?>
       </div>
       <div class="div4"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_4"] ?>
       </div>
       <div class="div5"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_5"] ?>
       </div>
       <div class="div6"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_6"] ?>
       </div>
       <div class="div7"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_7"] ?>
       </div>
       <div class="div8"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_8"] ?>
       </div>
       <div class="div9"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_9"] ?>
       </div>
       <div class="div10"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_10"] ?>
       </div>
       <div class="div11"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_11"] ?>
       </div>
       <div class="div12"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_12"] ?>
       </div>
       <div class="div13"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_13"] ?>
       </div>
       <div class="div14"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_14"] ?>
       </div>
       <div class="div15"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_15"] ?>
       </div>
       <div class="div16"> 
           <?php echo $_SESSION["shuffled_list"]["PLACE_16"] ?>
       </div>
       <div class="div17"> 
           <?php echo "moussa" ?>
       </div>
       <div class="div18"> 

       </div>
       <div class="div19"> 

       </div>
       <div class="div20"> 

       </div>
       <div class="div21"> 

       </div>            
       <div class="index1"> 
            <form action="../C/displayShuffle.action.php" method="POST">
                <input type="submit" value="SHUFFLE" />
            </form>
        </div>
       <div class="index2">
            <div class="formulaire">   
                <form enctype="multipart/form-data" action="..\C\getCSV.action.php" method="post">
                    <input class="file" name="file" type="file" /> 
                    <div class="button">
                        <input class="submit" name="submit" type="submit" value="valider" />
                </form>
            </div>

   </div>

</body>