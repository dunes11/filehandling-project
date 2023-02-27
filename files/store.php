<?php
    $con=new mysqli("localhost","root","","narayan");
    if(isset($_POST["submit"])){
        if(($_FILES["myfile"]['error']!=4)){
           $valid=["jpg","img","gif","png"];
           $valid2=["pdf","html","htm","php","txt","css"];
           $type=strtolower(pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION));
           
           if(in_array($type,$valid)){
           $to="image/".$_FILES['myfile']["name"];
           $from=$_FILES['myfile']['tmp_name'];
           if(move_uploaded_file($from,$to)){
               echo "uploaded succesfully";
           }
           }elseif(in_array($type,$valid2)){
               $to="files/".$_FILES['myfile']["name"];
               $from=$_FILES['myfile']['tmp_name'];
               if(move_uploaded_file($from,$to)){
                   echo "uploaded succesfully";
               }
           }else{
               echo "file type not matched";
           }
       }
      }
    $sql="insert into customer(name,username,mobile,email,address,father_name,mother_name,dob,gender)
        value('$_POST[name]','$_POST[username]','$_POST[mobile]','$_POST[email]','$_POST[address]','$_POST[father_name]','$_POST[mother_name]','$_POST[dob]','$_POST[gender]')";
    if($con->query($sql)){
        echo "data inserted";
    //    header("Location:index.php");
    }else{
        echo "error";
    }
    $con->close();
?>
<!-- name	username	mobile	email	address	father_name	mother_name	dob	gender	 -->