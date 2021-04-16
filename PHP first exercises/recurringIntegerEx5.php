<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Recurring Integers</title>
</head>
<body>
<div class="container p-3 my-5 bg-dark text-white" style="width:600px; height:250px">
    <center>
    <h3>Delete Recurring Integer</h3>
    </center>
    <br><hr>
    <?php
        $arrNumber = array(1,8,4,5,4,7,1,8,5,1,0,4,78,5,78,10,9,4,9,2);
        sort($arrNumber);
        echo "<center>Sorted Array: ";
        for($count = 0; $count < count($arrNumber);$count++){
            echo $arrNumber[$count]." ";
        }
        echo "<br><br> Deleting Recurring Integer: ";
        

        $unique = array_unique($arrNumber);
        sort($unique);
        for($ctr = 0; $ctr < count($unique);$ctr++){
            echo $unique[$ctr]." , ";
        }
      
    ?>
</div>

</body>
</html>