<!DOCTYPE html>
<html lang="en">

<head>
    <!-- commom meta tag -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/logo/faveicon.jpg" type="image/x-icon">
    <!--=== fontaswesome ===-->
    <link rel="stylesheet" href="./assets/fontaswesome/css/all.min.css" />
    <link rel="stylesheet" href="./assets/fontaswesome/css/fontawesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Roboto+Slab:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- slick -->
    <!--=== jquary modal css ===-->
    <link rel="stylesheet" href="./css/vendor/jquery.modal.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/vendor/slick.css" />
    <!--=== main css ===-->
    <link rel="stylesheet" href="./css/tailwind.css" />
    <link rel="stylesheet" href="./css/custom.css" />
    <title>Ahmad Zaid | Web Developer </title>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body class="main-body app sidebar-mini">
    <div id="app" class="main-content app-content">
        <!-- container -->
        <div class="container-fluid">
            @yield('page-header')
            @yield('content')
            @include('layouts.mobile-navbar')

        </div>
    </div>

</body>

</html>