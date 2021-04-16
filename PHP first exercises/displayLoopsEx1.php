
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Using Loops</title>
</head>
<body>
    <?php
        $data = array(
            "Student1" => array(
                "Name" => "John Carg",
                "Age" => "17",
                "School" => "Ahlcon Public school",
            ),
            "Student2" => array(
                "Name" => "Smith Soy",
                "Age" => "16",
                "School" => "St. Marie school",
            ),
            "Student3" => array(
                "Name" => "Charle Rena  ",
                "Age" => "16",
                "School" => "St. Columba school",
            )
        );

        $key1 = array_keys($data);
        for($ctr = 0; $ctr < count($data); $ctr++) {
            echo $key1[$ctr] ."<br><br>";
            foreach($data[$key1[$ctr]] as $key2 => $value) {
                echo $key2 . " : " . $value . "<br>";
            }
            echo "<br><br>";
        }   
    ?>
</body>
</html>
