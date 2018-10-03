<?php 
	  require"log.php";

	  $username = "";
	  $password = "";

	  if(isset($_POST["sub"])){
	   $password = strip_tags($_POST['paswd']);
       $username = strip_tags($_POST["uname"]);

       

       $query = mysqli_query($connection , "SELECT * FROM info  WHERE index_number = '$username' AND password = '$password'");
       $check_query = mysqli_num_rows($query);

        if($check_query < 3 ){
            header("LOCATION:home.php");
       }else{
           echo"not successful" ;
       }

	  }
 ?>


 <!-- <!DOCTYPE html>
<html>
  <head>
    <title>Student Registration</title>
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">


    </style>
  </head>
  <body>
    <div class="rbox">
      <form id="registrationForm" action="index.php" method="post">
        <table border="0" cellpadding="4px" cellspacing="4px" width="250">
          <thead>
            <tr>
              <th> Registration </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <label for="uname">Username:</label>
                <input type="text" name="uname" id="uname" placeholder="Enter Username" required>
              </td>
            </tr>
            
            <tr>
              <td>
              
              </td>
            </tr>
            <tr>
              <td>
                <label for="cpaswd">Confirm Password:</label>
                <input type="Password" name="cpaswd" id="cpaswd" placeholder="Confirm Password" required>
              </td>
            </tr>
            <tr>
              <td>
                <p id="msg"></p>
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" name="sub" id="btnSub">Create Account</button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </body>
  <script type="text/javascript">
    $(document).ready(function (){
      $("#cpaswd").keyup(function(e){
        if($("#paswd").val() === $(this).val())
        {
          //$("#msg").html("<img src='img/success.png' width='16px' /> Passwords match!!");
          $(this, "#paswd").css("border", "1px solid #0d0");
        }
        else
        {
          //$("#msg").html("Passwords do not match!!");
          $(this, "#paswd").css("border", "1px solid #d00");
        }
      });
    });
  </script>
</html> -->





 <!DOCTYPE html>
 <html>
 <head>
   <title>Login Form</title>
    <title>Student Registration</title>
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap-grid.min.css">

 </head>
 <body>
      
      <div class="containerrr">
         <form id="registrationForm" action="index.php" method="post">
              <table cellspacing=10px cellpadding=10px>
              <h3>Please Login</h3><br>
                <tr>
                  <td>
                      <label for="uname">Username:</label>
                  </td>
                  <td>
                     <input class="form-control" type="text" name="uname" id="uname" placeholder="Enter Username" required>
                  </td>
                </tr>
                <tr>
                   <td>
                     <label for="paswd">Password:</label>
                  </td>
                  <td>
                      <input class="form-control" type="Password" name="paswd" id="paswd" placeholder="Enter Password" required>
                  </td>
                </tr>
                <tr>
              <td>
               
              </td>
              <td>
                 <button type="submit" class="btn btn-danger"  name="sub" id="btnSub">Login</button>
              </td>
            </tr>

              </table>
          </form>
      </div>

 </body>
 </html>





