<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];
    $last_session = $_POST['last_session'];
    $status = $_POST['status'];

    $sql = "INSERT INTO `crud`(`ID`, `Name`, `Gender`, `Address`, `Email`, `Contact`, `Course`, `Last Session`, `Status`) 
          VALUES (NULL,'$name','$gender','$address','$email','$contact','$course','$last_session','$status')";

     $result = mysqli_query($conn, $sql);
     if($result){
        header("Location:index.php?msg=New record created successfully");
     }
     else{
        echo "Failed: " . mysqli_error($conn);
     }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap -->
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!-- Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <title>Dashboard</title>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <img src="assets/img/selby driving school.png" style="width: 35px;" class="mx-1" alt="">
                </div>
                <div class="sidebar-brand-text mx-3"><sup>Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
               Session Info
            </div>

           
            <!-- Nav Item - schedules -->
           
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-calendar-days"></i>
                    <span>Schedules</span></a>
            </li>

            <!-- Nav Item -  -->
           
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-calendar-days"></i>
                    <span>1</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-calendar-days"></i>
                    <span>2</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-calendar-days"></i>
                    <span>3</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-calendar-days"></i>
                    <span>4</span></a>
            </li>

            <!-- Nav Item - employees -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-users"></i>
                    <span>Employees</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">0</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">0</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate"></div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate"></div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate"></div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Howard Selby</span>
                                <img src="assets/img/selby driving school.png" style="width: 35px;" class="mx-1" alt="">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fa-solid fa-calendar-days"></i> Bookings</a>
                    </div>
                <!--main site-->
          <main id="site-main">
        <div class="container">

        <?php
        if(isset($_GET['msg'])){
            $msg =$_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

        <div class="box-nav d-flex justify-between">
            <a href="add_new.php" class="btn btn-success bg-success mb-5">
            <span class="text-white"> Add User <i class="fa-solid fa-user-plus"></i></span>
            </a>
            <table class="table table-hover table-bordered text-center">
           <thead class="table-dark">
           <tr>
             <th scope="col">ID</th>
             <th scope="col">Full Name</th>
             <th scope="col">Address</th>
             <th scope="col">Contact</th>
             <th scope="col">Email</th>
             <th scope="col">Gender</th>
             <th scope="col">Course</th>
             <th scope="col">Last Session</th>
             <th scope="col">Status</th>
             <th scope="col">Action</th>
            </tr>
             </thead>
             <tbody>
                <?php

                include "db_conn.php";

                $sql = "SELECT * FROM  `crud`";
                $result = mysqli_query($conn, $sql );
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
            <tr>
                <td><?php echo $row['id']   ?></td>
                <td><?php echo $row['full_name']   ?></td>
                <td><?php echo $row['address']   ?></td>
                <td><?php echo $row['contact']   ?></td>
                <td><?php echo $row['email']   ?></td>
                <td><?php echo $row['gender']   ?></td>
                <td><?php echo $row['course']   ?></td>
                <td><?php echo $row['last_session']   ?></td>
                <td><?php echo $row['status']   ?></td>
               
                <td>
                <a href="edit.php?id=<?php  echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                <a href="delete.php?id=<?php  echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
            </td>
            </tr>               
            <?php


            }
                
          ?>

       </tbody>
      </table>
</div>
    
<!--/main site-->

 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Selby's Driving School 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
           
<!-- Back to top button -->
<button
        type="button"
        class="btn btn-warning bg-warning btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
<!-- Boostrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>


<script>
    //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>