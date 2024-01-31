<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== TRUE) {
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Suscripcion</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/app.rtl.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/vendor-material-icons.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-material-icons.rtl.css"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="assets/css/vendor-fontawesome-free.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-fontawesome-free.rtl.css"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

    </head>

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header m-0"
                 data-fixed>
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-white  pr-0"
                         id="navbar"
                         data-primary>
                        <div class="container-fluid p-0">

                            <!-- Navbar toggler -->

                            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none"
                                    type="button"
                                    data-toggle="sidebar"
                                    style="background-color: darkblue;">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href="inicio.php">
                            <img width="230" height="45"src="Logo.png"/>
                            </a>

                            <form class="search-form d-none d-sm-flex flex"
                                  action="inicio.php">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Buscar">
                            </form>
                            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a href="#notifications_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <i class="material-icons nav-icon navbar-notifications-indicator" style="color: darkgray;">notifications</i>
                                    </a>
                                    <div id="notifications_menu"
                                         class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                        <div class="dropdown-item d-flex align-items-center py-2">
                                            <span class="flex navbar-notifications-menu__title m-0">Notificaciones</span>
                                            <a href="javascript:void(0)"
                                               class="text-muted"><small>Borrar notificaciones</small></a>
                                        </div>
                                        <div class="navbar-notifications-menu__content"
                                             data-perfect-scrollbar>
                                            <div class="py-2">
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">B</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Brayan</a> <small class="text-muted">Escribio:</small><br>
                                                        <div>Prueba de mensaje</div>
                                                        <small class="text-muted">Hace 1 minuto</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"
                                           class="dropdown-item text-center navbar-notifications-menu__footer">Ver todas las notificaciones</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">AD</span>
                                        </div>
                                    </a>
                                    <div id="account_menu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>Administrador</strong></div>
                                            <div class="text-muted">@admin</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="edit-account.php"><i class="material-icons">account_circle</i> Mi perfil</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="login.php"><i class="material-icons">exit_to_app</i> Cerrar sesión</a>
                                           <a class="dropdown-item" href="logout.php"><i class="material-icons">exit_to_app</i> Cerrar sesión</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                        <div style="padding-bottom: calc(5.125rem / 2); position: relative; margin-bottom: 1.5rem;">
                            <div class="bg-primary"
                                 style="min-height: 150px;">
                                <div class="d-flex align-items-end container-fluid page__container"
                                     style="position: absolute; left: 0; right: 0; bottom: 0;">
                                    <div class="avatar avatar-xl">
                                        <span class="avatar-title">AD</span>     
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h1 class="h4 mb-1">Administrador</h1>
                                    <p class="text-muted">@Admin</p>
                                    <a class="text d-flex" style="color: #6774DF;" href="edit-account.php">Cuenta</a> <br>
                                    <a class="text d-flex" style="color: #6774DF;" href="Contraseña.php">Seguridad</a>  <br>
                                    <a class="text d-flex" style="color: #6774DF;" href="Suscripcion.php">Plan y facturación</a>  <br>
                                    <a class="text d-flex" style="color: #6774DF;" href="#">Notificaciones</a>  <br>
                                    <a class="text d-flex" style="color: #6774DF;" href="#">Equipo</a>  <br>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="form-group px-3 py-3">
                                            <h3 class="m-0">Plan y Facturación</h3> <br>
                                            <h6 class="m-0"><strong>CAMBIA TU PLAN</strong></h6>
                                            <div class="text">Actualiza tu plan actual</div> <br>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body py-3">
                                                            <h6 class="m-0"><strong>PANORAMA</strong></h>
                                                            <div class="text py-2">Copy</div> <br>
                                                            <h6 class="m-0"><strong>$10/month</strong></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card" style="border-color: #6774DF;">
                                                        <div class="card-body py-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="m-0"><strong>HORIZONTE</strong></h6>
                                                                <div class="text">
                                                                    <a class="btn btn-primary btn-rounded"></a>
                                                                </div>
                                                            </div>
                                                            <div class="text py-2">Copy</div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="m-0"><strong>$20/month</strong></h6>
                                                                <div class="text">
                                                                    <a class="btn btn-success btn-rounded">Activo</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body py-3">
                                                            <h6 class="m-0"><strong>VISIÓN</strong></h>
                                                                <div class="text py-2">Copy</div> <br>
                                                                <h6 class="m-0"><strong>$40/month</strong></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card-form__body" style="color: #dee0e4;">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</div>
                                        </div>
                                        <div class="form-group px-3 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="m-0"><strong>PLAN DE RENOVACIÓN</strong></h6>
                                                <a class="text" style="color: #6774DF;"> PAGOS ></a>
                                            </div>
                                            <div class="text py-2">29/01/2021</div> <br>
                                            <div class="d-flex align-items-center">
                                                <h6 class="m-0"><strong>MÉTODO DE PAGO</strong></h6>
                                                <div class="text px-5">
                                                    <a class="btn btn-outline-dark btn-rounded">Cambiar tarjeta</a>
                                                </div>
                                            </div> <br>
                                            <h6 class="m-0"><strong>TARJETA DE CRÉDITO</strong></h6>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="m-0"><strong>XXXX-XXXX-XXXX-3456</strong></h6>
                                                <a class="text-underline" style="color: #6774DF;"> CANCELAR SUSCRIPCIÓN </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card-form__body" style="color: #dee0e4;">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</div>
                                        </div>
                                        <div class="form-group px-3 py-3">
                                            <h6 class="m-0"><strong>DETALLES DE FACTURACIÓN</strong></h6>
                                            <div class="row px-0 card-form__body card-body">
                                                <div class="col-lg-11">
                                                    <div class="form-group">
                                                        <label for="lname">NOMBRE</label>
                                                        <input id="lname"
                                                               type="text"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lname">TÍTULO</label>
                                                        <input id="lname"
                                                               type="text"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="lname">FECHA DE EXP</label>
                                                        <input id="lname"
                                                               type="text"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="lname">CVC/CV2</label>
                                                        <input id="lname"
                                                               type="text"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lname">PAÍS</label>
                                                        <input id="lname"
                                                               type="text"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="lname">ZIP</label>
                                                        <input id="lname"
                                                               type="text"
                                                               class="form-control"
                                                               placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mb-5">
                                        <a href="Suscripcion.php"
                                           class="btn btn-success">Guardar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END drawer-layout__content -->
                    <div class="mdk-drawer  js-mdk-drawer"
                         id="default-drawer"
                         data-align="start">
                        <div class="mdk-drawer__content">
                            <div class="sidebar sidebar-light sidebar-left sidebar-p-t bg-dark"
                                 data-perfect-scrollbar>
                                 <div class="sidebar-heading" style="color: darkgray;">Menu</div>
                                 <ul class="sidebar-menu">
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="inicio.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">dvr</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Inicio</span>   
                                         </a>
                                     </li>
                                     
                                     
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        <!-- App Settings FAB -->
        

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App -->
        <script src="assets/js/toggle-check-all.js"></script>
        <script src="assets/js/check-selected-row.js"></script>
        <script src="assets/js/dropdown.js"></script>
        <script src="assets/js/sidebar-mini.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

    </body>

</html>