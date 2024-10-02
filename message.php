<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>College Management System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/staticcms/plugins/fontawesome-free/css/all.min.css ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="/staticcms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css ">
    <!-- iCheck -->
    <link rel="stylesheet" href="/staticcms/plugins/icheck-bootstrap/icheck-bootstrap.min.css ">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="/staticcms/dist/css/adminlte.min.css ">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/staticcms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css ">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/staticcms/plugins/daterangepicker/daterangepicker.css ">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    

    
</head>




<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item" id="log5">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            
                <!-- Search bar -->
                <li class="nav-item" id="log4">
                    <form class="form-inline">
                        <div class="input-group">
                            <input class="form-control rounded-pill search-bar" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary rounded-pill" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </li>
            </ul>
        
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item dropdown" id="log3">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell fa-lg"></i>
                        <!-- You can add a badge for notification count here if needed -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- Notification items go here -->
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> New message
                        </a>
                        <!-- Add more notification items as needed -->
                    </div>
                </li>
        
                <!-- Logout button -->
                <li class="nav-item" id="log">
                    <a class="nav-link" onclick="logoutFun()" href="/cms/logout_user/">
                        <i class="fas fa-sign-out-alt fa-lg"></i> Logout
                    </a>
                </li>

                <!-- create the funciton for remove fromlocal storage -->
                <script>
                    function logoutFun() {
                        var get_user_email = localStorage.getItem("user_email")
                        if (get_user_email) {
                            localStorage.removeItem("user_email")
                            localStorage.removeItem("user_type")
                            localStorage.removeItem("user_name")
                        }
                    }
                </script>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
          
 
        
<aside class="main-sidebar sidebar-dark-info elevation-4">
    
    <a href="#" class="brand-link">
        <img src="/staticcms/dist/img/cmsl.png " alt="AdminLTE Logo" 
            class="brand-image img-circle elevation-3" >
        <span class="brand-text font-weight-light" id="panel_name">Admin Panel</span>
    </a>
    <div class="sidebar">
        
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" id="user_profile_image_id" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" id="id_user_name">admin</a>
            </div>
        </div>

        
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item" id="home">
                    <a href="/cms/dashboard/"
                       class="nav-link ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/add_user/"
                                class="nav-link  active ">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>
                                   Add User Details
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/user_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    User Details
                                </p>
                            </a>
                        </li>
                        


                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Parent's Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/add-parent/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Add Parent Details
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/parent_details/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Parent Details
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Departments
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/department_add/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Add departments 
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/department_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    departments List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Section 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/section_add/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Add Section
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/section_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>
                                    Section List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard"></i>
                        <p>
                            Class
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/cls_add/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Add Class Details
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/cls_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-chalkboard"></i>
                                <p>
                                    Class List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bookmark nav-icon"></i>

                        <p>
                            Student's Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/student-information/"
                                class="nav-link ">
                                <i class="fas fa-id-card-alt nav-icon"></i>
                                <p>
                                    Add Student Information

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/student-list/"
                                class="nav-link ">
                                <i class="fas fa-list-ul nav-icon"></i>
                                <p>
                                    Student List

                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/cms/academic-details/"
                                class="nav-link ">
                                <i class="fas fa-graduation-cap nav-icon"></i>
                                <p>
                                    Academic Details

                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>
                            Employee Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/add-employee/"
                                class="nav-link ">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>
                                    Add Employee Information

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/teacher-record/"
                                class="nav-link ">
                                <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                <p>
                                    Teacher Record
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/accountant-record/"
                                class="nav-link ">
                                <i class="fas fa-calculator nav-icon"></i>
                                <p>
                                    Accountant Record

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/librarian-record/"
                                class="nav-link ">
                                <i class="fas fa-book nav-icon"></i>
                                <p>
                                    Librarian Record

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/other-record/"
                                class="nav-link ">
                                <i class="fas fa-globe nav-icon"></i>
                                <p>
                                    Other Record

                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            Class Time Schedule
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/add_class_schedule/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-calendar-plus"></i>
                                <p>
                                    Add Class Schedule
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/view_class_schedule/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>
                                   View Class Schedule
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            College Schedule
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/teacher_schedule/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>
                                    Add Teacher Schedule
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/view_teacher_schedule/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Teacher Schedule Record
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/exam_schedule/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>
                                   Add Exam Schedule
                                </p>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a href="/cms/view_exam_schedule/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Exam Schedule Record
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>
                            Result
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/result_list/" class="nav-link ">
                                <i class="nav-icon fas fa-poll"></i>
                                <p>Result List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a href="/cms/view_attendance/"
                        class="nav-link  ">
                        <i class="nav-icon fas fa-eye"></i>
                        <p>
                            View Attendance
                        </p>
                    </a>
                </li> -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Library Information
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/add_book/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>
                                    Add Book
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/book_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                   Book List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/issue_book/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-arrow-circle-right"></i>
                                <p>
                                    Issue Book
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/issued_books/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>
                                    Issued Book List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/add_library_inventory/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Add Library Inventory
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/library_inventory/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Library Inventory
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/add_return_book/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Add Return Book
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/return_book_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Return Book List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exclamation-circle"></i>
                        <p>
                            Notice & Complaint
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/add_notice/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-pencil-alt"></i>
                                <p>
                                    Add Notice
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/notice_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                   Notice List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/add_complain/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-comment"></i>
                                <p>
                                    Add Complain
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/complain_list/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Complain List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                           Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/cms/student_information_report/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Student Information
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/teacher_information_report/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                   Teacher Information
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/librarian_information_report/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Librarian Information
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cms/accountant_information_report/"
                                class="nav-link ">
                                <i class="nav-icon fas fa-chart-area"></i>
                                <p>
                                    Accountant Information
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

