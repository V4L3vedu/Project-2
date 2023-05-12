<?php  include "./connector.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <style>
        .check_id{
            background-color: #eee;
            height: auto;
            padding: 100px;
            width: 666px;
            margin-left: 346px;
            margin-top: 129px;
        }
        .container{
            padding-top:200px;
            font-size:20px; 
        }
    </style>
</head>
<body>
   <div class="container"> 
    <label for="select">Select Your Name</label>
    <select class="form-select"  id="select" onchange="ch()"  aria-label="Default select example">
      <option >Open this select menu</option>
 <?php
 $query="SELECT * FROM info";
 $result=mysqli_query($link,$query);
 while ($data=mysqli_fetch_assoc($result)){
  ?>
  <option value="<?php echo $data["id"] ?>"   > <?php echo $data["username"] ?></option>
<?php
 }
?>
</select>
</div>





<script>
    function ch(){
        var select = document.getElementById('select').value;
        window.location.href="check.php?id="+select;


    } 
</script>
</body>
</html>
