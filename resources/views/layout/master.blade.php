<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel PHP Framework |  Documentation</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/adminlte.css') }}">
    <!-- Logo  -->
    <link rel="shortcut icon" type="" href="{{ asset('template/img/logo/laravellogo.png') }}">

    <style>
        .nav-link{
            color: #fff !important;
        }
        .nav-link.active{
            background-color: #00bf63 !important ;
            color: #000000 !important;
        }

        code {
            position: relative;
            display: block;
            color: #ffffff !important;
            padding-top: 5px;
            padding-left: 20px; /* Add padding for the macOS-like window controls and copy icon */
            margin-top: 20px;
            font-family: monospace, sans-serif !important;
            background-color: #252a37 !important;
            border-radius: 5px;
            height: 31px;
        }

        codelarge {
            position: relative;
            display: block;
            color: #ffffff !important;
            padding-top: 5px;
            padding-left: 20px; /* Add padding for the macOS-like window controls and copy icon */
            padding-bottom: 5px;
            margin-top: -10px;
            font-family: monospace, sans-serif !important;
            /*background-color: #252a37 !important;*/
            background-color: #272d33 !important;
            border-radius: 5px;
            height: auto;
        }

        /* Add macOS-like window controls */
        .dot-title::before {
            content: "";
            position: absolute;
            top: 23px;
            left: 5px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #fc615d; /* Red */
        }

        .dot-title::before{
            box-shadow: 15px 0 #fdbc40, 30px 0 #34c749;
            margin-left: 10px;
        }

        /* Add macOS-like window controls */
        .dot::before {
            content: "";
            position: absolute;
            top: 10px;
            left: 5px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #fc615d; /* Red */
        }

        /* Add the copy icon */
        code::after {
            content: attr(data-icon);
            /* Get the data-icon attribute value for the Font Awesome icon */
            font-family: "Font Awesome 5 Free";
            position: absolute;
            top: 2px;
            right: 5px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Add two more dots for spacing with different colors */
        .dot::before{
            box-shadow: 15px 0 #fdbc40, 30px 0 #34c749;
            margin-left: 10px;
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            /* Adjust font size for mobile devices */
            code {
                font-size: 14px;
                height: auto;
                padding: 10px;
            }

            /* Center the copy icon and window controls on mobile */
            code::after {
                top: 50%;
                transform: translateY(-50%);
            }
        }
        .title-doc {
            color: #fc615d;
        }
        .ins-doc {
            color: #ffc107;
        }
        .ins-doccode {
            color: #34c749;
        }
        /* Styling for the image popup link */
        .image-popup a {
            color: #fff;
            text-decoration: underline;
            cursor: pointer;
        }

        /* Styling for the modal popup */
        .modal {
            display: none;
            position: fixed;
            z-index: ;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            display: block;
            margin: auto;
            max-width: 90%;
            max-height: 90%;
        }

        .close {
            color: #fc615d !important;
            font-size: 35px;
            position: absolute;
            top: 25px;
            right: 55px;
            cursor: pointer;
        }

        /* Remove browser default styles for links */
        a {
            text-decoration: none;
        }
        #scrollme {
            height: 500px;
            overflow-y: auto; /* Use "auto" to only show the scrollbar when needed */
            scrollbar-width: thin; /* For Firefox */
        }

        /* Customize the scrollbar for Chrome */
        #scrollme::-webkit-scrollbar {
            width: 5px; /* Width of the scrollbar */
        }

        #scrollme::-webkit-scrollbar-thumb {
            background-color: #888; /* Color of the scrollbar thumb (drag handle) */
            border-radius: 5px; /* Rounded corners for the thumb */
        }

        #scrollme::-webkit-scrollbar-thumb:hover {
            background-color: #555; /* Color of the scrollbar thumb on hover */
        }

    </style>
</head>

<body class="hold-transition layout-top-nav dark-mode">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark text-light border-bottom-0" style="background-color: #343a40;">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <span class="brand-text font-light text-light dot-title"></span>
                </a>
                <!-- <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li> -->
                    </ul>
                </div>
                
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-toggle-on"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                <img src="{{ asset('template/img/logo/laravel-logonew.png') }}" alt="AdminLTE Logo" class="brand-image img-rectangle" width="40%">
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @section('sidemenu')
                            @include('partials.controlsidebar')
                        @show
                        <!-- /.col-md-6 -->
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Custom Installation and Development Guide
            </div>
            <!-- Default to the left -->
            <strong>For Beginners</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <script>
        const copyToClipboard = function (text, element) {
        const textArea = document.createElement("textarea");
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);

        // Change the copy icon to a checkmark
        element.setAttribute("data-icon", "✔ Copied"); // Unicode for checkmark

        // Show "Copied" label for 1.5 seconds
        const copiedLabel = document.createElement("div");
        //copiedLabel.innerText = "Copied";
        copiedLabel.style.position = "relative";
        copiedLabel.style.top = "auto";
        copiedLabel.style.left = "20px";
        copiedLabel.style.color = "#ffffff";
        copiedLabel.style.opacity = "0";
        copiedLabel.style.transition = "opacity 1s";
        element.parentElement.appendChild(copiedLabel);

        setTimeout(() => {
            copiedLabel.style.opacity = "1";
        }, 10);

        setTimeout(() => {
            copiedLabel.style.opacity = "0";
            element.setAttribute("data-icon", "\uf0ea"); // Restore the copy icon
            }, 1500);
        };

        const codeBlocks = document.querySelectorAll("code");

        codeBlocks.forEach((codeBlock) => {
        codeBlock.addEventListener("click", function () {
            copyToClipboard(codeBlock.innerText, codeBlock);
            });
        });
        // Open the popup
        function openPopup() {
            var popupModal = document.getElementById('popupModal');
            popupModal.style.display = 'block';
        }

        // Close the popup
        function closePopup() {
            var popupModal = document.getElementById('popupModal');
            popupModal.style.display = 'none';
        }

    </script>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('template/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/adminlte.min.js') }}"></script>
</body>

</html>