<?php      
    session_start();
    include('connection.php');
    $a="";
    $e="";
    $count=null;
    if(isset($_POST['submit']) ) { 
        $username = $_POST['username'];  
        $password = $_POST['password'];   
      
        $sql = "select * from admin where username = '$username' and password = '$password'";  
        $rs= $con->query($sql);  
        $row = mysqli_fetch_array($rs, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($rs);  
        $_SESSION["username"]=$username; 
        $_SESSION["password"]=$password;
        try{  
        if($count == 1){
            header("Location:index.php");
            // echo "<h1><center> Login successful </center></h1>";            
        }  
        throw new Exception("Plz enter valid username and password");  
    }catch(Exception $e){
           $a= $e->getMessage();
    }
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
    <div class="container border" style="margin-top:10%">
        <div class="alert alert-primary text-center" style="width:102.30%;margin-left:-13px;border-radius:0">
            <h3>Login</h3>
            <?php if(!$count == 1){ 
                
                   echo "<div class='text-danger'>".$a."</div>"; 
            } ?>
        </div>
    <form method="post">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="text" name="username" required placeholder="Enter username" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" placeholder="Password" required class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</div>
    </form>
    </div>
</body>
</html>