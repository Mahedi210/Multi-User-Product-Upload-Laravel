<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/admin/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/admin/')}}/css/sb-admin-2.min.css" rel="stylesheet">
<!--    jq cdn for select statement -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->

        <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>



        <!-- Nav Item - Utilities Collapse Menu -->

        <li class="nav-item">
           <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
            <a style="color: white" class="nav-link collapsed" href="{{ route('admin.dashboard') }}" data-toggle="collapse" data-target="#collapseThree"
               aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-cog"></i>
                Handle ADMIN
            </a>
          </li>
        <li>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Roles and permission</h6>
                    <ul class="collapse-item {{ Route::is('admin.role.create') || Route::is('admin.role.list') || Route::is('admin.role.edit') || Route::is('admin.role.show') ? 'in' : '' }}">
                        <li class="collapse-item {{ Route::is('admin.role.list')  || Route::is('admin.role.edit') ? 'active' : '' }}"><a href="{{ route('admin.role.list') }}">All Roles</a></li>
                        <li class="collapse-item {{ Route::is('admin.role.create')  ? 'active' : '' }}"><a href="{{ route('admin.role.create') }}">Create Role</a></li>
                    </ul>
<!--                    <a class="collapse-item" href="#">create category</a>
                    <a class="collapse-item" href="#">List category</a>-->
                </div>
            </div>
        </li>

        <li>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admin </h6>
                    <ul class="collapse-item {{ Route::is('admin.user.create') || Route::is('admin.user.list') || Route::is('admin.user.edit')? 'in' : '' }}">
                        <li class="collapse-item {{ Route::is('admin.user.list')  || Route::is('admin.user.edit') ? 'active' : '' }}"><a href="{{ route('admin.user.list') }}">All Users</a></li>
                        <li class="collapse-item {{ Route::is('admin.user.create')  ? 'active' : '' }}"><a href="{{ route('admin.user.create') }}">Create Role</a></li>
                    </ul>
                    <!--                    <a class="collapse-item" href="#">create category</a>
                                        <a class="collapse-item" href="#">List category</a>-->
                </div>
            </div>
        </li>


<!--        uplode product-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>UPLOAD PRODUCT</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Product Upload:</h6>
                    <a class="collapse-item" href="{{route('admin.product.create')}}">Upload Product</a>
                    <a class="collapse-item" href="{{route('admin.product.list')}}">List Product</a>
                </div>
            </div>
        </li>


        <!-- Nav Item - Set color -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
               aria-expanded="true" aria-controls="collapseFour">
                <i class="fas fa-fw fa-cog"></i>
                <span>SET COLOR</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">COLOR:</h6>
                    <a class="collapse-item" href="{{route('admin.color.create')}}">create color</a>
                    <a class="collapse-item" href="{{route('admin.color.list')}}">List color</a>
                </div>
            </div>
        </li>

<!--  navbar for size-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
               aria-expanded="true" aria-controls="collapseFive">
                <i class="fas fa-fw fa-cog"></i>
                <span>SET PRODUCT SIZE</span>
            </a>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">SIZE:</h6>
                    <a class="collapse-item" href="{{route('admin.size.create')}}">create SIZE</a>
                    <a class="collapse-item" href="{{route('admin.size.list')}}">List SIZE</a>
                </div>
            </div>
        </li>

<!--        set gender-->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
               aria-expanded="true" aria-controls="collapseSix">
                <i class="fas fa-fw fa-cog"></i>
                <span>SET GENDER</span>
            </a>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">GENDER:</h6>
                    <a class="collapse-item" href="{{route('admin.gender.create')}}">create GENDER</a>
                    <a class="collapse-item" href="{{route('admin.gender.list')}}">List GENDER</a>
                </div>
            </div>
        </li>

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



                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mahedi</span>
                            <img class="img-profile rounded-circle"
                                 src="{{asset('/admin/')}}/img/undraw_profile.svg">
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
<!--                            <a class="dropdown-item" href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>-->

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
