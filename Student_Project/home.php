<?php 
    
    require"config/config.php";
     // $error = error_reporting(E_ALL);
     
if(isset($_SESSION['index_no'])){

    $userLoggedIn = $_SESSION['index_no'];
    $query = mysqli_query($connection, "SELECT * FROM login WHERE index_no = $userLoggedIn");
    $user = mysqli_fetch_array($query);
    $firstname = $user['firstname']; 


    $hometown = "";
    $email = "";
    $city = "";
    $gender = "";
    $hostel = "";
    $n_o_k = "";
    $home_add = "";
    $course = "";
    $gpa = "";
    $phone_number = "";
    $status = "";
    $guard_name = "";
    $dob= "";
    $nationality = "";
    

    if(isset($_POST["btn-send"])){

       
            $hometown = strip_tags($_POST["hometown"]);
            $email =strip_tags($_POST["email"]);
            $city = strip_tags($_POST["city"]);
            $gender = strip_tags($_POST["gender"]);
            $hostel = strip_tags($_POST["hostel"]);
            $n_o_k =strip_tags($_POST["nok"]);
            $home_add = strip_tags($_POST["home_add"]);
            $course = strip_tags($_POST["course"]);
           
            $gpa = strip_tags($_POST["gpa"]);
            $phone_number = strip_tags($_POST["phone_number"]);
            $status = strip_tags($_POST["status"]);
            $guard_name = strip_tags($_POST["guard_name"]);
            $dob= strip_tags($_POST["dob"]);
            $nationality =strip_tags($_POST["nationality"]);
           

           $query = mysqli_query($connection,"INSERT INTO stud_info VALUES('','$userLoggedIn','$hometown','$email','$city','$gender','$hostel','$n_o_k','$home_add','$course','$gpa','$phone_number','$status','$guard_name','$dob','$nationality')");
            
            echo "entry sent successful";
          
    }

}else {
    header('Location: index.php');
};

     function delete($index_no){
        echo $index_no;


    }

    
    function showUsers($connection){

        $query_1 = mysqli_query($connection, "SELECT * FROM info");
        
        
        while($results_1 = mysqli_fetch_array($query_1)){

            $fname = $results_1['firstname'];
            $lname = $results_1['lastname'];
            $email = $results_1['email'];
            $index_no = $results_1['index_no'];
           
            echo"<br><br>
                    <div class='row'>
                        <div class='col-sm-3'>" . $fname ." </div>
                        <div class='col-sm-3'>" . $lname . "</div>
                        <div class='col-sm-3'>" . $email . "</div>
                        <div class='col-sm-3'>" . $index_no . "</div>
                        <input type='submit' id='" . $index_no . "' name='submit_btn' value = 'Delete'>
                    </div>";
           
        
        }

    }


    function showUserInfo($connection){

         $query_2 = mysqli_query($connection, "SELECT * FROM stud_info");

         while ($results_2 = mysqli_fetch_array($query_2) ) {
            
            $id = $results_2['id_number'];
            $hometown = $results_2['hometown'];
            $email = $results_2['email'];
            $city = $results_2['city'];
            $gender = $results_2['gender'];
            $hostel = $results_2['hostel'];
            $home_add = $results_2['home_add'];

             echo"<br><br>
                    <div class='row'>
                        <div class='col-sm-2'>" . $id ." </div>
                        <div class='col-sm-2'>" . $hometown . "</div>
                        <div class='col-sm-2'>" . $email . "</div>
                        <div class='col-sm-2'>" . $gender . "</div>
                        <div class='col-sm-2'>" . $hostel . "</div>
                        <input type='submit' id='" . $hostel . "' name='submit_btn' value = 'Delete'>
                    </div>";
           

         }
    }

   
   


?>


