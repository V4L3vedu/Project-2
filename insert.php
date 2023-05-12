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
 

$photo=$_FILES['photo'];
$email=$_POST["email"];
$password=$_POST["password"];
$username=$_POST["username"];
$number=$_POST["number"];
$photo_name=time().$photo['name'];

move_uploaded_file($photo['tmp_name'],"./upload/".$photo_name);


$query="INSERT INTO info(`email`,`username`,`passaword`,`photo_name`,`number`)VALUES('$email','$username','$password','$photo_name','$number')";
 $result = $link->query($query);

if($result){
?>
         

    <script>
          var check= swal("Good job!", "Your data have sucessfully entred to database", "success");
          check.then((value) => {
         var b=`${value}`;
                if(b){
                    window.location.href="index.php"; 
                 }else{
                    window.location.href="index.php"; 
                 }
    }) 

      
    </script>
<?php
}else{
   swal ( "Oops" ,  "Something went wrong!" ,  "error" );
}
?>
</body>
</html>



