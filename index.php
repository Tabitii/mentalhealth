<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://app.abtz.ru/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Learner</title>

  <!-- Custom fonts for this template-->
  <link href="/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="http://app.abtz.ru/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://app.abtz.ru/index.php">
          <div class="sidebar-brand-icon">
            <i class="fas fa-hands"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Intherapy<sup>we</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="http://app.abtz.ru/index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Панель</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Мое состояние
        </div>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="http://app.abtz.ru/add_subject.html">
            <i class="fa fa-asterisk"></i>
            <span>Ситуации</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="http://app.abtz.ru/view_subjects.html">
            <i class="fa fa-smile-o"></i>
            <span>Настроение</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="http://app.abtz.ru/view_subjects.html">
            <i class="fa fa-male"></i>
            <span>Тело</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          Стратегии исцеления
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="http://app.abtz.ru/links.html">
            <i class="fa fa-thumbs-o-up"></i>
            <span>Мне помогает</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="http://app.abtz.ru/timer.html">
            <i class="fa fa-list-ol"></i>
            <span>План исцеления</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>


              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">*</span>
                </a>


              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                  <img class="img-profile rounded-circle" src="https://pp.userapi.com/c856016/v856016294/983c0/wReqoTwmq9s.jpg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="http://app.abtz.ru/reset-password.php">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Изменить пароль
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="http://app.abtz.ru/logout.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Выйти
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
            <a href="#" class="d-none d-sm-inline-block dddddddddddddddddddddbtn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Learner's Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Approach -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage time and subjects</h6>
              </div>
              <div class="card-body">
                <div class="page-header">
                  <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
                </div>
                <p>
                  <a href="http://app.abtz.ru/reset-password.php" class="btn btn-warning">Reset Your Password</a>
                  <a href="http://app.abtz.ru/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                </p>
                <p>One must manage their self-directed learning. Measure time< manage your subjects. See the list of all your learnings. Plan the next step.</p>
                <p class="mb-0">During learning something new, you should scale your success!</p>
              </div>
              <div class="alert alert-primary" role="alert">
                <ul class="list-group">
                  <li class="list-group-item active">How to wrok with this APP:</li>
                  <li class="list-group-item">1) <a href="http://learner.abtz.ru/add_subject.html" class="alert-link">Add your subjects</a> to Plan</li>
                  <li class="list-group-item">2) Start to learn and open <a href="http://learner.abtz.ru/timer.html" class="alert-link">Timer's page</a></li>
                  <li class="list-group-item">3) When timer is over submit your success with done subject+time</li>
                  <li class="list-group-item">4) View all your subjects and done learnings in <a href="http://learner.abtz.ru/learner_list.html" class="alert-link">List</a></li>
                  <li class="list-group-item">4) Downloan additional information and documantation about your learning's List</li>
                </ul>


              </div>
            </div>

            <!-- Illustrations -->

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Learning is a habit!</h6>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="http://app.abtz.ru/img/undraw_learning_2q1h.svg" alt="">
                </div>
                <p>We learn all life, we learn together, we learn and success.</p>

              </div>
            </div>


        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; learner.com 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="http://app.abtz.ru/login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="http://app.abtz.ru/vendor/jquery/jquery.min.js"></script>
  <script src="http://app.abtz.ru/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="http://app.abtz.ru/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="http://app.abtz.ru/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="http://app.abtz.ru/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="http://app.abtz.ru/js/demo/chart-area-demo.js"></script>
  <script src="http://app.abtz.ru/js/demo/chart-pie-demo.js"></script>

</body>

</html>
