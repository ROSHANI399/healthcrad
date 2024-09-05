<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HealthCRAD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/image.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
<!--------fontawesome------------>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href= "{{ url('/index') }}"class="logo d-flex align-items-center">
        <img src="assets/img/image.png" alt="">
        <span class="d-none d-lg-block">HealthCrad</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href=" ">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/index') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="fas fa-bullhorn menu-icon"></i><span>Advertisement</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        
         
          <li>
            <a href="{{ url('/table') }}">
              <i class="bi bi-circle"></i><span>Table</span>
            </a>
          </li>
          <li>
            <a href="{{('/advertis_list')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
        </ul>
      </li>
      
      
      
      <!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/offerslider')}}">
        <i class="fas fa-tags menu-icon"style="position:relative;right:5px;"></i>
          <span>Offer Slider</span>
        </a>
     
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/user-list') }}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/user-enquiry') }}">
              <i class="bi bi-circle"></i><span>Enquiry</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/privacy-policy') }}">
              <i class="bi bi-circle"></i><span>Privacy Policy</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Tearms&Condition</span>
            </a>
          </li>
        </ul>
      </li>
      
      <!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Doctor</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <!-- <li>
            <a href="{{ url('/add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li> -->
          
          <li>
            <a href="{{ url('/doctor-list') }}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/contact') }}">
              <i class="bi bi-circle"></i><span>Contact number</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/doctor-enquiry') }}">
              <i class="bi bi-circle"></i><span>Enquiry</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/appointment') }}">
              <i class="bi bi-circle"></i><span>Appointments</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/check_patient') }}">
              <i class="bi bi-circle"></i><span>Check Patient</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/time_slot') }}">
              <i class="bi bi-circle"></i><span>Time Slot</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/privacy_policy') }}">
              <i class="bi bi-circle"></i><span>Privacy Policy</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/term') }}">
              <i class="bi bi-circle"></i><span>Term & Condition</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/bank_detail') }}">
              <i class="bi bi-circle"></i><span>Bank Detail</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/doctor_history') }}">
              <i class="bi bi-circle"></i><span>History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Pharmacies</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/add') }}">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
          <li>
            <a href="{{url('/pharmalist')}}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/pharmaenquiry') }}">
              <i class="bi bi-circle"></i><span>Enquiry</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/tearm&condition') }}">
              <i class="bi bi-circle"></i><span>Tearm & Condition</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/pharmabank_detail') }}">
              <i class="bi bi-circle"></i><span>Bank Detail</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Agency</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href=" ">
              <i class="bi bi-circle"></i><span>Add</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/agencylist') }}">
              <i class="bi bi-circle"></i><span>List</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/agencyenquiry') }}">
              <i class="bi bi-circle"></i><span>Enquiry</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/agencybank_detail') }}">
              <i class="bi bi-circle"></i><span>Bank Detail</span>
            </a>
          </li>

          <li>
            <a href="{{url('/agencyBook_detail')}}">
              <i class="bi bi-circle"></i><span>Booking Detail</span>
            </a>
          </li>

          <li>
            <a href="{{url('/agency_history')}}">
              <i class="bi bi-circle"></i><span>History</span>
            </a>
          </li>

          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Privacy Policy</span>
            </a>
          </li>

          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Tearm & Condition</span>
            </a>
          </li>
        </ul>
      </li>
      
      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#medicien-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Medicien</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="medicien-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <!-- <a href="{{url('medicien_list')}}">
                <i class="bi bi-circle"></i><span>Add</span>
            </a> -->
        </li>
        <li>
            <a href="{{url('medicien_list')}}">
                <i class="bi bi-circle"></i><span>List</span>
            </a>
        </li>
        <li>
            <a href="{{url('medicienbank_detail')}}">
                <i class="bi bi-circle"></i><span>Bank Detail</span>
            </a>
        </li>
     
    </ul>
</li>


   
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#zone-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Zone</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="zone-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <!-- <a href="forms-elements.html">
                <i class="bi bi-circle"></i><span>Add</span>
            </a> -->
        </li>
        <li>
            <a href="{{url('zone_list')}}">
                <i class="bi bi-circle"></i><span>List</span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="category-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <!-- <li>
            <a href="forms-elements.html">
                <i class="bi bi-circle"></i><span>Add</span>
            </a>
        </li> -->
        <li>
            <a href="{{url('category_list')}}">
                <i class="bi bi-circle"></i><span>List</span>
            </a>
        </li>
    </ul>
</li>
      <!-- End Icons Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('timeslot')}}">
          <i class="bi bi-person"></i>
          <span>Time Slot</span>
        </a>
     
      </li> -->

      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Order</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="order-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{url('/order_list')}}">
                <i class="bi bi-circle"></i><span>Order List</span>
            </a>
        </li>
        <li>
            <a href="{{url('order_history')}}">
                <i class="bi bi-circle"></i><span>History</span>
            </a>
        </li>

        <li>
            <a href=" ">
                <i class="bi bi-circle"></i><span>Order By prescription</span>
            </a>
        </li>

        <li>
            <a href=" ">
                <i class="bi bi-circle"></i><span>precription History</span>
            </a>
        </li>
    </ul>
</li>
      <!-- <li class="nav-heading">Pages</li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/Path _Lab')}}">
          <i class="bi bi-person"></i>
          <span>Path Lab</span>
        </a>
     
      </li>
    
      
      <!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/Emergency')}}">
          <i class="bi bi-question-circle"></i>
          <span>Emergency SOS</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->

