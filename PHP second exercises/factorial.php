<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Armstrong Numbers</title>
</head>
<style>
.container{
    width:600px;
}
#number{
    margin-left:10px;
}
</style>
<body>
<div class="container p-5 my-5 bg-secondary text-white">
<center>
<h3>FACTORIAL</h3>
</center>
<hr>
<br>
<form class="form-inline" method="GET">
  <div class="form-group mx-sm-3 mb-2">
    <label >Input a Numbers: </label>
    <input type="text" class="form-control" id="number" name="number">
  </div>
  <button type="submit" class="btn btn-primary mb-2"  name = "convert">Convert</button>
</form>
<br>
<hr>
<?php
    if(isset($_GET["convert"])){
        $getInput = $_GET['number'];

        if ($getInput<0){
            $getInput = abs($getInput);
            echo "<center> Absolute Value :  $getInput ";
        }else{  
            for ($ctr =$getInput-1;$ctr >0 ;$ctr--){
                $getInput*=$ctr;
            } 
            echo "<center>Factorial :  $getInput ";  
        }
        
       
    }
?>
</div>


</body>
</html>
</body>
</html>
<?php 

?>