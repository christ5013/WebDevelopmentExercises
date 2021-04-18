
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
    <title>Append Content</title>
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
                        <h3 class="h3Class">Append Content</h3>
                    </div>
                    <div class="card-body">

                            <div style="padding-bottom:25px;">
                            <?php
                            //     function appendLine($file,$data,$lineNum)  {
 
                            //         $fp = fopen( $file, 'a' ); 
                                    
                                    
                                         
                            //             // $fp = fopen($file, '');
                            //              $counter = 0;
                            //              while (!feof($fp)) {
                            //                $counter++;
                                            
                            //                if ($counter == $lineNum){
                            //                  //return $line;
                                             
                            //                }
                                           
                            //              }
                                  
                            //             fwrite( $fp, $data);
                                  
                            //       }
                            //       echo appendLine("text.txt","insert me",1);
                            //   // $myFile = "text.txt"; 


                              // $fh = fopen($myFile, 'r');

                               //while ((feof ($fh) === false) )
                              // {
                               
                               //$theData = fgets($fh);
                               
                               //echo $theData.$fh[1];
                               
                              // }
                               
                           
                              
                               $lineNumber=1;
                               $fileOpen= fopen("text.txt","a");
                               $content =' secret';
                               $file=file("text.txt");

                                if (!feof($fileOpen)){

                                    $getLine = $file[$lineNumber];
                                    fwrite($fileOpen,$content);

                               }
                                  
                                fclose($fileOpen);

                            ?>
                            </div>
                        
                        
                    </div>
                    </center>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
