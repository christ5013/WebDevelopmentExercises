
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <title>EXERCISE 2</title>
   </head>
   <body>
   <center>
   <div class="card" style="width: 25rem; margin-left:50px; margin-top:20px;">
       <div class="card-header jumbotron">
       <h3>Add input to a Select dropdown</h3>
       </div>
     <div class="card-body" style="margin-left:30px;">
     <form  method="POST">
        <input type="text" name="input" placeholder="Enter a word">
        <button name="add" type="submit">ADD</button>
        <br>
        <br>
       
    </form>
      
            <?php 
         
                // class Dropdown{
                //     function addOption(){
                //         if (isset($_POST['add'])){
                //             $holder = $_POST['dropdown'];
                //             $input = $_POST['input'];
                //             echo "<option value='$input'>$input</option>";

                //             // for($i=0;$i<count($holder);$i++){
                //             //     if ($i==count($holder)-1){
                //             //         echo "<option value='$input'>$input</option>";
                //             //     }
                //             // }

                //         }
                //     }
            
                // }

                // $dropdown = new Dropdown;
                // $dropdown->addOption(); -->
                session_start();
                class Dropdown{
                    public $getInput;

                    public function __construct($getInput)
                    {
                        $this->getInput = $getInput;
                    }

                    public function addOption()
                    {
                        if (!isset($_SESSION['option'])) {
                            $_SESSION['option'] = [];
                        }
                        array_push($_SESSION['option'], $this->getInput);
                        echo '<center><select name="dropdown" ></center>';
                        foreach ($_SESSION['option'] as $value) {
                            echo '<option value="' . $value . '">"' . $value . '"</option>';
                        }
                        echo '</select>';
                    }
                }

                if (isset($_POST['add'])) {
                    $getInput = $_POST['input'];
                    $newInput = new Dropdown($getInput);
                    $newInput->addOption();
                } 
            
            ?>
            
        </select>
     </div>
     </center>
   </div>
   </body>
   </html>
  
   