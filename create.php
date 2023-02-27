<?php
  session_start();
 
  if(isset($_SESSION['username'])){
    // $navbar = "1";
    // $logindisplay = "0";
    $username = $_SESSION['username'];
    //$password = $_SESSION['password'];
} else {
    header('Location:404.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- nav bar starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="image/shop.png" style="width:35px">ShopOn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-primary" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="create.php">Add user</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="files.php">Files</a>
        </li>
        <li class="nav-item">
          <a class="btn text-primary text-dark fw-bold btn-danger" href="logout.php">Logout</a>
        </li>
      </ul>
        <h2 class="text-light"><?php echo $_SESSION["username"];?></h2>
    </div>
  </div>
</nav>
    <!-- nav bar ends -->
    <div class="container border mt-3">
    <div class="alert alert-primary text-center"><h2>Registration Form</h2>
    </div>
    
    <form method="post" action="store.php"  enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter name</label>
    <input type="name" name="name" required placeholder="Enter your name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Usernmae</label>
    <input type="text" name="username" required class="form-control" placeholder="Enter username" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile number</label>
    <input type="number" name="mobile" required placeholder="Enter mobile number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">E-mail</label>
    <input type="email" name="email" required placeholder="Enter your e-mail" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="address" required placeholder="Enter your address" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Father name</label>
    <input type="text" name="father_name" required placeholder="Enter father name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mother name</label>
    <input type="text" name="mother_name" required placeholder="Enter mother name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dob</label>
    <input type="date" name="dob" required  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Select gender</label>
    <input type="text" name="gender" required class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload file</label>
    <input type="file" name="myfile" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-grid gap-2">
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
    </div>
    </body>
</html>
<!-- name	username	mobile	email	address	father_name	mother_name	dob	gender -->
