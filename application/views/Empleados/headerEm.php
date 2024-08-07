<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>EPAGAL - Latacunga sin Basura</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?php echo base_url("assets/img/re.png"); ?> " type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/webfont/webfont.min.js"); ?>"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/css/fonts.min.css"); ?>"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/css/plugins.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/css/kaiadmin.min.css"); ?>" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/css/demo.css"); ?>" />

    <!-- Importando API de Google Maps  -->

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChmScprYjBBfdqK6HNsx4QrNYti2tAZus&libraries=places&callback=initMap"></script>

    <!--Bootstrap Java Script -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="<?php echo site_url("Empleados/inicio"); ?>" class="logo">
                        <img src="<?php echo base_url("assets/img/LogoE.png"); ?>" alt="navbar brand" class="navbar-brand" height="50" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-section active">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">COMPONENTES</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#forms">
                                <i class="fas fa-pen-square"></i>
                                <p>REGISTROS</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">

                                    <li>
                                        <a href="<?php echo site_url(); ?>/Empleados/registroConteEmp">
                                            <span class="sub-item">Contenedores</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#maps">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>REPORTE CONTENEDORES</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo site_url(); ?>/Empleados/reporteContenedor">
                                            <span class="sub-item">Recorridos</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">

                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>

                            <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <i class="fas fa-layer-group"></i>
                                </a>
                                <div class="dropdown-menu quick-actions animated fadeIn">
                                    <div class="quick-actions-header">
                                        <span class="title mb-1">COMPONENTES</span>
                                    </div>
                                    <div class="quick-actions-scroll scrollbar-outer">
                                        <div class="quick-actions-items">
                                            <div class="row m-0">

                                                <a class="col-6 col-md-4 p-0" href="<?php echo site_url(); ?>/Empleados/RegistroConteEmp">
                                                    <div class="quick-actions-item">
                                                        <div class="avatar-item bg-danger rounded-circle">
                                                            <i class="fas fa-clipboard-list"></i>
                                                        </div>
                                                        <span class="text">Ingreso de Personales</span>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="<?php echo base_url('assets/img/perfil.png'); ?>" alt="No se ha cargado la imagen" class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        </center><span class="op-7">Bienvenido,</span></center>
                                        <center><span class="fw-bold"><?php echo htmlspecialchars($usuario['nombre_completo']); ?></span></center>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="<?php echo base_url('assets/img/user.png'); ?>" alt="image profile" class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4 style="margin-left: 5%;"><?php echo htmlspecialchars($usuario['nombre_completo']); ?></h4>
                                                    
                                                    <p class="text-muted" style="margin-left: 5%;"><?php echo htmlspecialchars($usuario['email']); ?></p>
                                                    <br>
                                                    <a href="<?php echo site_url(); ?>" class="btn btn-xs btn-secondary btn-sm" style="margin-left: 5%;"><Strong>Cerrar Sesión</Strong></a>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo site_url('Empleados/perfil/' . $usuario['id_log']); ?>">MI PERFIL</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">