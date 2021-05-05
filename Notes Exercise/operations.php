<?php 

$con = new mysqli("localhost","root","","todolist");

$id=0;
$task="";


//insert data to the database
if (isset($_POST['add'])) {
    $create = $_POST['createInput'];
   $con->query("INSERT INTO `notes`(`task`) VALUES ('$create')"); 
}

//edit 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query=$con->query("SELECT * FROM `notes` WHERE  id='$id'");

    if (count([$query]) == 1) {
        $row = $query->fetch_array();
        $task = $row['task'];

    }

   
}
//update
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $task =$_POST['taskname'];
    $con->query("UPDATE notes SET task='$task' WHERE id=$id");
}

//delete and save to trash
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $con->query("INSERT INTO trash (task) SELECT task FROM notes WHERE id='$id'");
    $con->query("DELETE FROM notes WHERE id = '$id'");

}


// restore task
if(isset($_GET['restore'])){
    $id = $_GET['restore'];
    $con->query("INSERT INTO notes (task) SELECT task FROM trash WHERE id='$id'");
    $con->query("DELETE FROM trash WHERE id = '$id'");
}

//delete trash

if(isset($_GET['deleted'])){
    $id = $_GET['deleted'];
    $con->query("DELETE FROM trash WHERE id = '$id'");
}

?>