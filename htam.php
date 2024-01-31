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
        <title> Analisis de Mercado </title>
        <link rel="stylesheet" href="pdcc.min.css">
<script charset="utf-8" src="pdcc.min.js"></script>
<script type="text/javascript">
PDCookieConsent.config({
"defaultLang" : "es",
"brand": {
"dev" : false,
"name": "PRUEBAS",
"url" : "https://localhost",
"websiteOwner" : "PRUEBAS"
},
"cookiePolicyLink": "http://localhost/cookies.php",
"hideModalIn": ["http://localhost/cookies.php"],
"styles": {
"primaryButton": {
"bgColor" : "#A1FFA1",
"txtColor": "#036900"
},
"secondaryButton": {
"bgColor" : "#EEEEEE",
"txtColor": "#333333"
}
}
});


</script>

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

        <!-- Flatpickr -->
        <link type="text/css"
              href="assets/css/vendor-flatpickr.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-flatpickr.rtl.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-flatpickr-airbnb.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-flatpickr-airbnb.rtl.css"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="assets/vendor/jqvmap/jqvmap.min.css"
              rel="stylesheet">
    <script>
      function mostrar(id)
      {
         var objeto=document.getElementById(id)
            objeto.style.display="block";
      }
      function ocultar(id)
      {
         var objeto=document.getElementById(id)
            objeto.style.display="none";
      }
   </script>
   <style>
      .oculto {display:none;}
   </style>

<style>
    table {
        border-collapse: collapse;
        width: 70%; /* Puedes ajustar el ancho según tus necesidades */
        margin: 20px auto; /* Agregado para espaciado alrededor de la tabla */
        text-align: center;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: justify;
        padding: 8px;
    }

    /* Estilo para la primera columna */
    td:nth-child(odd) {
        background-color: #f2f2f2;
    }

    /* Estilo para la segunda columna */
    td:nth-child(even) {
        background-color: #e6e6e6;
    }
