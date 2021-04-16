<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Recurring String</title>
</head>
<body>
<div class="container p-3 my-5 bg-dark text-white" style="width:600px; height:250px">
<center>

   <h3>Delete Recurring  String</h3>
</center>

<hr>
    <?php
    echo "<center>Sorted Array: ";
    $strArray = array("Winabel","Marjorie","Chymbee","Christine","Kyla","Jennifer","Jenie","Precy","Mara","Marjorie","Kyla","Jenie");
    sort($strArray);
    for ($count=0 ; $count <count($strArray) ; $count++ ){
        echo $strArray[$count]." , ";
    }
    echo "<br><br> Deleting Recurring String: ";
    $unique = array_unique($strArray);
    sort($unique);
    for($ctr = 0; $ctr < count($unique);$ctr++){
        echo $unique[$ctr]." , ";
    }

    ?>
    </div>
</body>
</html>