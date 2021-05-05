
    <?php
include 'operations.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/4.1.3/css/boostrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>To Do List</title>
</head>

<style>
body {
    font-family: "Open Sans", sans-serif;
    line-height: 1.6;
    padding: 35px;
    text-align: center;
    background-image: url(https://unsplash.it/800?image=974);
}


.add-todo-input,
.edit-todo-input {
    outline: none;

}
.add-todo-input:focus,
.edit-todo-input:focus {
    border: none !important;
    box-shadow: none !important;
}
/* .container{
    opacity:0.5;
} */

table,tr,th,td{
    /* border:1px solid black; */
    padding:25px;
}

</style>
<body>

<div class="container m-10 p-2 rounded mx-auto bg-light shadow">
    <!-- App title section -->
    <div class="row m-1 p-4" >

            <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                <img src="./keepLogo.png" style="max-width:70px; max-height:70px; float:left;">
                <i style="float:left; margin-left:15px; margin-top:19px; color:black; font-size:22px">KEEP NOTES</i>
                <!-- Create todo section button-->
                    <form method=POST>
                        <div style="display:flex;float:right; " >

                            <div style="display:block;  ">
                                <a href="todolist.php" class="btn btn-secondary" style="color:white; text-decoration:none;">

                                    <i class="fa fa-book" style="font-size:20px;"></i>
                                    <h6>Notes</h6>

                                </a>
                                
                            </div>

                            <div style="display:block; margin-left:3px;">
                                <button class="btn btn-secondary" name="reminders">
                                    <i class="fa fa-bell-o" style="font-size:20px;"></i>
                                    <h6>Reminder</h6>
                                </button>
                            </div>
                            <div style="display:block; margin-left:3px;">
                                <button  class="btn btn-secondary" name="archieve">
                                    <i class="fa fa-archive" style="font-size:20px;"></i>
                                    <h6>Archive</h6>
                                </button>
                            </div>
                            <div style="display:block;margin-left:3px; ">
                                <a href="trash.php" class="btn btn-secondary" style="color:white; text-decoration:none;">

                                    <i class="fa fa-trash" style="font-size:20px;"></i>
                                    <h6>Trash</h6>

                                </a>
                            </div>

                        </div>
                    </form>
            </div>



    </div>
    <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
        <i class="fa fa-check bg-primary text-white rounded p-2"></i>
        <u>My Todo-s</u>
     </div>


     <form method="POST">
        <div class="row m-1 p-3">
            <div class="col col-11 mx-auto">

                <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">

                    <div class="col">
                        <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" type="text" name="createInput" placeholder="Input task here...">
                    </div>
                    <div class="col-auto px-0 mx-0 mr-2">
                        <button class="btn btn-primary"  name="add">Create Task</button>
                    </div>
                </div>

            </div>

         </div>
    </form>

    <br>
    <hr>
    <br>

   
    <center>
      <div class="card w-50" id="list">
            <div class="card-header">
                <h4>𝐓𝐑𝐀𝐒𝐇</h4>
            </div>
            <div class="card-body">

                <table >
                 <thead>

                     <tr>
                         
                        <th>𝐓𝐀𝐒𝐊</th>
                        <th>𝐃𝐀𝐓𝐄 𝐓𝐇𝐑𝐎𝐖𝐍</th>
                        <th></th>
                        <th></th>
                     </tr>

                </thead>
                <tbody>
                <?php
                        $con = new mysqli("localhost", "root", "", "todolist");
                        $result = $con->query("SELECT * FROM trash");
                        while ($row = $result->fetch_assoc()):
                        ?>
                    <tr>
                            <!-- data-toggle="modal" data-target="#exampleModalCenter" -->
                   
                    <td id="todotask" class="name">
                        <?php echo $row['task'] ?>
                    </td>
                    <td id="date"><?php echo $row['date'] ?></td>
                    <td>
                        <button class="btn btn-dark"> <a href="trash.php?restore=<?php echo $row['id']?>" style="text-decoration:none;">Restore</a></button>
                    </td>
                    <td> <button class="btn btn-dark"> <a href="trash.php?deleted=<?php echo $row['id']?>" style="text-decoration:none;">Delete</a></button></td>
               
                    </tr>
                 <?php endwhile;?>
                </tbody>
                </table>
            </div>
      </div>
    </center>
 
</body>
</html>