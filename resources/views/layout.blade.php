<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <style>
        /* Sidebar */
        .sidebar {
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
            padding-top: 20px;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
            white-space: nowrap; /* Prevents text from breaking */
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Hover effect */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content */
        .content {
            margin-left: 220px; /* Adjusted to match sidebar width */
            padding: 16px;
        }

        /* Responsive Sidebar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {
                float: left;
            }
            .content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Student Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="{{url ('/students')}}">Student</a>
            <a href="{{url ('/teachers')}}">Teacher</a>
            <a href="{{url ('/courses')}}">Courses</a>
            <a href="{{url ('/batches')}}">Batches</a>
            <a href="{{url ('/enrollments')}}">Enrollment</a>
            <a href="{{url ('/payments')}}">Payment</a>
        </div>

        <!-- Page Content -->
        <div class="content w-100">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
