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
<div class="container p-5 my-5 bg-dark text-white">
<center>
<h3>CHECK IF THE GIVEN NUMBER IS ARMSTRONG OR NOT</h3>
</center>
<hr>
<br>
<form class="form-inline" method="GET">
  <div class="form-group mx-sm-3 mb-2">
    <label >Input a Numbers: </label>
    <input type="text" class="form-control" id="number" name="number">
  </div>
  <button type="submit" class="btn btn-primary mb-2"  name = "convert">Check</button>
</form>
<br>
<hr>
<?php
    if(isset($_GET["convert"])){
        $getInput = $_GET['number'];
        $result = 0;
        for ($ctr =0;$ctr< strlen($getInput);$ctr++){
            $result += $getInput[$ctr]**3;
        }
        if($getInput == $result){
            echo "<center> ARMSTRONG NUMBER";
        }else{
            echo "<center> NOT ARMSTRONG NUMBER";
        }
        
    }
?>
</div>


</body>
</html>

