<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>EXERCISE 1</title>
</head>
<body>
<center>
    <div class="card" style="width: 25rem; margin-top:15%;">
        <div class="card-header jumbotron">
        <h3>Calculate the difference between two dates</h3>
        </div>
    <div class="card-body" >
        <?php 

            // Calculate difference between Dates
            class Date{
                public $date1;
                public $date2;
                public $diff;
            
                function differenceBetweenDates($date1,$date2){
                    $diff = date_create($date1)->diff(date_create($date2));
                    echo "First Date: ".$date1."<br>";
                    echo "Second Date: ".$date2."<br>";
                    echo  "Difference: ".$diff->y. " years, ".$diff->m." months, ".$diff->d." days ";
                }

            }
            $date = new Date;
            $date->differenceBetweenDates("2013-09-04","1981-11-03");

            
            ?>
    </div>
    </div>
</center>
</body>
</html>

