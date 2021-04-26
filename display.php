<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "job description";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


$sql = "SELECT * FROM `jobdesc`";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br><br><br>";
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);

?>
<h1 style="color:green" ><?php echo  $row['Job title']?> <br></h1> 
<b style="color:green"> Location: </b> <?php echo $row['Location']?><br><b style="color:green">Skills required: </b><br> <?php echo $row['Skills required']?> <b style="color:green"><br>Experience required:</b><?php echo $row['Experience required'] ?> <b style="color:green"><br>Job description:</b> <?php echo $row['Job description']?><br><br> ;
 <?php   echo "<br>";
}

?>