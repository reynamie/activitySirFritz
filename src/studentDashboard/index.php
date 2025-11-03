<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <!-- LOGO -->
     <link rel="shortcut icon" href="../../assets/img/logo/logo.jpg" />


    <!-- style -->
       <link rel="stylesheet" href="../../assets/styles/css/style.css">
    

    <!-- Vendor CSS Files -->
    <link
      href="../../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet" />
    <link
      href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet" />
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet" />
    <link href="../../assets/styles/css/adminStyle.css" rel="stylesheet" />

</head>
<body>
     <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center text-decoration-none">
          <img src="../../assets/img/logo/Logo-ICT.png" alt="" />
          <span class="d-none d-lg-block ">BYTE cLuB</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

   
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
       
          <!-- End Search Icon-->

          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown">
                  <img
                src="../../assets/img/logo/Logo-WVSULC.jpeg"
                alt="Profile"
                class="rounded-circle"
                id="ImageProfile" />
              <span class="d-none d-md-block dropdown-toggle fw-bold ps-1 "
                id="NameUserProfile"> <?php echo $_SESSION['studentname'] ?></span>
             </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6 id="NameUserProfiles" class=""><?php echo $_SESSION['studentname'];?></h6>
                <span id="OfficeUserProfile"><?php echo $_SESSION['studentID'];?></span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="#"
                  onclick="AdminProfile()">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

          
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="action/logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->


        <main id="main" class="main">
            <div class="pagetitle">
                <h4>Welcome, <span><?php echo $_SESSION['studentname'] ?> <span class="text-muted small">( Member )</span></span></h4>
            </div>

            <section class="section dashboard">
                    <!-- Left side columns -->
                    <div class="col-12">
                     <div class="row justify-content-center align-items-center">
                       
                        <!-- Reports -->
                        <div class="row mt-4">
                        <!-- Bar Chart Card -->
                        <div class="col-xxl-12 col-md-12">
                            <div class="card shadow-lg border-0">
                            <div class="card-body">
                                <div
                                class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title font-weight-bold mb-0">
                                    Student <span class="text-muted"> | Information</span>
                                </h5>
                                </div>
                              <div class="row ms-2">
                                         <div class="col-md-12">
                                             <h5 class="small">Student ID No. <span class="me-3">:</span><span class="fw-bold"><?php echo $_SESSION['studentID']; ?></span></h5>
                                        </div>
                                         <div class="col-md-12">
                                            <h5 class="small">Student Name  <span class="me-3">:</span> <span class="fw-bold"><?php echo $_SESSION['studentname']; ?></span></h5>
                                         </div>
                                         <div class="col-md-12">
                                            <h5 class="small">Program/Degree <span class="me-3">:</span>Bachelor of Science in Information Communication and Technology - Software</h5>
                                         </div>
                                         <div class="col-md-12">
                                             <h5 class="small">Year Level <span class="me-3">:</span><span><?php echo $_SESSION['yearLevel']; ?></span></h5>
                                          </div>
                                         <div class="col-md-12">
                                             <h5 class="small">Email Address <span class="me-3">:</span> <span class="fw-normal"><?php echo $_SESSION['email'] ?></span></h5>
                                         </div>
                                         <div class="col-md-12">
                                             <h5 class="small">Mobile No. <span class="me-3">:</span> <span class="fw-normal"><?php echo $_SESSION['contact'] ?></span></h5>
                                         </div>
                                </div>
                            </div>
                        </div>
            

             
                        <!-- End Reports -->
                    </div>
                    <!-- End Left side columns -->
                     <div class="row justify-content-between d-flex mx-auto align-items-center">
                            <div class="col-xxl-6 col-md-12">
                                <div class="card shadow-lg border-0">
                                    <div class="card-body">
                                        <div
                                        class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title font-weight-bold mb-0">
                                            Student <span class="text-muted"> | Information</span>
                                        </h5>
                                        </div>
                                        <canvas id="myChart" class="w-100" style="height:300px"></canvas>
                                    </div>
                                </div>
                             </div>

                              <div class="col-xxl-6 col-md-12">
                                <div class="card shadow-lg border-0">
                                    <div class="card-body">
                                        <div
                                        class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title font-weight-bold mb-0">
                                            Student <span class="text-muted"> | Information</span>
                                        </h5>
                                        </div>
                                        <canvas id="mybarChart" class="w-100" style="height:300px"></canvas>
                                    </div>
                                </div>
                             </div>
                        </div>
                     </div>
                </section>
        </main>




    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="./index.php">
           
            <span>Dashboard</span>
          </a>
        </li>
    
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#components-nav"
            href="#"
            onclick="GenerateReportForm()">
            <!-- <i class="bi bi-menu-button-wide"></i> -->
            <span>Session Schedule</span>
          </a>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#components-nav"
            href="#"
            onclick="StudentForm()">
            <!-- <i class="bi bi-calindar"></i -->
            <span>School Calindar</span>
          </a>
        </li>
        
  
      </ul>
    </aside>
    <!-- End Sidebar-->


  <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

</body>
        <!-- Vendor JS Files -->
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/chart.js/chart.umd.js"></script>
        <script src="../../assets/vendor/chart.js/chart.js"></script>
    <script src="../../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>



    <script  type="text/javascript" src="../../assets/js/function/jquery.js"></script>
    <script  type="text/javascript" src="../../assets/js/style/admin.js"></script>
    <script  type="text/javascript" src="../../assets/js/style/AdminJS.js"></script>
        <script  type="text/javascript" src="../../assets/js/style/adminGraph.js"></script>
</html>
