<?php
    session_start();
    $blank="image/blank.png";
    if(isset($_SESSION['username']) ){
        // $navbar = "1";
        // $logindisplay = "0";
        $username = $_SESSION['username'];
        //$password = $_SESSION['password'];
    } else {
        header('Location:404.php');
    }
    $con=new mysqli("localhost","root","","narayan");
    $sql="select * from customer";
    $rs=$con->query($sql);
    $con->close();
    $data=$rs->fetch_all(1);
    // echo "<pre>";
    // print_r($data);
    // echo "<pre>";
    // exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
    <title>Table</title>
</head>
<body>  
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="image/shop.png" style="width:35px;">ShopOn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Add user</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="files.php">Files</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger text-dark fw-bold btn-danger" href="logout.php">Logout</a>
        </li>
      
      </ul>
        <h3 class="text-light"><img src="image/admin.png" style="width:35px;margin-left:-20%"><?php echo $_SESSION["username"];?></h3>
    </div>
  </div>
</nav>
<!-- nav bar ends here -->
<div class="containe mt-3">
    <div class="alert alert-primary text-center fw-bold"><h6>Listing Page</h6>
</div>
</div>
    <table class="table table-striped table-hover">
        <thead class="table table-success">
        <tr>
            <td>S.no</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Username</th>
            <th>Mobile</th>
            <th>E-mail</th>
            <th>address</th>
            <th>Father_name</th>
            <th>Mother_name</th>
            <th>Dob</th>
            <th>Gender</th>
        </tr>
        </thead>
        <?php
            $index=0;
            foreach($data as $info){ ?>
        
        <tbody>
            <tr>
            <!-- echo ($info["profile"]?$info["profile"]:$blank)||"$blank"; -->
                <td><?=++$index?></td>
                <td><img src="<?php echo $info["profile"]?$info["profile"]:$blank;?>" class="rimage" style="width:30px"></td>
                <td><?=$info['name'];?></td>
                <td><?=$info['username'];?></td>
                <td><?=$info['mobile'];?></td>
                <td><?=$info['email'];?></td>
                <td><?=$info['address'];?></td>
                <td><?=$info['father_name'];?></td>
                <td><?=$info['mother_name'];?></td>
                <td><?=$info['dob'];?></td>
                <td><?=$info['gender'];?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <!-- footer area -->
		<footer class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading"><a href="#" class="logo"><img src="image/shop.png" style="width:60px;">ShopOn.com</a></h2>
						<p class="menu">
							<a href="#">Home</a>
							<a href="#">Agent</a>
							<a href="#">About</a>
							<a href="#">Listing</a>
							<a href="#">Blog</a>
							<a href="#">Contact</a>
						</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
            </ul>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">ShopOn.com</a>
					  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


