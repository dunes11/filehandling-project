<form method="post" enctype="multipart/form-data">
    <input type="text" required name="a">
    <input type="file" name="myfile">
    <button name="submit">submit</button>
</form>
<?php
 //  unlink("image/pexels-pixab\
    //echo substr("Hello world",6);
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
 ?>  
<!-- if(in_array($type,$valid2)){
//     $to="files/".$_FILES['myfile']["name"];
//     $from=$_FILES['myfile']['tmp_name'];
//     if(move_uploaded_file($from,$to)){
//         echo "uploaded succesfully";
//     } -->