<!-- TEACHER PANNEL
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->



               <!-- TEACHER PANNEL
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->



<li class="nav-item" id="home2">
                    <a href="/cms/cmsapp/teacher_dashboard/"
                       class="nav-link ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" id="teacher-panel-elements">
                    <a href="#" class="nav-link teacher-panel-elements">
    
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                      <p>
                          Teacher Attendance
                          <i class="fas fa-angle-left right"></i>
                      </p>
                      
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="teacher-panel-elements1">
                            <a href="/cms/cmsapp/add_teacher_attendance/" id="addTeacherAttendanceLink" class="nav-link teacher-panel-elements ">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>Add Teacher Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item" id="teacher-panel-elements2">
                            <a href="/cms/cmsapp/teacher_attendance_list/" id="viewTeacherAttendanceLink" class="nav-link teacher-panel-elements ">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>View Teacher Attendance</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" id="teacher-panel-elements3">
                    <a href="#" class="nav-link teacher-panel-elements3">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Student Attendance
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item" id="teacher-panel-elements4">
                        <a href="/cms/cmsapp/add_student_attendance/" class="nav-link ">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Add Student Attendance</p>
                        </a>
                      </li>
                      <li class="nav-item" id="teacher-panel-elements5">
                        <a href="/cms/cmsapp/student_attendance_list/" class="nav-link ">
                            <i class="nav-icon fas fa-list-alt"></i>
                            <p>View Student Attendance</p>
                        </a>
                      </li>
                    </ul>
                </li>

                <li class="nav-item" id="teacher-panel-elements10">
                    <a href="/cms/cmsapp/exam_schedule/" class="nav-link ">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>View Exam Schedule</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" id="teacher-panel-elements11">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>
                            Result
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="teacher-panel-elements12">
                            <a href="/cms/cmsapp/add_result/" class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Result</p>
                            </a>
                        </li>
                        <li class="nav-item" id="teacher-panel-elements13">
                            <a href="/cms/cmsapp/result_list/" class="nav-link ">
                                <i class="nav-icon fas fa-poll"></i>
                                <p>Result List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview" id="teacher-panel-elements9">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="teacher-panel-elements6">
                            <a href="/cms/cmsapp/student_attendance_report/" class="nav-link ">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>Student Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item" id="teacher-panel-elements7">
                            <a href="/cms/cmsapp/teacher_attendance_report/" class="nav-link ">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>Teacher Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item" id="teacher-panel-elements8">
                            <a href="/cms/cmsapp/student_list_report/" class="nav-link ">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Student List</p>
                            </a>
                        </li>
                    </ul>
                </li>



<!-- STUDENT PANNEL
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


                <li class="nav-item" id="home3">
                    <a href="/cms/cmsapp/student_dashboard/"
                       class="nav-link ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item has-treeview" id="student-panel-elements1">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Hostel
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="student-panel-elements2">
                            <a href="/cms/cmsapp/hostel_application_form/" class="nav-link ">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Hostel Application Form</p>
                            </a>
                        </li>
                        <li class="nav-item" id="student-panel-elements3">
                            <a href="/cms/cmsapp/hostel_application_list/" class="nav-link ">
                                <i class="nav-icon fas fa-list"></i>
                                <p>Hostel Application List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview" id="student-panel-elements4">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-plus"></i>
                        <p>
                            Leave Request
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="student-panel-elements5">
                            <a href="/cms/cmsapp/add_leave_request/" class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Leave Request</p>
                            </a>
                        </li>
                        <li class="nav-item" id="student-panel-elements6">
                            <a href="/cms/cmsapp/leave_request_list/" class="nav-link ">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>Leave Request List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview" id="student-panel-elements7">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Hostel Fees
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="student-panel-elements8">
                            <a href="/cms/cmsapp/add_hostel_fees/" class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Hostel Fees</p>
                            </a>
                        </li>
                        <li class="nav-item" id="student-panel-elements9">
                            <a href="/cms/cmsapp/hostel_fees_list/" class="nav-link ">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>Hostel Fees List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview" id="student-panel-elements10">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>
                            Meal
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="student-panel-elements11">
                            <a href="/cms/cmsapp/add_meal/" class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Meal</p>
                            </a>
                        </li>
                        <li class="nav-item" id="student-panel-elements12">
                            <a href="/cms/cmsapp/meal_list/" class="nav-link ">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>Meal List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview" id="student-panel-elements13">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-coffee"></i>
                        <p>
                            Canteen Registration
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="student-panel-elements14">
                            <a href="/cms/cmsapp/add_canteen_registration/" class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Canteen Registration</p>
                            </a>
                        </li>
                        <li class="nav-item" id="student-panel-elements15">
                            <a href="/cms/cmsapp/canteen_registrations_list/" class="nav-link ">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>Canteen Registrations List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview" id="student-panel-elements16">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Document Manage
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="student-panel-elements17">
                            <a href="/cms/cmsapp/add_document/" class="nav-link ">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Add Document</p>
                            </a>
                        </li>
                        <li class="nav-item" id="student-panel-elements18">
                            <a href="/cms/cmsapp/document_list/" class="nav-link ">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>Document List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item has-treeview" id="student-panel-elements19">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="student-panel-elements20">
                            <a href="/cms/cmsapp/student_issue_book_report/" class="nav-link ">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Student Issue Book</p>
                            </a>
                        </li>
                        <li class="nav-item" id="student-panel-elements21">
                            <a href="/cms/cmsapp/student_return_book_report/" class="nav-link ">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Student Return Book</p>
                            </a>
                        </li>
                    </ul>
                </li>
