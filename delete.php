<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<?php
include "./connector.php";

$id=$_POST["id"];
$photo=$_POST['old_photo'];



$query="DELETE FROM info WHERE `id`=$id";
 $result = $link->query($query);


 if($result){
    ?>
    <script>
           var check= swal("Good job!", "Your data have sucessfully Deteled from database", "success");
          check.then((value) => {
         var b=`${value}`;
                if(b){
                    window.location.href="index.php"; 
                 }else{
                    window.location.href="index.php"; 
                 }
    }) .location.href="index.php";

        </script>  
    <?php

        unlink("./upload/$photo");
       }else{
        echo "<h1>decline</h1>";
    }

?>

</body>
</html>