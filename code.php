

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>carear page</title>
  </head>
  <body>
    <!-- As a link -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php ?> display.php">JOB DESCRIPTION</a>
  </div>
</nav>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $jobTitle = $_POST['jobTitle'];
    $location = $_POST['location'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "job description";

    // Create a database connection
    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{ 
        $sql = "INSERT INTO `jobdesc` (`Job title`, `Location`, `Skills required`, `Experience required`, `Job description`) VALUES ('$jobTitle', '$location', '$skills', '$experience', '$description');";
        $result = mysqli_query($conn, $sql); 

        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
          }

          else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
    }
}  
?>



<div class="container mt-3" >
<h2> please enter your details ! </h2>
    <form action="code.php" method="post">

    <label for="jobTitle">Job title:</label><br>
        <input type="text" name = "jobTitle" class="form-control" aria-label="job title" required><br>

    <label for="location">location:</label><br>
        <input type="text" name = "location" class="form-control"  aria-label="location" required><br>

    <label for="skills">Skills required:</label><br>
        <input type="text" name = "skills" class="form-control"  aria-label="skills" required><br>

    <label for="experience">Experience required:</label><br>
    <select name = "experience" class="form-select mb-3" aria-label="Default select example" required>
        <option selected></option>
        <option value="1">fresher</option>
        <option value="2">at least 1 year experinced</option>
        <option value="3">more than 2 years experience</option>
    </select>
    <div class="mb-3">
        <label for="description" class="form-label">Job Description:</label>
        <textarea name = "description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
