<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>EXERCISE 3</title>
</head>
<body>
<center>
    <div class="card" style="width: 25rem; margin-top:15%;">
        <div class="card-header jumbotron">
        <h3>Validate Email</h3>
        </div>
    <div class="card-body" >
        <form method="POST">
            <input type="text" name="email">
            <button type="submit" name="check">Check</button>
        </form>
    </div>
    <div>
    </div class="card-footer">
        <?php

            class Email{    
                                
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                function email()
                {
                    $email = $_POST['email'];
                    $data = [];
                    if($this->test_input($email)){
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $data["message"] = "Invalid Email Address";
                            return $data;
                        }else{
                            $data["message"] = "Email Address is Valid";
                            return $data;
                        }
                    }
                    
                }

            }

            if(isset($_POST["check"])){
                $validate = new Email();
                $validate->email();
                $test = $validate->email();
                print_r($test["message"]);
            } 
                    
          
        ?>
    </div>
</center>
</body>
</html>