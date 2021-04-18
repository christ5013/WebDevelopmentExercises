
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
           

                                function appendContent($fileName, $content, $lineNumber){
                                    if(file_exists($fileName)){

                                        $file = fopen($fileName, 'a');
                                        $lines = file ($fileName, FILE_IGNORE_NEW_LINES);
                                        array_splice($lines, $lineNumber-1, 0, $content);
                                        file_put_contents($fileName, join("\n", ($lines)));
                                        echo "Successfully added";
                                    fclose($file);

                                    }
                                }      
                                appendContent('text.txt', 'Arigato gozaimasu',5);

                                
                           
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
