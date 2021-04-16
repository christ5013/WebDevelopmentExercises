<?php
  $start = 1;
  $end = 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISION TABLE</title>
</head>
<style>
    h2{
        text-align:center;
    }
    table{
        text-align:center;
    }
    th,td{
        font-size:20px;
        padding:10px;
    }
    th,tr,td{
        border:1px solid gray;     
    }
    table{
    border-collapse: collapse;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
<h2>DIVISION TABLE</h2>
<table class="center" BORDER=1>
<?php
  print("<tr>");
  print("<th> </th>");
  for ($count = $start;$count <= $end;$count++)
    print("<th>$count</th>");
  print("</tr>");

  for ($count = $start;$count <= $end;$count++){
    print("<tr><th>$count</th>");
    for ($ctr= $start;$ctr <= $end;$ctr++){
        $result = $count / $ctr;
        printf("<td>%.2f</td>",
               $result); 
      }
    print("</tr>");
  }
?> 
</table>
</body>
</html>

