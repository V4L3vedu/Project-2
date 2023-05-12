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
        #error{
          color:red;
        }
        .c{
        position: absolute;
        left: 328px;
        top: 210px;
        height: 28px;
        width: 4%;

      }  
      .pos{
        position: absolute;
        left: 514px;
        top: 196px;
}
      
      .pos1{
        position: absolute;
        left: 514px;
        top: 196px;
}
      
      #none1{
        display:none;
      }
      #real_pass{
        display:none;
      }
    </style>
</head>
<body>

<?php
    $id=$_GET["id"];
    $query="SELECT * FROM test2.info WHERE id=$id";
    $result=mysqli_query($link,$query);
    $data=mysqli_fetch_assoc($result);
    $email=$data["email"] ;
    
?>
<input type="text" id="real_pass" value="<?php echo $data["passaword"] ?>">

<div class="check_id">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $email ?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control f" id="exampleInputPassword1">
    <label for="exampleInputPassword1" class="form-label" id="error"></label>
    <div class="c">
      <img src="hide_password.png " onclick="viem()" height="30px" class="pos1" width="50%" id="none1">
        <img src="eye.svg" onclick="viem()"   class="pos" height="30px" width="100%" id="none">
              
    </div>

  </div>

  <button type="button" class="btn btn-primary" onclick="get(<?php  echo $id?>)">Submit</button>
</form>
</div>



<script>
  function get(id){
        var pass = document.getElementById('exampleInputPassword1').value;
        var real_pass = document.getElementById('real_pass').value;
        
        if(pass == real_pass){
          window.location.href='edit.php?id='+id;
   
    }else{
       document.getElementById('error').innerText="Wrong Password";
      
    }
      
  }
  function viem(){
    const i = document.querySelector(".f");
if (i.getAttribute("type") === "password") {
  i.setAttribute("type", "text");
  document.getElementById("none1").style.display="block";
  document.getElementById("none").style.display="none";
} else {
  i.setAttribute("type", "password");
  document.getElementById("none").style.display="block";
  document.getElementById("none1").style.display="none";
}
  }
</script>
</body>
</html>