<?php
    session_start();
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
    <title>Table</title>
</head>
<body>  
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="image/shop.png" style="width:35px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-primary" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="create.php">Add user</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="files.php">Files</a>
        </li>
        <li class="nav-item">
          <a class="btn text-primary" href="logout.php">Logout</a>
        </li>
      </ul>
        <h2 class="text-light"><?php echo $_SESSION["username"];?></h2>
    </div>
  </div>
</nav>
<div class="box mt-3">
<div class="full">
<form class="mt-3" method="post">
    <div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Give task</label>
<a class="" href=""><img src="image/working.png" style="width:25px"></img></a>
    <input type="text" placeholder="Enter file name"  class="form-control"  name="a">
    </div>
    <div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Update</label>
<a class="" href=""><img src="image/working.png" style="width:25px"></img></a>
    <input type="text"  class="form-control" placeholder="Update"  name="b">
    </div>
    <button class="btn btn-primary" name="make">Make <img src="image/pencil.png" style="width:18px"></button>
    <button class="btn btn-primary" name="delete">delete <img src="image/trash.png" style="width:18px"></button>
    <button class="btn btn-primary" name="open">open <img src="image/unlocked.png" style="width:18px"></button>
    <button class="btn btn-primary mt-1" name="update">update<img src="image/checked.png" style="width:13px"></button>
    <button class="btn btn-primary mt-1" >folder<img src="image/checked.png" style="width:13px"></button>
    <button class="btn btn-primary mt-1">upload<img src="image/checked.png" style="width:13px"></button>
</form>
</div>
</div>
</body>
</html>
<?php
$folder="files/";
$a="";  
if(isset($_POST["make"])){
    $a=$_POST['a'];
    
    if(file_exists($a)){
        echo "<div class='text-danger p-2'><h4>$a file already exists<h4></div>";
    }else{
        touch($folder.$a);
    echo "<div class='text-success p-2'><h4>$a succesfully cretated</h4></div>";
    }

}
if(isset($_POST["delete"])){
    $a=$_POST['a'];
   // unlink($a);
    if(!file_exists("$folder"."$a")){
        echo "<div class='text-danger p-2'><h4>$a file not exists</h4></div>";
    }else{
        unlink("$folder"."$a");   
    echo "<div class='text-success p-2'><h4>$a succesfully deleted</h4></div>";
    }
}
if(isset($_POST["open"]) || isset($_POST["update"])){
    $a=$_POST['a'];
    
   // unlink($a);
   @$file = fopen("$folder"."$a", "r");
   //fread($file,100);
    if(!file_exists("$folder"."$a")){
        echo "<div class='text-danger p-2'><h4>$a file not exists</h4></div>";
    }else{  
        $file = fopen("$folder"."$a", "r");
        echo "<br>".fread($file,100)."</br>";
    }
    if(isset($_POST["update"])){
        $a=$_POST['a'];
        $b=$_POST['b'];
    $file = fopen("$folder"."$a", "w");
    if(isset($file)){
        fwrite($file,"$b");
        echo "<div class='text-success p-2'><h4>Succsess fully updated</h4><div>";
    }
}
}

?>