<!doctype html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="device-width initial-scale = 1.0">
        <meta name="description" content="A webapp for student">
        <meta name="keyword" content="mendel,mendel restaurant , restaurant" >
        <link href="assets/img/logo.png" rel="shortcut icon" >
        <title>Homepage</title>

        <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap-4.1.3-dist/css/bootstrap-grid.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
        <style>
                body{
                    
                    background-color: #fff;
                    
                }
                *{
                    
                 
                }
                .box{
                    margin-right: 3%;
                    margin-left:3% ;
                   
                }
                .header{
                    height:10vh;
                    background-color: rgba(0, 0, 0, 0.521);
                   
                    
                }

                .user_info{
                    width: 100%;
                    float: right;
                }
                .tablinks{
                 border:none;
                 width:100% ;
                 height:10vh;
                 background:transparent;
                 text-transform:uppercase ;
                 font-size: 1vw;
                 color:white;
                 transition: all .4s ease-out ;
                 outline: none;
                  }
                .tab{
                    height:100vh ;
                   background-color: rgb(0, 0, 0);
                     border:1px solid black;
                 }
                 .header_text{
                    text-transform : uppercase;
                    font-weight: 300 ;
                    font-size:1.2vw;
                    font-family:sans-serif ;
                    letter-spacing:1px ;
                }
                .pos{
                    position: relative;
                }
                p{
                    position: absolute;
                    display: inline;
                    top:29%;
                    left:72%;
                }
                a{
                  
                    position: absolute;
                    display: inline;
                    top:29%;
                    text-transform : uppercase;
                    font-weight: 300 ;
                    font-size:1.2vw;
                    font-family:sans-serif ;
                    letter-spacing:1px ;
                    color: #fff;
                    
                }
                img{
                    width:20%;
                    position: absolute;
                    top:10%;
                    left:10%;
                }
                .tablinks:hover{
                    background-color: rgba(212, 44, 44, 0.733);
                    
                }
                .tab button.active {
                    background-color:  rgba(212, 44, 44, 0.733);
                }
                .tablinks:active,
                .tablinks:focus{
                    background-image: none;
                    outline: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
            
        }
        .content{
            background-color: rgb(236, 232, 232) ;
        }
        .middle{
            align:center ;
            text-align: center ;
            text-transform: uppercase ;
            letter-spacing: 2px ;
        }
        .btn{
            width:100% ;
        }
        .search{
            width:100% ;
        }
        .btn-danger{
            height:6vh;
            width:100%;
        }

        .col-3{
            max-width: 24%;
        }
        .col-sm-3{
            max-width: 23%;
        }
        .search-results{
            background-color: #fff;
            border: 1px solid #DADADA;
            border-bottom: none;
            border-top: none;
            margin-top: 15px;
            width: 250px;
            height: 100px;
            padding: 10px;
        }

               
        </style>

        



    </head>
    <body>
                <div class="box">
                    <div class="row header">
                       <div class="col-3"><img src="assets/img/logo.png" alt="logo image"></div>
                        <div class="col-6"> <p><?php echo $firstname ?></p></div>
                       <div class="col-6 pos header_text"> <p>Student Portal</p></div>
                       <div class="col-3  "><a href="logout.php"> Log Out &rarr;</a></div>
                    </div>
                    <div class="row">
                        <div class="col-3 tab" style="padding:0;">
                           
                                <br><br>
                           

                                <button onclick="openCity(event, 'London')" id="defaultOpen" class="tablinks" > view</button>
                                <button onclick="openCity(event, 'Paris')" class="tablinks"> form</button>
                                <button onclick="openCity(event, 'Tokyo')" class="tablinks"> Update</button>
                                 <button id="btn-next" onclick="openCity(event, 'More')" class="tablinks" name="more_info">View More</button>


                        </div>
                        <div id="London"class="tabcontent col-9">

                            <div class="col" >
                                <div class='row'>
                                    <div class='col-sm-3'>First Name:  </div>
                                    <div class='col-sm-3'>LastName: </div>
                                    <div class='col-sm-3'>Email: </div>
                                    <div class='col-sm-3'> Index Number: </div>
                                  
                                </div>
                                <?php
                                //listing out users from the database
                                    showUsers($connection);
                                    // showUsersForm($connection);

                                ?>

                            </div>

                        </div>

                        <div id="Paris" class="tabcontent content col-9">

                                <form action="" method="post">
                                        <table cellspacing=20px cellpadding="15px">
                                            <tr class="middle">
                                                <td colspan=4>User Request Form</td>
                                            </tr>
                                            <tr>
                                                 <td>
                                                          Email:
                                                </td>
                                                <td>
                                                         <input type="text" name="email" class="form-control">
                                                </td>
                                                <td>
                                                     GPA:
                                                </td>
                                                <td>
                                                    <input type="text" name="gpa" class="form-control">
                                                    
                                                </td>
                                               
                                            </tr>
                                           
                                            <tr>
                                                <td>
                                                       City:
                                                </td>
                                                <td>
                                                       
                                                        <input class=form-control type="text" id="city" name="city" placeholder="New York">
                                            
                                                </td>
                                                <td>
                                                         Phone Number:
                                                </td>
                                                <td>
                                                       
                                                        <input class=form-control type="text"name="phone_number" placeholder="Phone Number" maxlength="10" >
                                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Gender
                                                </td>
                                                <td>
                                                    <select class=form-control name="gender" id="">
                                                        <option value="male"> Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    Status:
                                                </td>
                                                <td>
                                                       <select class=form-control name="status" id="">
                                                           <option value="married">Married</option>
                                                           <option value="divorced">Divorced</option>
                                                           <option value="single">Single</option>
                                                       </select>

                                                </td>
                                            </tr>
                                           


                                            <tr>
                                                    <td>
                                                        Hostel:
                                                    </td>
                                                    <td>
                                                        <input type="text" name="hostel" placeholder="Hostel" class="form-control">
                                                    </td>
                                                    <td>
                                                             Guardian Name:
                                                        </td>
                                                        <td>
                                                                <input type="text" name="guard_name" placeholder="Guardian Name" class="form-control">
                                                        </td>
                                                </tr>

                                                <tr>
                                                        <td>
                                                             Next Of Kin:
                                                        </td>
                                                        <td>
                                                            <input type="text" name="nok" placeholder="Next of kin" class="form-control">
                                                        </td>
                                                        <td>
                                                                 Date Of Birth:
                                                            </td>
                                                            <td>
                                                                    <input type="date" name="dob" class="form-control">
                                                            </td>
                                                </tr>

                                                <tr>
                                                        <td>
                                                            Home Address:
                                                        </td>
                                                        <td>
                                                            <input type="text" name="home_add" placeholder="Home Address" class="form-control">
                                                        </td>
                                                        <td>
                                                                Nationality :
                                                            </td>
                                                            <td>
                                                                    <input name="nationality" placeholder="Nationality" type="text" class="form-control">
                                                            </td>
                                                </tr>

                                                <tr>
                                                        <td>
                                                             course:
                                                        </td>
                                                        <td>
                                                            <input type="text" name="course" placeholder="Course" class="form-control">
                                                        </td>
                                                        <td>
                                                                 Hometown:
                                                            </td>
                                                            <td>
                                                                    <input name="hometown" type="text" placeholder="Hometown" class="form-control">
                                                            </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                            
                                                        </td>
                                                        <td class=middle colspan=2>
                                                                <br>
                                                           <button name="btn-send" class="btn btn-danger">Send</button>
                                                        </td>
                                                        
                                                            <td>
                                                                    
                                                            </td>
                                                </tr>




                                                
                                               


                                        </table>
                                    </form> 

                        </div>
                        <div id="Tokyo" class="tabcontent col-9">
                            <div> 
                                <br>
                                <form action="search.php?" method="GET" name="search_info" >
                                    <table cellpadding=13px>
                                        <tr>
                                            <td>
                                                <input type="text" name="query" class="search form-control" 
                                                onkeyup="getLiveSearchUsers(this.value, '<?php $userLoggedIn?>')" 
                                                placeholder="studentSearch for student" maxlength="10"  autocomplete = 'off'>
                                            </td>
                                            <td>
                                                  <button class=" btn-danger" name="search_btn">search</button>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </form>
                                <div class="search-results"></div>
                                <hr>
                            </div>
                        </div>

                        <div id="More" class="tabcontent col-9">
                            <div> 
                                <br>
                                <div class='row'>
                                    <div class='col-sm-2'>Index-No :  </div>
                                    <div class='col-sm-2'>Hometown: </div>
                                    <div class='col-sm-2'>Email: </div>
                                    <div class='col-sm-2'> Sex: </div>
                                    <div class='col-sm-2'> Hostel: </div>
                                </div>
                                <?php
                                    showUserInfo($connection);
                                ?>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>


               






                <script>
                        function openCity(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                        }
                        
                        // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                </script>

    </body>
    <script src="js/index.js"></script>
    <script type="text/javascript">
        $('.btn-danger').on('click', function(){
            document.search_info.submit();
        });

        function getLiveSearchUsers(value, user){
            $.post('search.php', {query: value, userLoggedIn : user}, function(data){
               
                 if(data !== ""){
                     $('.search-results').html(data);

                    }else{
                         $('.search-results').innerHTML("Search Empty");

                    }
            });

        }


    </script>
</html>