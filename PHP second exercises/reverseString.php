<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Reversing String</title>
</head>

<style>
.container{
    margin-top:100px;
      max-width: 860px;
      display: flex;
  }
  .form-control{
     width: 250px;
 }
</style>
<body>
<div class="container" style="max-width: 600px;">
            <div class="card-deck" style="padding-left: 70px;">
                <div class="card ">

                    <div class="card-header jumbotron">
                        <h3 class="h3Class">Reversing String</h3>
                    </div>
                    <div class="card-body">
                    <center>
                        <form>
                            <div class="form-group">
                                <label>Enter a string: </label>
                                <input type="text" class="form-control" placeholder="Enter a string" name="string"> 
                                <br>
                                    <button type="submit" class="btn btn-primary" style="width: 150px;" name="reverse">Reverse</button>
                              <hr>
                               <div>
                                <?php
                                     if(isset($_GET["reverse"])){
                                        $getInput = $_GET['string'];
                                        $reverseString = strrev($getInput);
                                        $stringLen = strlen($reverseString);
                                        if ( $stringLen%2==0){
                                            echo substr( $reverseString, 0,  ($stringLen/2)); 
                                        }else{
                                            echo $reverseString;
                                        }
                                     }
                        
                                ?>
                               </div>
                        </form>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>