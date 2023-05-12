<?php
include "./connector.php";

$id=$_POST['id'];
$new_photo=$_FILES['photo'];
$new_photo_error=$_FILES["error"];
$old_photo=$_POST['change_name'];
$photo_name_new=time().$new_photo['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];

if($new_photo_error==0){
  unlink("./upload/$old_photo");
move_uploaded_file($new_photo['tmp_name'],"./upload/".$photo_name_new);
}


$query="UPDATE info SET photo_name='$photo_name',passaword='$password',username='$username',email='$email' WHERE `id`=$id";
$restlt=mysqli_query($link,$query); 
if($restlt){
  
 ?>   
    <script>
      window.location.href="index.php";

    </script>
<?php    
}else{     
    echo"decline";
}


