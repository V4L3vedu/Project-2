<?php  include "./connector.php";?>
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
        .rec{
            background-color: #eee;
            height: auto;
            padding: 100px;
            width: 666px;
            margin-left: 346px;
            margin-top: 129px;
        }
        .none{
          display:none;
        }
        .m-1{
          height:50px;
          width:60px;
          border-radius:50px;
          position: absolute;
           left: 53%;
           top:390px
        }
        #innerhtml,#innerhtml_num{
          color:red;
          opacity: 1;
        }
        .button{
          position: absolute;
          left: 39%;
          top: 69pc;
          height: 52px;
          width: 269px;
          font-size:29px;
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
        left: 515px;
        top: 492px;
      }
      .pos1{
        position: absolute;
        left: 530px;
        top: 492px;
      }
      #none1{
        display:none;
      }
    </style>
</head>
<body>

<button type="button" class="btn btn-info button" onclick="window.location.href='select.php'">Viem Data</button>

    <div class="rec">
<form action="insert.php" method="POST" id="form" enctype="multipart/form-data">
    <center>
        <img src="https://th.bing.com/th?id=OIP.u7tUuOHpK3aKNWAVGUR1pQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" class="rounded-circle" id="myFrame"  height="200" width="200">
        <input type="file" id="input" name="photo" class="none" accept="image/png" onchange="i(event)"  ><br>
        <button type="button" class="btn btn-warning btn-circle btn-circle-lg m-1" onclick="select()">
        <img src="align-center.svg" alt="" srcset="" id="add"></button>
<br>
    </center>
    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" required placeholder="Enter username">
    <label for="exampleInputEmail1"></label>
    
  </div>
  <br>
 <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required placeholder="Enter email">
    <label for="exampleInputEmail1"></label>

  </div>
  <br>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control f" id="pass" name="password"   required placeholder="Password">

    <label for="pass" id="innerhtml"></label>
    <div class="c">
      <img src="hide_password.png " onclick="viem()" height="30px" class="pos1" width="50%" id="none1">
        <img src="eye.svg" onclick="viem()"   class="pos" height="30px" width="100%" id="none">
              
    </div>

  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Number</label>
    <input type="number" class="form-control " id="num" name="number"  required placeholder="Number">
    <label for="pass" id="innerhtml_num"></label>

  </div>
  <br>
  <br>
  <button type="button" class="btn btn-primary"  id="but" onclick="check()" >Submit</button>
</form>
</div>
<script>
        function i(event){
            var myFrame = document.getElementById('myFrame');
            myFrame.src = URL.createObjectURL(event.target.files[0]);
        }
        function select(){
          document.getElementById("input").click();
        }

  

        function check(){
        var pass=document.getElementById("pass").value;
        var num=document.getElementById("num").value;
    

        var btn=document.getElementById("but");
   
          if(pass.toString().length<=5){
                   document.getElementById("innerhtml").innerText="Please enter your password in 5 length";
          }else if(num.toString().length !=10){
            document.getElementById("innerhtml_num").innerText="Please enter 10 digit";
          }else{     
            document.getElementById("innerhtml_num").innerText="";
            document.getElementById("innerhtml").innerText="";
            document.getElementById("innerhtml_num").innerText="";
            btn.setAttribute('type','submit');
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