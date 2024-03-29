<?php
session_start(); //session valur read or write
include("db.php");
  
  
 


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="uploads/<?= $_SESSION['photo'] ?>">
    <link rel="icon" type="image/png" href="uploads/<?= $_SESSION['photo'] ?>">

    <title>s_home</title>



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->

    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />





</head>


<body class="g-sidenav-show  bg-gray-100">





    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">

        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="s_profile.php" target="_blank">
                <img src="uploads/<?= $_SESSION['photo'] ?>" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white"><?php echo $_SESSION['student_name']; ?></span>
            </a>
        </div>


        <hr class="horizontal light mt-0 mb-2">

        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link text-white " href="s_home.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>

                        <span class="nav-link-text ms-1">TA APPLY</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white " href="g_home.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>

                        <span class="nav-link-text ms-1">GRADER APPLY</span>
                    </a>
                </li> 


<!-- 
                <li class="nav-item">
                    <a class="nav-link text-white " href="./shortcourse/index.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>

                        <span class="nav-link-text ms-1">RA APPLY</span>
                    </a>
                </li>  -->

                
              <li class="nav-item">
                    <a class="nav-link text-white " href="r_i.php" target="blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Research Interest</span>
                    </a>
                </li>  





                <li class="nav-item">
                    <a class="nav-link text-white " href="counseling.php" target="_blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Counseling</span>
                    </a>
                </li>  
   
                <li class="nav-item">
                    <a class="nav-link text-white " href=" course_materials.php " target="_blank">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>

                        <span class="nav-link-text ms-1">Course Materials</span>
                    </a>
                </li>  






                <li class="nav-item">
                    <a class="nav-link text-white " href="studentlogout.php">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>

                        <span class="nav-link-text ms-1">LOGOUT</span>
                    </a>
                </li>



    </aside>

    <main class="main-content border-radius-lg ">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">




                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                        <form action="" method="POST" class="searchform order-lg-last">
                            <div class="form-group d-flex">
                                <input type="text" name="searchteacher" class="form-control pl-3" placeholder="Search">
                                <button type="submit" placeholder="" class="form-control search"><span
                                        class="fa fa-search"></span></button>
                            </div>
                        </form>







                    </div>

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>






                </div>
        </nav>

        <!-- End Navbar -->





     

    <style>
        th{
            border: 1px solid black;
       border-collapse: collapse;
          }
          td{
            border: 1px solid black;
       border-collapse: collapse;
          }
          tr{
            border: 2px solid black;
       border-collapse: collapse;
          }

          #bb{
            background-color: palegreen;
           border-radius: 10px;
        
          }
    
    </style>



        <h1><u>COUNSELING</u></h1>
        <br>

        
        
        <table class="table table-striped">
  <thead>
    <tr style="border: 2px solid black;">
      <th scope="col">Teacher Name</th>
      <th scope="col">Username</th>
      <th scope="col">Date</th>
      <th scope="col">Schedule</th> 
      <th scope="col"></th>
   
    </tr>
    <form action="counseling.php" method='POST'>
<?php 
   $sql = "SELECT id, teacher_name, tname from counselling";
   $result=$conn->query($sql);
   if($result->num_rows > 0){
   while($data = $result->fetch_assoc()){
    echo "<tr><th>".$data["teacher_name"]."</th><th>" .$data["tname"]."</th>";
   
      
          
            
            echo"<form method='POST'><th scope='col'>
            <input type='text' name ='date' placeholder='Enter the Date 'id = 'post_button' required>
                </th>";
              

        echo"<th scope='col'>
            <select name='ti' id='cars' required>
            <option >Choose Time</option>
            <option value='8:30-10:00'>8:30-10:00</option>
            <option value='10:00-11:30'>10:00-11:30</option>
            <option value='11:30-1:00'>11:30-1:00</option>
            <option value='1:30-3:00'>1:30-3:00</option>
            <option value='3:00-4:30'>3:00-4:30</option>
            </select>
            </th>";
                
            
                echo"<td><input type='hidden' name='id' value='".$data['id']."'><input type='submit' name ='apply' value='Apply' id = 'post_button'></td></tr></form>";
                
                 
            
   
                
   }
}
    
        

                ?>
                
                </form>   
       
                


 
  </thead>
    

</table>

  

        <br>
        <br>
        <br>

        <br>
        <br>
        <br>



        </div>


    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0"></h5>

                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->


                <!-- Sidenav Type -->

                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>

                </div>

                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>

                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>


                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">



            </div>
        </div>
    </div>
    </div>



    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

    <!--Script-->
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>

<?php
 if(isset($_POST['apply'])){
    $time=$_POST['ti'] ;
    $date=$_POST['date'];
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $sql = "SELECT tname, teacher_name FROM counselling WHERE id= $id";
   
   $sname= $_SESSION['student_name'];
   $sid= $_SESSION['student_id'];
  
   $result = mysqli_query($conn, $sql);
    $row=$result->fetch_assoc();
   $tname= ($row['tname']);
   $teacher_name = $row['teacher_name'];
   $status='Pending';

   $sql = "INSERT INTO tcounselling (s_name, student_id, teacher_name, tname, date, time, status) VALUES ('$sname','$sid','$teacher_name', '$tname', '$date', '$time','$status')";
   $query = mysqli_query($conn, $sql);


  }
  ?>