</style>
<style>
    .sidebar-menu-item:last-child {
        margin-top: auto;
        margin-bottom: 0;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

    </head>

    <style>
        .tooltip-alpine {
          position: relative;
          display: inline-block;
          
        }
        .tooltip-alpine .tooltiptext-alpine {
          visibility: hidden;
          width: 250px;
          background-color: white;
          color: black;
          text-align: center;
          border: 1px solid #D5DDE6;
          border-radius: 6px;
          padding: 5px 0;
          /* Position the tooltip */
          position: absolute;
          z-index: 1;
          top: 125%; /* Posiciona el tooltip bajo del elemento */
          right: 0%;
        }
        .tooltip-alpine:hover .tooltiptext-alpine {
          visibility: visible;
        }
    </style>

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
                        <div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-end">
                                <div class="flex">
                                    <div>
                                        <a href="#" class="btn-link" style="color: #374D67;">Hidalgo</a>
                                        <span class="arrow">&gt;</span>
                                        <a href="#" class="btn-link" style="color: #3D45C0;">Tulancingo</a>
                                    </div>
                                    <h1 class="m-0">Análisis de mercado</h1>
                                    <div class="text py-2">Este apartado ofrece datos históricos y actuales sobre el mercado inmobiliario en Tulancingo, proporcionando una visión <br> completa de las transformaciones, tendencias y precios a lo largo del tiempo.</div>
                                    <a href="#" class="pdcc-open-modal">Panel Cookies</a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">PRECIO MERCADO </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Información relevante sobre los precios de mercado, relacionada con las propiedades existentes en el mercado.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span> $ 371,800.00 </span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span> $ 14,800,000.00 </span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span> $ 1,901,771.69 </span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span> $ 1,271,200.00 </span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">M2 TERRENO </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Muestra la variabilidad en los tamaños de M2 de terrenos en la muestra, desde los más pequeños hasta los más grandes, proporcionando una visión general de la distribución.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span>45</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span>4,904</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span>165</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span>120</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">M2 CONSTRUCCIÓN </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Aquí te presentamos la variedad en el tamaño de M2 de construcciones en nuestra muestra. Desde las más pequeñas hasta las más grandes.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span>50</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span>1,500</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span>162</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span>130</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">PRECIO M2 CONSTRUCIÓN </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Estos valores reflejan la variabilidad en los precios de construcción por metro cuadrado, desde muy bajos hasta muy altos.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span> $ 1,583</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span> $ 49,250 </span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span>  $ 12,080  </span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span>  $ 11,222 </span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">CASA PROMEDIO </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title=" Comparación de datos de propiedades, resaltando las estadísticas promedio.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Recámaras</strong>
                                                <div>
                                                    <span>3.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Baños</strong>
                                                <div>
                                                    <span>191.6</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Estacionamientos</strong>
                                                <div>
                                                    <span>1.5</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Terreno</strong>
                                                <div>
                                                    <span>164.5</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>M2 Construido</strong>
                                                <div>
                                                    <span>161.8</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio</strong>
                                                <div>
                                                    <span> $ 1,901,771.69  </span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio M2 Construido</strong>
                                                <div>
                                                    <span>  $ 12,079.84 </span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">CASA MEDIA </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Comparación de datos de propiedades, resaltando las estadísticas medias.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Recámaras</strong>
                                                <div>
                                                    <span>3.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Baños</strong>
                                                <div>
                                                    <span>2.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Estacionamientos</strong>
                                                <div>
                                                    <span>1.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Terreno</strong>
                                                <div>
                                                    <span>120.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>M2 Construido</strong>
                                                <div>
                                                    <span>130.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio</strong>
                                                <div>
                                                    <span>  $ 1,271,200.00  </span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio M2 Construido</strong>
                                                <div>
                                                    <span>  $ 11,222.22 </span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--<div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Geo Map</h4>
                                            
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div >
                                                    <img src="/assets/images/Puebla.png" alt="100%" style="width: 100%;">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > Pendiente. 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Interpretación
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mapa de calor</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido01') & ocultar('contenido02') " value="Áreas más Caras">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido02') & ocultar('contenido01') " value="Frecuencia de Propiedades">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div >
                                                    <iframe src="/dashboard/improved_price_properties_heatmap.html" width="800" height="400" frameborder="0" id="contenido01"></iframe>
                                                    <iframe src="/dashboard/properties_heatmap.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > Pendiente. 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Interpretación
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mapa de calor Código postales por precios</h4>
                                            <!-- 
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido01') & ocultar('contenido02') " value="Expensive areas">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido02') & ocultar('contenido01') " value="Property concentration">
                                            </div>
                                             -->
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div >
                                                    <iframe src="/dashboard/tulancingo_property_map_filtered.html" width="800" height="400" frameborder="0"></iframe>
                                                    <!--<iframe src="/puebla_property_concentration_heatmap_adjusted.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > Pendiente. 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Colonias en Tulancingo</h4>
                                            
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido011') & ocultar('contenido012') & ocultar('contenido013') " value="Colonias mas baratas">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido012') & ocultar('contenido011') & ocultar('contenido013') " value="Colonias mas caras">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido013') & ocultar('contenido011') & ocultar('contenido012') " value="Colonias predominantes">

                                            </div>
                                            
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div >
                                                    <iframe width="672" height="415" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1184135838&amp;format=interactive" id="contenido011"></iframe>
                                                    <iframe width="633" height="391" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1142123945&amp;format=interactive" id="contenido012" class="oculto"></iframe>     
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=529909825&amp;format=interactive" id="contenido013" class="oculto"></iframe>
                                                                                                         <!--<iframe src="/puebla_property_concentration_heatmap_adjusted.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > Pendiente. 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Clientes potenciales foráneos</h4>
                                            <div>
                                                <!--<input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido01') & ocultar('contenido02') " value="Códigos postales por precios "> -->
                                                <!--<input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido02') & ocultar('contenido01') " value="Mapa 2"> -->
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div >
                                                    <img src="/dashboard/assets/images/Tulancingo.png" alt="100%" style="width: 100%;">
                                                    <!-- <iframe src="/pachuca_property_map_formatted.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > Pendiente. 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title m-0">1.  Segmentos </h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">1.1. Distribución de segmentos </h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="775" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=562392669&amp;format=interactive"></iframe>                                        <div class="card-header bg-white d-flex align-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex">Interpretación: </h4>
                                            <div class="text"> Distribución de segmentos. Conoce la participación en el mercado inmobiliario por segmentos (S, A, B, C, D, E). 
                                                Cada sección representa el porcentaje o proporción en ese segmento específico en relación con el total.  </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.2 Distribución por M2 construcción por rango</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1') & ocultar('contenido2') " value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2') & ocultar('contenido1') " value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1520300445&amp;format=interactive" id="contenido1"></iframe>                                                    
                                                    <iframe width="769" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1594383636&amp;format=interactive" id="contenido2" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dm2cr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                            <ul>
                                                <li><strong>Segmento S</strong>: Posee una concentración de propiedades con un tamaño de construcción mayor a los <strong>300 m2</strong>.</li>
                                                <li><strong>Segmento A</strong>: Tiene una cantidad significativa de propiedades mayor a <strong>300 m2</strong>.</li>
                                                <li><strong>Segmento B</strong>: Destaca <strong>150-200m2</strong>.</li>
                                                <li><strong>Segmento C</strong>: Destaca las mayores a los <strong>150-200m2</strong>.</li>
                                                <li><strong>Segmento D</strong>: Posee los valores más cercanos a la media presupuestal y tiene una distribución equitativa.</li>
                                                <li><strong>Segmento E</strong>: Tiene una cantidad significativa de propiedades de <strong>0 a 100 m2</strong>.</li>

                                            </ul>
                                            </div>    
                                        </div>                                      
                                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.2.2 Precio promedio por M2 totales</h4>
                                            
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                <iframe width="786" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=726910018&amp;format=interactive"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-ppmt">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                            "La gráfica presenta los precios promedio por metro cuadrado en diferentes rangos, ofreciendo una perspectiva clara de la variación de costos en el mercado inmobiliario. Desde <strong>$11,692</strong> en el rango de <strong>0-100</strong> metros cuadrados hasta <strong>$8,294</strong> para propiedades que superan los <strong>300</strong> metros cuadrados, la visualización destaca la evolución de los precios a medida que aumenta la dimensión de las propiedades.                                            </div>    
                                        </div>                                      
                                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.3 Distribución M2 de terreno por rango</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido3') & ocultar('contenido4')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido4') & ocultar('contenido3')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=2135396679&amp;format=interactive" id="contenido3"></iframe>                                                    
                                                    <iframe width="741" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=218223772&amp;format=interactive" id="contenido4" class="oculto"></iframe>
                                                </div>
                                            </form>      
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dm2tr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div> 
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li><strong>Segmento S</strong>: Predominan los terrenos de <strong> 300 m2</strong>. Esto significa que en este segmento hay una gran cantidad de terrenos construidos de este tamaño.</li>
                                                    <li><strong>Segmento A </strong>: Tiene una alta concentración de terrenos en el rango mayor a los <strong>150-200 M2</strong>. Esto indica que los terrenos de tamaño amplio son comunes en este segmento.</li>
                                                    <li><strong>Segmento B, C y D</strong>: Muestran una distribución más acentuada entre los terrenos de tamaño de <strong>100-150 M2</strong>. Esto implica que este segmento es más adecuado para aquellos que buscan terrenos de tamaño medio.</li>
                                                    <li><strong>Segmento E</strong>: Tiene mayor terrenos disponibles en todos los rangos. Esto podría indicar que este segmento tiene una oferta mayor de terrenos.</li>
                                                </ul>  
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.4 Distribución recámaras </h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido5') & ocultar('contenido6')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido6') & ocultar('contenido5')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="678" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=613301908&amp;format=interactive" id="contenido5"></iframe>
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=62743843&amp;format=interactive" id="contenido6" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li>Las propiedades con <strong>3 recámaras</strong> son las más comunes en todos los <strong>segmentos</strong>, esto se puede observar en las barras altas, con una cantidad significativa para el <strong>segmento D</strong>.</li>
                                                    <li>Subsiguiente, las propiedades con <strong>2 recámaras</strong> también son populares en los <strong>segmentos</strong>.</li>
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.5 Distribución de baños</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido7') & ocultar('contenido8')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido8') & ocultar('contenido7')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="724" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1305950803&amp;format=interactive" id="contenido7"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1521522817&amp;format=interactive" id="contenido8" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-db">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li>En el <strong>segmento S</strong>, la mayoría de las propiedades tienen <strong>2 y 3 baños</strong>. Esto se puede observar en las barras altas en este segmento para las propiedades con estos números de baños.</li>
                                                    <li>Para el <strong>segmento A</strong>, hay una distribución predominante entre propiedades con <strong>2 baños</strong>, seguido de <strong>3 baños</strong>.</li>
                                                    <li>El <strong>segmento B</strong> muestra una predominancia de propiedades con <strong>3 baños</strong>. Esto se puede observar en la barra alta en este segmento para las propiedades, seguido de <strong>3 baños</strong>.</li>
                                                    <li>En los <strong>segmentos C y D</strong>, la mayoría de las propiedades es común encontrar entre <strong>3 y 2 baños</strong>.</li>
                                                    <li>El <strong>segmento E </strong>tiene mayor propiedades en cada categoría de número de baños. En las que predominan <strong>2 y 3 baños</strong>.</li>
                                    
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.6 Distribución de estacionamientos</h4>
                                            <div>    
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido9') & ocultar('contenido10')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido10')& ocultar('contenido9')" value="General">
                                            </div>    
                                        </div>                        
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="721" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=2092373050&amp;format=interactive" id="contenido9"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=169106109&amp;format=interactive" id="contenido10" class="oculto"></iframe>                                                
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-des">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li>Los <strong>segmentos S, A, B, C, D</strong> muestran una preferencia marcada por <strong>1 estacionamiento</strong>. Esto se puede observar en las barras altas en estos segmentos para las propiedades con estos números de estacionamientos.</li>
                                                    <li>El <strong>segmento D</strong> tiene una notable cantidad de propiedades con <strong>1 estacionamiento.</strong></li>
                                                    <li>El <strong>segmento E</strong> destaca con propiedades con <strong>1 estacionamiento</strong> seguido de 2. Esto se puede observar en las barras altas para dicho segmento.</strong></li>
                                                </ul> 
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title m-0">2. Tiempo estimado de venta  </h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">2.1 Tiempo estimado de venta  </h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido11') & ocultar('contenido12')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido12') & ocultar('contenido11')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="711" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1132789628&amp;format=interactive" id="contenido11"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1964696291&amp;format=interactive" id="contenido12" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-tev">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">  
                                                <ul>
                                                    <li><strong>Segmento S</strong>: Su distribución es sesgada hacia la derecha puesto que posee una alta concentración de propiedades con una <strong>antigüedad</strong> de oferta entre los <strong>7 meses</strong>. Esto indica que las viviendas en estos segmentos requieren más tiempo para encontrar comprador en comparación a otros segmentos. </li>
                                                    <li><strong>Segmento A </strong> y <strong>B</strong>: Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7 y 11 meses</strong>.</li>
                                                    <li><strong>Segmento C</strong> y <strong>D</strong>: Poseen una distribución sesgada hacia la izquierda con una concentración de disponibilidad que ronda los <strong>7 meses de antigüedad.</strong></li>
                                                    <li><strong>Segmento E </strong> y <strong>B</strong>: Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7 meses</strong>.</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"> 
                                    <h4 class="card-header__title m-0">3. Créditos</h4>      
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 3.1. Distribución de créditos por género </h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=535374306&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dcg">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li>Un <strong>mayor porcentaje de préstamos se otorga a hombres</strong> en el mercado inmobiliario. Los hombres tienen el <strong>56.6%</strong> de los créditos.</li>
                                                    <li>Las mujeres tienen el <strong>43.4%</strong> de los créditos. Esto indica que un <strong>menor porcentaje de préstamos se otorga a mujeres</strong>.</li>
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 3.2. Destino del crédito</h4> 
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="665" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=110865688&amp;format=interactive"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dcr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li>La mayoría de los créditos se destinan a <strong>viviendas nuevas</strong> (143) <strong> y viviendas usadas</strong> (290). Esto se puede observar en la barra más alta en el gráfico para viviendas nuevas.</li>
                                                    <li>Los créditos para <strong>mejoramientos</strong> son significativamente menores (69).</li>
                                                    <li><strong>Otros programas</strong> reciben la menor cantidad de créditos (35).</li>
                                                </ul>
                                                
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mercado salario por persona </h4>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="740" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1102893425&amp;format=interactive"></iframe>                                                
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-msps">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                Esta clasificación se basa en rangos de valores que representan diferentes niveles en el mercado salarial promedio por persona. Lo que nos permite entender y comunicar de manera efectiva dónde se encuentra un determinado elemento en el mercado.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mercado salario por pareja </h4>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="803" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=1959407729&amp;format=interactive"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mspr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                Esta clasificación se basa en rangos de valores que representan diferentes niveles en el mercado salarial promedio por pareja. Lo que nos permite entender y comunicar de manera efectiva dónde se encuentra un determinado elemento en el mercado.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> Volumen del mercado salarial de parejas</h4> 
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="1064" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQHuBNh281rfcjLd6FPg9LNU-EKpcVq3hiH75-rsMn3jYhazirg3MDrzvUnUU1Lom7B8is9sbuOBr_k/pubchart?oid=645108285&amp;format=interactive"></iframe>                                                                                                    
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-vmsp">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                Esta gráfica es una representación visual del volumen total de salarios por pareja anuales, segmentados por categorías. En otras palabras, nos muestra cómo se divide el dinero ganado neto entre diferentes tipos de trabajos y ocupaciones. De un vistazo, podemos comprender cómo se distribuye este volumen salarial en diferentes niveles de ingresos, lo que proporciona una visión completa de la estructura salarial en nuestro mercado laboral.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"> 
                                    <h4 class="card-header__title m-0">Profesiones</h4>      
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> Salario Individual</h4> 
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <table border="1">
                                                        <thead>
                                                            <tr>
                                                                <th>Profesiones Más Bajas</th>
                                                                <th>Profesiones Más Altas</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Columna 1 -->
                                                            <tr>
                                                                <td>Artesanos y Trabajadores en la Elaboración de Productos de Papel y Cartón</td>
                                                                <td>Coordinadores y Jefes de Área en Generación y Provisión de Energía Eléctrica y Agua</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Trabajadores en la Cría de Porcinos</td>
                                                                <td>Instructores y Capacitadores en Oficios y para el Trabajo</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bailarines y Coreógrafos</td>
                                                                <td>Supervisores de Técnicos Eléctricos, en Electrónica y de Equipos en Telecomunicaciones y Electromecánicos</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Trabajadores en la Elaboración de Sustancias y Compuestos Químicos</td>
                                                                <td>Jueces de Juzgado, Directores y Gerentes en Servicios Legales y Procuración de Justicia</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Trabajadores de Apoyo en la Industria de la Cerámica, Vidrio y Similares</td>
                                                                <td>Directores y Gerentes en Servicios Funerarios y otros Servicios</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Artesanos y Confeccionadores de Productos Textiles</td>
                                                                <td>Directores y Gerentes en Desarrollo Social y Económico</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Operadores de Máquinas para el Tratamiento de Aguas</td>
                                                                <td>Directores y Gerentes en Comunicación y Telecomunicaciones</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Escritores y Críticos Literarios</td>
                                                                <td>Directores y Productores Artísticos de Cine, Teatro y Afines</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ingenieros Mecánicos</td>
                                                                <td>Coordinadores y Jefes de Área en Producción Minera, Petrolera y Gas</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Yeseros, Escayolistas y otros Recubridores de Techos y Paredes</td>
                                                                <td>Coordinadores y Jefes de Área en Comunicación y Telecomunicaciones</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                                                                                 
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >Explora nuestra plataforma para conocer las profesiones que lideran los ingresos y aquellas que presentan retos económicos. Obtén información detallada sobre los salarios, tendencias y perspectivas profesionales, brindándote una visión clara de las carreras más y menos lucrativas en el mercado laboral actual.
                                                <br><br>
                                                
                                            </div>    
                                        </div>
                                       
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
                                     <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="htam.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Analisis de Mercado</span>
                                            
                                        </a>
                                    </li>
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="htim.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Investigacion de Mercado</span>
                                             
                                         </a>
                                     </li>
                                     
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="htpt.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Proyecciones y Tendencias</span>
                                             
                                         </a>
                                     </li>
                                     <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;"></i>
                                            <div >
                                                <ul class=" nav navbar-nav align-items-end">
                                                    <input type="button" 
                                                class=""
                                                data-toggle="modal"
                                                data-placement="bottom"
                                                data-target="#modal-large"
                                                value="Clasificación de mercado">
                                                </ul>
                                            </div>                                            
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
        <div id="modal-large"
             class="modal fade"
             tabindex="-1"
             role="dialog"
             aria-labelledby="modal-large-title"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center align-items-center"> 
                        <div class="text-align"
                            id="modal-large-title">Para comprender mejor el dinámico y amplio mercado inmobiliario, se desarrolla una clasificación por segmentos <strong>(S, A, B, C, D, E)</strong> basada en la oferta de precios de las viviendas. Dicha segmentación proporciona una visión rápida y clara que facilita el análisis de las opciones actuales disponibles, que van desde propiedades asequibles hasta lujosas residencias. <strong> ¡Descubre el rango de posibilidades que el mercado tiene para ofrecer!</strong> </div>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <!-- // END .modal-header -->
                    <div class="modal-body">
                        <h2 class="text-center"> Clasificación de mercado</h2> <br>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#6773df">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >E</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">E1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> <$500K  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">E2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $500k - $750K</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">E3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$750K - $1M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#67c2df">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >D</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">D1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $1M - $1.25M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">D2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $1.25M - $1.5M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">D3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$1.5M - $1.75M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#7cc668">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >C</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">C1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$1.75M - $2M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">C2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $2M - $2.25M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">C3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$2.25M - $2.5M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#ffb038">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >B</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-left px-2 py-3">B1</th>
                                            <td class="text-center" style="background-color: #FAFBFE;"> $2.5M - $2.75M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-left px-2 py-3">B2</th>
                                            <td class="text-center" style="background-color: #FAFBFE;"> $2.75M - $3M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-left px-2 py-3">B3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$3M - $3.25M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#ff4853">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >A</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th class="text-center px-2 py-3" scope="row">A1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $3.25M - $3.5M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">A2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $3.5M - $3.75M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">A3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$3.75M - $4M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#3d45c0">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >S</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th class="text-center px-2 py-3" scope="row">S1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $4M - $6M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">S2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $6M - $8M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">S3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$8M - $12M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> <!-- // END .modal -->
        <!-- App Settings FAB -->
        
                <!-- Interpretaciones -->
            <!-- 1.1 Distribución por M2 de construcción por rango -->
        <div id="modal-large-dm2cr"
             class="modal fade"
             tabindex="-1"
             role="dialog"
             aria-labelledby="modal-large-title"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center align-items-center"> 
                        <div class="text-align"
                            id="modal-large-title">Descripción</div>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <!-- // END .modal-header -->
                    <div class="modal-body text-left" style="color: black;">
                        Distribución por M2 de construcción por rango para las propiedades en diferentes segmentos (S, A, B, C, D, E). En función de la cantidad de metros cuadrados de construcción, observa cómo se agrupan las viviendas según su tamaño disponible permitiendo una visión rápida y clara de cómo se distribuyen y cuales son más predominantes en un cierto mercado inmobiliario.
                        <div>
                            <ul>
                                <li>Si una barra es alta, significa que hay muchas propiedades que tienen un tamaño de construcción dentro de ese rango específico.</li>
                                <li>Si una barra es baja, existen menos propiedades en ese rango en particular.</li>
                            </ul>
                        </div>
                                            </div>
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div>
        
        <!-- 1.1 Distribución por M2 de construcción por rango -->
        <div id="modal-large-ppmt"
             class="modal fade"
             tabindex="-1"
             role="dialog"
             aria-labelledby="modal-large-title"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center align-items-center"> 
                        <div class="text-align"
                            id="modal-large-title">Descripción</div>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <!-- // END .modal-header -->
                    <div class="modal-body text-left" style="color: black;">
                        Este análisis visual presenta la variación en costos por metro cuadrado en distintos segmentos inmobiliarios. Se observa un aumento progresivo de los valores a medida que se avanza de un rango a otro, proporcionando una representación concisa de las tendencias de precios en diferentes dimensiones de propiedades.                     
                    </div>
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
            </div>

        <!-- Distribución M2 de terreno por rango -->
            <div id="modal-large-dm2tr"
            class="modal fade"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modal-large-title"
            aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered modal-lg"
                role="document">
               <div class="modal-content">
                   <div class="modal-header justify-content-center align-items-center"> 
                       <div class="text-align"
                           id="modal-large-title">Descripción</div>
                       <button type="button"
                               class="close"
                               data-dismiss="modal"
                               aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div> <!-- // END .modal-header -->
                   <div class="modal-body text-left" style="color: black;">
                    Distribución M2 de terreno por rango para las propiedades en diferentes segmentos (S, A, B, C, D, E). 
                    En base a los metros cuadrados de terreno, visualiza la agrupación según su tamaño disponible permitiendo una visión rápida y 
                    clara de cómo se distribuyen los terrenos en términos de tamaño y cuales son más predominantes en un cierto mercado inmobiliario. 
                    <div>
                        <ul>
                            <li>Si una barra es alta, significa que hay muchos terrenos que tienen un tamaño dentro de ese rango particular.</li>
                            <li>Si una barra es baja, indica que existen menos terrenos en ese rango especifico.</li>
                        </ul>
                    </div>
                                      </div>
               </div> <!-- // END .modal-content -->
           </div> <!-- // END .modal-dialog -->
       </div> 
       <!-- App Settings FAB -->

       <!-- Distribución recámaras -->
       <div id="modal-large-dr"
       class="modal fade"
       tabindex="-1"
       role="dialog"
       aria-labelledby="modal-large-title"
       aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg"
           role="document">
          <div class="modal-content">
              <div class="modal-header justify-content-center align-items-center"> 
                  <div class="text-align"
                      id="modal-large-title">Descripción</div>
                  <button type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div> <!-- // END .modal-header -->
              <div class="modal-body text-left" style="color: black;">
                Distribución del número de recamaras para las propiedades en diferentes segmentos (S, A, B, C, D, E). Explora una visión concisa sobre los rangos de recamaras más comunes y menos comunes en las preferencias de un sector inmobiliario. 
                <br><br>
                <div>
                    <ul>
                        <li>Si una barra es alta, significa que hay muchas propiedades con ese número de recámaras dentro de ese rango en especifico/li>
                        <li>Si una barra es baja, indica que hay menos propiedades con ese número de recámaras.</li>
                    </ul>
                </div>
                
              </div>
          </div> <!-- // END .modal-content -->
      </div> <!-- // END .modal-dialog -->
  </div> 
  <!-- App Settings FAB -->

  <!-- Distribución de baños) -->
  <div id="modal-large-db"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Distribución del número de baños para las propiedades en diferentes segmentos (S, A, B, C, D, E). 
            Conoce un panorama claro sobre los rangos de baños predominantes y menos predominantes.
            <div>
                <ul>
                    <li>Si una barra es alta, significa que hay muchas propiedades con ese número de baños dentro de ese rango en particular.</li>
                    <li>Si una barra es baja, indica que hay menos propiedades con ese número de baños en específico.</li>
                </ul>
            </div>
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Distribución de estacionamientos -->
  <div id="modal-large-des"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Distribución del número de estacionamientos para las propiedades en diferentes segmentos (S, A, B, C, D, E). Observa como se distribuyen los números de lugares de estacionamiento para comprender las preferencias del mercado en cuanto a este aspecto. 
            <div>
                <ul>
                    <li>Si una barra es alta, significa que hay muchas propiedades con esa cantidad de estacionamientos</li>
                    <li>Si una barra es baja, indica que hay menos propiedades con esa cantidad de espacios para estacionamientos.</li>
                </ul>
         </div>
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!--  Tiempo estimado de venta -->
  <div id="modal-large-tev"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Distribución de las viviendas en función de la cantidad de meses que han estado en existencia para venta por segmentos (S, A, B, C, D, E). De acuerdo al tiempo de venta estimado se puede identificar que segmentos tienen una demanda más alta y tienden a venderse un poco más rápido y cuales requieren un poco más de tiempo para encontrar compradores.
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Distribución de créditos por género -->
  <div id="modal-large-dcg"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Distribución de créditos por género. Distingue la diferencia en la porporción de prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser útil para comprender las tendencias de financiamiento y su participación en terminos de acesso a créditos por grupo de género  
                                                <br><br>
                                                <div>
                                                    <ul>
                                                        <li>Si la sección de hombres es más grande, significa que un mayor porcentaje de préstamos se otorga a hombres</li>
                                                        <li>Si la sección de mujeres es más grande, indica que un mayor porcentaje de préstamos se otorga a mujeres</li>
                                                    </ul>
                                                </div>
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Destino del crédito -->
  <div id="modal-large-dcr"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Número de créditos por tipo de vivienda. Descubre como se distribuyen los créditos de acuerdo al tipo de vivienda: nueva, con mejoras, usada y otros programas. Cada sección del gráfico representa la proporción del número de créditos que se destina a un propósito específico en relación con el total de créditos otorgados para viviendas. Explora hacia donde se dirige el dinero prestado y comprende las preferencias y necesidades de las personas que invierten en este sector inmobiliario.
            <div>
                <ul>
                    <li>Si una sección es grande, significa que una parte significativa de los créditos se utiliza para dicho destino.</li>
                </ul>
            </div>
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Mercado salario por persona -->
  <div id="modal-large-msps"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Grafica mercado salario por persona. Dicha tabla se clasifica en rangos de valores que simbolizan diversos estratos en el mercado salarial promedio por persona. Esta disposición nos facilita la comprensión efectiva de la posición que ocupa un elemento específico dentro del mercado laboral.
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Mercado salario por pareja-->
  <div id="modal-large-mspr"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Tabla mercado salario por pareja. Esta tabla se clasifica en rangos de valores que simbolizan diversos estratos en el mercado salarial promedio por pareja. Esta disposición nos facilita la comprensión efectiva de la posición que ocupa un elemento específico dentro del mercado laboral.
                    </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Volumen del mercado salarial de parejas -->
  <div id="modal-large-vmsp"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Representación visual del volumen total de salarios por pareja anuales, segmentados por categorías. En esencia, ilustra la distribución del ingreso neto ganado entre diversas profesiones y ocupaciones. A través de un análisis visual, somos capaces de discernir cómo se distribuye el volumen salarial en distintos estratos de ingresos. Esto nos brinda una perspectiva integral de la estructura salarial en nuestro mercado laboral.
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
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

        <!-- Flatpickr -->
        <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="assets/js/flatpickr.js"></script>

        <!-- Global Settings -->
        <script src="assets/js/settings.js"></script>

        <!-- Moment.js -->
        <script src="assets/vendor/moment.min.js"></script>
        <script src="assets/vendor/moment-range.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/Chart.min.js"></script>

        <!-- App Charts JS -->
        <script src="assets/js/charts.js"></script>
        <script src="assets/js/chartjs-rounded-bar.js"></script>

        <!-- Chart Samples -->
        <script src="assets/js/page.dashboard.js"></script>
        <script src="assets/js/progress-charts.js"></script>

        <!-- Vector Maps -->
        <script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/js/vector-maps.js"></script>

    </body>

</html>