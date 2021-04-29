<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Administrar BD</title>

	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<link href="css/sb-admin-2.min.css" rel="stylesheet">
	<!--datables-->
	<link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css"/>
	<link rel="stylesheet"  type="text/css" href="vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</head>

<body id="page-top">

	<div id="wrapper">

	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex aling-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
			</div>
		<div class="sidebar-brand-text mx-3">Martindelacruz<sup>1</sup></div>
		</a>
	<hr class="sidebar-divider my-0">
	<li class="nav-item active">
	<a class="nav-link" href="index.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>SisbBD</span></a>
	</li>

	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		PhpMyAdmin
		</div>

	<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Menú</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Submenú:</h6>
            <a class="collapse-item" href="clientes.php">Clientes</a>
            <a class="collapse-item" href="ventas.php">Ventas</a>
          </div>
        </div>
      </li>
	<hr class="sidebar-divider d-none d-md-block">

	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>
	</ul>

	<div id="content-wrapper" class="d-flex flex-colum">
	<div id="content">

	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		<i class="fa fa-bars"></i>
		</button>

		<ul class="navbar-nav ml-auto">

		<li class="nav-item dropbown no-arrow">
		<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="mr-2 d-none d-lg-inline text-gray-600 small">MartindelaCruz</span>
		<img class="img-profile rounded-circle" src="img/ElprofeJLuis.jpg">
		</a>
		</li>
		</ul>
		</nav>