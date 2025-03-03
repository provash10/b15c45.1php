<!-- //Connected this page -->
<?php
     include 'config.php';
?>

<!-- For INSERT Data Query -->
<?php
    // for Form Submit
    // <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    if(isset($_POST['submit'])){
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $class   = $_POST['class'];
        $roll    = $_POST['roll'];
        $address = $_POST['address'];
    
        $query = "INSERT INTO students (name, roll, class, phone, address, email) VALUES ('$name','$roll','$class','$phone','$address','$email')";
        $insertData = mysqli_query($connection, $query);
        
        // for student kist loaded
        // if($insertData == true){}
        if($insertData){
          header('location:index.php');
        }
        else{
          echo 'Failed to insert data!';
        }
    }

    // $name    = $_POST['name'];
    // $email   = $_POST['email'];
    // $phone   = $_POST['phone'];
    // $class   = $_POST['class'];
    // $roll    = $_POST['roll'];
    // $address = $_POST['address'];
    
    // $query = "INSERT INTO students (name, roll, class, phone, address, email) VALUES ('$name','$roll','$class','$phone','$address','$email')";
    // $insertData = mysqli_query($connection, $query);

?>

<!-- For Data Insert create >>> create.php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- bootstrap css code -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Create Student Data List</h1>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create Student Data</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Bootstrap Form -->
<div class="container"> 
    <form action="" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name*</label>
            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter Student Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email*</label>
            <input type="email" class="form-control" name="email" id="email" value="" placeholder="Enter Student Email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone*</label>
            <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="Enter Student Phone" required>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class*</label>
            <input type="number" class="form-control" name="class" id="class" value="" placeholder="Enter Student Class" required>
        </div>

        <div class="mb-3">
            <label for="roll" class="form-label">Roll*</label>
            <input type="number" class="form-control" name="roll" id="roll" value="" placeholder="Enter Student Roll" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address*</label>
            <!-- <input type="number" class="form-control" name="roll" id="roll" value="" placeholder="Enter Student Roll" required> -->
             <textarea class="form-label" name="address" id="address" value="" placeholder="Enter Student Roll" required> </textarea>
        </div>
        
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<!-- bootstrap js code  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>