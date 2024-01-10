<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="description" content="Sistema de Gestión Administrativa V1.0.">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="Zgroup Perú">
    <meta property="og:site_name" content="Test Sistema de Gestion">
    <meta property="og:title" content="Equipo de Desarrollo - Deerchos reservados ZGROUP">
    <meta property="og:url" content="www.zgroup.com.pe">
    <meta property="og:description" content="Administramos en flujo de los datos dentro de la empresa ">
    <title>Panel Administrativo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link href="<?php echo base_url; ?>Assets/css/main.css" rel="stylesheet" />
    <link href="<?php echo base_url; ?>Assets/css/datatables.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="<?php echo base_url; ?>Assets/css/select2.min.css" rel="stylesheet" />
	<link href="<?php echo base_url; ?>Assets/css/estilos.css" rel="stylesheet" />
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>Assets/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?php echo base_url; ?>Configuracion/admin">ZGROUP</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!--Notification Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                    <li class="app-notification__title">Libros no entregados.</li>
                    <div class="app-notification__content">
                        <li id="nombre_estudiante">
                            
                        </li>
                    </div>
                    <li class="app-notification__footer"><a href="<?php echo base_url; ?>Configuracion/libros" target="_blank">Generar Reporte.</a></li>
                </ul>
            </li>
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="#" id="modalPass"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url; ?>Usuarios/salir"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url; ?>Assets/img/logo.png" alt="User Image" width="50">
            <div>
                <p class="app-sidebar__user-name"><?php echo $_SESSION['nombre'] ?></p>
                <p class="app-sidebar__user-designation"><?php echo $_SESSION['usuario']; ?></p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item" href="<?php echo base_url; ?>Area"><span class="app-menu__label">Areas<a/span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url; ?>Empleado"><span class="app-menu__label">Empleados</span></a></li>
            <li><a class="app-menu__item" href="<?php echo base_url; ?>Permiso"><span class="app-menu__label">Permisos</span></a></li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Autor"><i class="icon fa fa-address-book-o"></i> Autor</a></li>
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Editorial"><i class="icon fa fa-tags"></i> Editorial</a></li>
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Libros"><i class="icon fa fa-book"></i> Libros</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Administración</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Usuarios"><i class="icon fa fa-user-o"></i> Usuarios</a></li>
                    <li><a class="treeview-item" href="<?php echo base_url; ?>Configuracion"><i class="icon fa fa-cogs"></i> Configuración</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" target="_blank" href="<?php echo base_url; ?>Prestamos/pdf"><i class="icon fa fa-file-pdf-o"></i> Libros Prestados</a></li>
                </ul>
            </li>
        </ul>
    </aside>
    <main class="app-content">