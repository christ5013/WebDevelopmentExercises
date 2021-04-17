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
    <title>Read and Display file Line</title>
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
                     <center>
                    <div class="card-header jumbotron">
                        <h3 class="h3Class">Read and Display file Line</h3>
                    </div>
                    <div class="card-body">
                   
        
                          <div class="jumbotron">
                            <?php
                               function getFileLine($fileName){
                                     // $file="sampleText.txt";
                                    $strLen = strlen($fileName);   
                                    $fileLine = file($fileName);     
                                    $counter = 0;  

                                    for($ctr=0;$ctr<  $strLen;$ctr++){
                                         $stringToUpper = strtoupper($fileName);
                                         if($fileName[$ctr]=="A" || $fileName[$ctr]=="E" || $fileName[$ctr]=="I" || $fileName[$ctr]=="O" || $fileName[$ctr]=="U"){
                                            $counter++;
                                         }
                                     }
                                     if ($counter%2 ==1){
                                         echo $fileLine[3] ;
                                        //echo $fileLine[5];
                                     }
                                     if($counter%2 == 0){
                                         echo $fileLine[2] ;
                                        //echo $fileLine[4];
                                     }
                                     if (file_exists($fileName)){
                                         echo " ";
                                     }else{
                                         echo $fileName."No File Exist ";
                                     }
                        
                               }  
                               getFileLine("sampleText.txt");    
                               
                                ?>
                               </div>
                        
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>