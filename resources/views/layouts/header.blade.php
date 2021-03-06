<!DOCTYPE html>
<html lang="en">

<head>
    <title>ShambaTech | @yield('title')</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/fav.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/tiny-slider/tiny-slider.css">
    <link id="style-switch" rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <style>
        @yield('style');
    </style>
</head>

<body>
    <header class="navbar-light navbar-sticky header-static">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand" href="/farmer/home">
                    <img class="navbar-brand-item light-mode-item" src="/assets/images/logo.png" alt="logo">
                    <img class="navbar-brand-item dark-mode-item" src="/assets/images/logo-light.png" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main navbar START -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="mx-auto navbar-nav navbar-nav-scroll">
                        <!-- Nav item 5 link-->
                        <li class="nav-item"> <a class="nav-link @if (Request::is('farmer/home')) active
                        @endif" href="/farmer/home"><i class="mr-1 align-middle fas fa-fw fa-home"></i> Home</a></li>
                        <li class="nav-item"> <a class="nav-link" href="/shambatech"><i
                                    class="mr-1 align-middle fas fa-fw fa-comment"></i> Chat</a></li>
                    </ul>
                </div>
                <!-- Main navbar END -->

                <!-- Nav right START -->
                <div class="nav ms-sm-3 flex-nowrap align-items-center">
                    <!-- Nav Button -->
                    <ul class="mx-auto navbar-nav navbar-nav-scroll">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="ml-1 fa fa-user-circle"></i>
                                {{Auth::user()->firstName}}
                                {{Auth::user()->lastName}}</a>
                            <ul class="dropdown-menu" aria-labelledby="homeMenu">
                                <li> <a class="dropdown-item" href="/farmer/viewProfile/"><i
                                            class="mr-1 align-middle fas fa-fw fa-eye"></i> View Profile</a>
                                </li>
                                <li> <a class="dropdown-item" href="/farmer/profile"> <i
                                            class="mr-1 align-middle fas fa-fw fa-pen"></i> Edit
                                        Profile</a></li>
                                <li> <a class="dropdown-item" href="/farmer/changePassword/{{Auth::user()->id}}"><i
                                            class="mr-1 align-middle fas fa-fw fa-lock"></i> Change Password </a></li>
                                <div class="dropdown-divider"></div>
                                <li class="dropdown-item">
                                    <form action="/farmer/logout" method="post">
                                        @csrf
                                        <button class="btn btn-default btn-sm" type="submit"><i
                                                class="mr-1 align-middle fas fa-fw fa-arrow-alt-circle-right"></i>
                                            Logout</button>
                                    </form>
                                </li>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
                <!-- Nav right END -->
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
