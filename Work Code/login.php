<!-- Mirar sobre todo el formulario y los js del final que sirven para hacer desaparecer y aparecer el menú desplegable -->

<?php
require_once("funciones.php");

@session_start();
    if (isset($_REQUEST["lang"])) {
        $lang = $_REQUEST["lang"];
    } else {
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        } else {
            $lang = 'es';
        }
    }
    $_SESSION['lang'] = $lang;
    //$translate = ObtenerTextosTraduccion($lang);

            
        


?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php
            include "conexion.php";
        ?>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <!-- This site is optimized with the Yoast SEO plugin v20.2.1 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>Inicio Sesión - Recicam</title>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap" media="print" onload="this.media='all'"/>
        <noscript>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap"/>
        </noscript>
        <link rel="canonical" href="https://tryobsaambiental.com/quienes-somos/"/>
        <meta property="og:locale" content="es_ES"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="Quiénes somos - Tryobsa Ambiental"/>
        <meta property="og:description" content="Tryobsa en números La cercanía a la capital hace que el residuo se desplace mínimamente tanto si se retira con los camiones de nuestra flota, como si se transporta por otras empresas del sector. Garantizamos la trazabilidad de los residuos y su tratamiento por un gestor autorizado mediante la expedición certificados y demás documentación. Usted [&hellip;]"/>
        <meta property="og:url" content="https://tryobsaambiental.com/quienes-somos/"/>
        <meta property="og:site_name" content="Tryobsa Ambiental"/>
        <meta property="article:modified_time" content="2023-02-16T05:46:57+00:00"/>
        <meta property="og:image" content="https://tryobsaambiental.com/wp-content/uploads/2023/01/IMG-20220402-WA0007-576x1024.jpg"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:label1" content="Tiempo de lectura"/>
        <meta name="twitter:data1" content="5 minutos"/>
        <script type="application/ld+json" class="yoast-schema-graph">
            {"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://tryobsaambiental.com/quienes-somos/","url":"https://tryobsaambiental.com/quienes-somos/","name":"Quiénes somos - Tryobsa Ambiental","isPartOf":{"@id":"https://tryobsaambiental.com/#website"},"primaryImageOfPage":{"@id":"https://tryobsaambiental.com/quienes-somos/#primaryimage"},"image":{"@id":"https://tryobsaambiental.com/quienes-somos/#primaryimage"},"thumbnailUrl":"https://tryobsaambiental.com/wp-content/uploads/2023/01/IMG-20220402-WA0007-576x1024.jpg","datePublished":"2023-01-24T09:24:50+00:00","dateModified":"2023-02-16T05:46:57+00:00","breadcrumb":{"@id":"https://tryobsaambiental.com/quienes-somos/#breadcrumb"},"inLanguage":"es","potentialAction":[{"@type":"ReadAction","target":["https://tryobsaambiental.com/quienes-somos/"]}]},{"@type":"ImageObject","inLanguage":"es","@id":"https://tryobsaambiental.com/quienes-somos/#primaryimage","url":"https://tryobsaambiental.com/wp-content/uploads/2023/01/IMG-20220402-WA0007.jpg","contentUrl":"https://tryobsaambiental.com/wp-content/uploads/2023/01/IMG-20220402-WA0007.jpg","width":900,"height":1600},{"@type":"BreadcrumbList","@id":"https://tryobsaambiental.com/quienes-somos/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Portada","item":"https://tryobsaambiental.com/"},{"@type":"ListItem","position":2,"name":"Quiénes somos"}]},{"@type":"WebSite","@id":"https://tryobsaambiental.com/#website","url":"https://tryobsaambiental.com/","name":"Tryobsa Ambiental","description":"Gestor de residuos RCD","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://tryobsaambiental.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"es"}]}
        </script>
        <!-- / Yoast SEO plugin. -->
        <link href='https://fonts.gstatic.com' crossorigin rel='preconnect'/>
        <link rel="alternate" type="application/rss+xml" title="Tryobsa Ambiental &raquo; Feed" href="https://tryobsaambiental.com/feed/"/>
        <link rel="alternate" type="application/rss+xml" title="Tryobsa Ambiental &raquo; Feed de los comentarios" href="https://tryobsaambiental.com/comments/feed/"/>

        <!-- Estilos Jose Luis -->
        <link rel="icon" type="image/x-icon" href="imagenes/logo_camacho.jpeg.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/78556e7c4a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilos.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <style>
            .hh{
                border: 1px solid red;
            }
            A:link{
                text-decoration: none;
                color: rgb(44, 43, 43);
            }
            A:visited{
                text-decoration: none;
                color: rgb(44, 43, 43);
            }
            A:active{
                text-decoration: none;
                color: rgb(44, 43, 43);
            }
        </style>

        <!--Script login Gustavo-->
        <link rel="stylesheet" type="text/css" href="libs/jquery/jqueryui/css/south-street/jquery-ui-1.8.24.custom.css" />
        <link rel="stylesheet" type="text/css" href="libs/flexigrid/css/flexigrid.css"> 
        <link rel="stylesheet" type="text/css" href="libs/chosen/chosen/chosen.css" />
        <script type="text/javascript" src="libs/jquery/jqueryui/js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="libs/jquery/jqueryui/js/jquery-ui-1.8.24.custom.min.js"></script>
        <script type="text/javascript" src="libs/flexigrid/js/flexigrid.js"></script>
        <script type="text/javascript" src="scripts/util.js"></script>
        <script type="text/javascript" src="libs/jquery/jquery.maskedinput.js"></script>

        <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min.css?ver=6.1.1' media='all'/>
                
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <script src='https://tryobsaambiental.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
        <script src='https://tryobsaambiental.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
        <script id='tiered-pricing-table-front-js-js-extra'>
            var tieredPricingGlobalData = {
                "loadVariationTieredPricingNonce": "09a5b2a3b3",
                "isPremium": "no",
                "currencyOptions": {
                    "currency_symbol": "&euro;",
                    "decimal_separator": ",",
                    "thousand_separator": ".",
                    "decimals": 2,
                    "price_format": "%2$s&nbsp;%1$s"
                },
                "supportedVariableProductTypes": ["variable", "variable-subscription"],
                "supportedSimpleProductTypes": ["simple", "subscription", "variation"]
            };
        </script>
        <script src='https://tryobsaambiental.com/wp-content/plugins/tier-pricing-table/assets/frontend/product-tiered-pricing-table.min.js?ver=3.3.2' id='tiered-pricing-table-front-js-js'></script>
        <script id='ecs_ajax_load-js-extra'>
            var ecs_ajax_params = {
                "ajaxurl": "https:\/\/tryobsaambiental.com\/wp-admin\/admin-ajax.php",
                "posts": "{\"page\":0,\"pagename\":\"quienes-somos\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"quienes-somos\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"
            };
        </script>
        <script src='https://tryobsaambiental.com/wp-content/plugins/ele-custom-skin/assets/js/ecs_ajax_pagination.js?ver=3.1.7' id='ecs_ajax_load-js'></script>
        <script src='https://tryobsaambiental.com/wp-content/plugins/ele-custom-skin/assets/js/ecs.js?ver=3.1.7' id='ecs-script-js'></script>
        <link rel="https://api.w.org/" href="https://tryobsaambiental.com/wp-json/"/>
        <link rel="alternate" type="application/json" href="https://tryobsaambiental.com/wp-json/wp/v2/pages/566"/>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://tryobsaambiental.com/xmlrpc.php?rsd"/>
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://tryobsaambiental.com/wp-includes/wlwmanifest.xml"/>
        <meta name="generator" content="WordPress 6.1.1"/>
        <meta name="generator" content="WooCommerce 7.4.1"/>
        <link rel='shortlink' href='https://tryobsaambiental.com/?p=566'/>
        <link rel="alternate" type="application/json+oembed" href="https://tryobsaambiental.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftryobsaambiental.com%2Fquienes-somos%2F"/>
        <link rel="alternate" type="text/xml+oembed" href="https://tryobsaambiental.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftryobsaambiental.com%2Fquienes-somos%2F&#038;format=xml"/>

        <?php
            $mensaje = '';
            if (isset($_REQUEST['accion'])) {
                $accion = $_REQUEST['accion'];
                if ($accion == 'desconectar') {
                    $mensaje = 'desconectado';
                }
                if ($accion == 'error') {
                    $mensaje = 'error_autenticacion';
                    $redirect = "";
                }
            }

            $redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'index.php';
            $redirect_index = (isset($_REQUEST['redirect_index'])) ? $_REQUEST['redirect_index'] : "";

            print($redirect_index);
        ?>


    <script>
        
        $(document).ready(function() {
            $("body").css("display", "none");
         
            $("body").fadeIn(500);
         
            $("a.transition").click(function(event){
                event.preventDefault();
                linkLocation = this.href;
                $("body").fadeOut(500, redirectPage);
            });
         
            function redirectPage() {
                window.location = linkLocation;
            }
        });


        function ValidarFormulario(f) {
            var mensaje = "";
            if (f.usuario_id.value == '') {
                mensaje = mensaje + "<br />El nombre de usuario es obligatorio";
            }
            if (f.clave.value == '') {
                mensaje = mensaje + "<br />La clave es obligatoria";
            }
            if (mensaje == "") {
                return true;
            } else {
                MensajeInformacion("Información", mensaje, '');
                return false;
            }
        }
        function DoAction(f, _accion) {
            //alert(f.redirect.value);
            if (ValidarFormulario(f)) {
                f.action.value = _accion;
                //alert(f.action.value);
                EjecutarAccion("login_acciones.php", "frm", "Informacion", f.redirect.value, false);
            }
        }

        function abrirPopComCod() {
            var url = "comprobar_cod.php";
            open(url,'','top=300,left=300,width=600,height=200') ;
        }


        function recPass() {
            var url = "rec_pss.php";
            open(url,'','top=300,left=300,width=600,height=400') ;
        }


        function SubmitOnEnter(f, _accion, e, control) {
            evt = e || window.event; // compliant with ie6
            if (evt.keyCode == 13) {
                if (control.name == 'usuario_id') {
                    document.getElementById('clave').focus()
                } else {
                    var boton = document.getElementById('enviar');
                    boton.click();
                }
            }
        }
    </script>
    <body>
        <a class="skip-link screen-reader-text" href="#content">Ir al contenido</a>
    
        <div class="container-fluid">
            <!-- Header -->
            <header class="d-flex flex-wrap justify-content-center py-3">
                <div class="row container-fluid">
                <!-- Logo -->
                <div class="col-lg-2 mb-lg-0 mb-3 d-flex align-items-center justify-content-between">
                    <a href="#" class="mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <img src="imagenes/logo_camacho_sinfondo.png" class="logoRecicam" alt="Logo Recicam">
                    </a>
                    <div class="dropdown aparecerElementos">
                        <button class="btn fondoMenu botonTransition2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item colorTransitionMenu" href="#">Inicio</a></li>
                          <li><a class="dropdown-item colorTransitionMenu" href="#">Quiénes somos</a></li>
                          <li><a class="dropdown-item colorTransitionMenu" href="#">Normativa</a></li>
                          <li><a class="dropdown-item colorTransitionMenu" href="login.php">Área de clientes</a></li>
                          <li><a class="dropdown-item colorTransitionMenu" href="#">Contacto</a></li>
                        </ul>
                      </div>
                </div>
    
                <div class="col-lg-1">
    
                </div>
    
                <!-- Contacto -->
                <div class="col-lg-3 d-flex justify-content-center align-items-center mb-lg-0 mb-3 desaparecerElementos">
                        <a href="https://www.google.com/maps/dir//recicam/@40.3882785,-3.5186533,13.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd42394e3c72584d:0x93a717e67829a4af!2m2!1d-3.4794337!2d40.3849273" class="text-decoration-none" target="_blank"><div class="col-auto d-flex iconoContacto align-items-center bordeIconoContacto p-3 me-2"><i class="fa-solid fa-house tamañoContacto"></i></div></a>
                        <a href="https://www.google.com/maps/dir//recicam/@40.3882785,-3.5186533,13.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd42394e3c72584d:0x93a717e67829a4af!2m2!1d-3.4794337!2d40.3849273" class="text-decoration-none" target="_blank"><div class="col-auto d-flex-column align-content-center letraContacto"><span class="letraContacto1">C/Tajo Nº20</span><br><span class="letraContacto2">Mejorada del Campo, Madrid</span></div></a>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center mb-lg-0 mb-3 desaparecerElementos">
                        <a href="mailto:hola@recicam.com" class="text-decoration-none"><div class="col-auto d-flex iconoContacto align-items-center bordeIconoContacto p-3 me-2"><i class="fa-solid fa-envelope tamañoContacto"></i></div></a>
                        <a href="mailto:hola@recicam.com" class="text-decoration-none"><div class="col-auto d-flex-column align-content-center"><span class="letraContacto1">Contacto</span><br><span class="letraContacto2">hola@recicam.com</span></div></a>
                </div>
                <!-- Redes sociales y contactos -->
    
                <div class="col-lg-3 d-flex justify-content-center align-items-center desaparecerElementos">
                    <ul class="nav nav-pills d-flex justify-content-center align-items-center">
                        <li class="nav-item fondoTwitter me-1 tamañoRedes d-flex justify-content-center align-items-center"><a href="https://twitter.com/recicam_sl" class="nav-link" aria-current="page" target="_blank"><i class="fa-brands fa-twitter fadein iconoRedes"></i></a></li>
                        <li class="nav-item fondoFacebook me-1 tamañoRedes d-flex justify-content-center align-items-center"><a href="https://www.facebook.com/recicamsl" class="nav-link" target="_blank"><i class="fa-brands fa-facebook iconoRedes"></i></a></li>
                        <li class="nav-item fondoInstagram me-1 tamañoRedes d-flex justify-content-center align-items-center"><a href="#" class="nav-link" target="_blank"><i class="fa-brands fa-instagram iconoRedes"></i></a></li>
                        <li class="nav-item fondoLinkedin me-1 tamañoRedes d-flex justify-content-center align-items-center"><a href="#" class="nav-link" target="_blank"><i class="fa-brands fa-linkedin iconoRedes"></i></a></li>
                        <li class="nav-item fondoYoutube tamañoRedes d-flex justify-content-center align-items-center"><a href="https://www.youtube.com/@reciclajescamacho.sl." class="nav-link" target="_blank"><i class="fa-brands fa-youtube iconoRedes"></i></a></li>
                    </ul>
                </div>
            </div>
            </header>
        </div>
        <!-- Menú -->
        <div class="fondoMenu container-fluid desaparecerElementos">
            <div class="row">
                <div class="col-2">
        
                </div>
                <div class="col-8">
                    <ul class="nav nav-pills d-flex justify-content-center align-items-center fuenteMenu p-2">
                        <li class="nav-item me-2"><a href="#" class="colorTransition nav-link">INICIO</a></li>
                        <li class="nav-item me-2"><a href="#" class="colorTransition nav-link">QUIÉNES SOMOS</a></li>
                        <li class="nav-item me-2"><a href="#" class="colorTransition nav-link">NORMATIVA</a></li>
                        <li class="nav-item me-2"><a href="login.php" class="colorTransition nav-link">ÁREA DE CLIENTES</a></li>
                        <li class="nav-item"><a href="#" class="colorTransition nav-link">CONTACTO</a></li>
                    </ul>
                </div>
                <div class="col-2">
            
                </div>
            </div>
        </div>         
    <!-- Formulario Login -->
    <div class="container-fluid fondoLogin pt-5">
        <div class="container-fluid d-flex justify-content-center mb-5 login">
            <h2>ÁREA DE CLIENTES</h2>
        </div>
        <div class="container-fluid d-flex justify-content-center mb-3 login">
            <h1 class="tamañoTitulo">Acceso de usuarios autorizados</h1>
        </div>
        <div class="container-fluid d-flex justify-content-center login">
            <div class="container tamañoLogin fondoMenu m-5 rounded-3 pt-3">
                <!-- Comienza el Formulario -->
                <form action="#" method="post" id="frm">
                    <div class="input-group mt-4 tamañoDivLogin container-fluid">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario_id" id="usuario_id" required="required" onkeydown="SubmitOnEnter(frm, 'login', event, this)">
                    </div>
                    <div class="input-group my-3 container-fluid tamañoDivLogin">
                        <div class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" name="clave" id="clave" onkeydown="SubmitOnEnter(frm, 'login', event, this)">
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit"  class="btn colorImportante2 botonTransition m-3" name="enviar" value="Enviar" id="enviar" >
                    </div>
                    <div class='d-flex justify-content-center'><span class='text-success' id="mensajeBien"></span></div>
                    <div class='d-flex justify-content-center'><span class='text-danger' id="mensajeMal"></span></div>
                    <br>
                </form>
                <?php

                    if (isset($_REQUEST['enviar']))
                    {
                        $usuario = $_REQUEST['usuario_id'];
                        $pass = ($_REQUEST['clave']);
                        $pass = GenerarClaveHash($pass);
                        $consulta = $conexion->query("SELECT * FROM usuarios WHERE usuario_id='$usuario' and clave='$pass'");
                        if ($consulta) 
                        {
                        
                            $informacion = $consulta->fetch_object();
                            if ($informacion)
                            {
                                session_start();
                                $_SESSION['usuario_id'] = $usuario;
                                $_SESSION['rol_id'] = $informacion->rol_id;
                                registrarLogin($usuario, 1, '');
                                
                                ?>
                                
                                <script>
                                    window.location.href = "index.php";
                                    document.getElementById("mensajeBien").innerHTML = "USUARIO VÁLIDO"</script>
                                <script>document.getElementById("mensajeMal").innerHTML = ""</script>
                                <?php
                            }
                            else
                            {
                                ?>
                                <script>document.getElementById("mensajeMal").innerHTML = "Los datos son erróneos"</script>
                                <script>document.getElementById("mensajeBien").innerHTML = ""</script>
                                <?php
                            }

                        }
                        else
                        {
                            // Muestro el mensaje de error
                            ?>
                            <script>document.getElementById("mensajeMal").innerHTML = "Los datos son erróneos"</script>
                            <script>document.getElementById("mensajeBien").innerHTML = ""</script>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                        <script>document.getElementById("mensajeMal").innerHTML = ""</script>
                        <script>document.getElementById("mensajeBien").innerHTML = ""</script>
                        <?php
                    }

                ?>
                <!-- Olvidar contraseña y Cliente nuevo -->
                <form id="Recuperar" action="rec_pss.php" method="post" name="Recuperar" ng-hide="ocultar">
                    <div class="row mb-4">
                        <input name="usuario4" type="hidden" id="usuario4"/></td>
                        <div class="col-lg-12 d-flex justify-content-center mb-2 mb-sm-0 tamañoPreguntas">
                            <a href="javascript:abrirPopComCod()" class="colorTransition text-decoration-none" style="text-align: center;">Si dispone de un certificado y quiere comprobar su veracidad introduzca su código aquí...</a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6 d-flex justify-content-center mb-2 mb-sm-0 tamañoPreguntas">
                            <a href="javascript:recPass()" class="colorTransition">¿Has olvidado la contraseña?</a>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center tamañoPreguntas">
                            <a href="https://tryobsaambiental.com/old/alta-cliente/" class="colorTransition">¿Quiéres ser cliente nuestro?</a>
                        </div>
                    </div>
                    <input type="hidden" name="pagina" value="login.php" />
                    <input type="hidden" name="accion" value="login" />
                    <input type="hidden" name="redirect_index" value="<?php print $redirect_index; ?>" />
                    <input type="hidden" name="redirect" value="<?php print $redirect; ?>" />   
                </form>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="container-fluid fondoMenu">
        <footer class="py-3">
            <ul class="nav justify-content-center">
            <li class="nav-item me-3"><a href="#" class="nav-link px-2 text-muted tamañoTextoFooter">Políticas de cookies</a></li>
            <li class="nav-item me-3"><a href="#" class="nav-link px-2 text-muted tamañoTextoFooter">Aviso legal</a></li>
            <li class="nav-item me-3"><a href="#" class="nav-link px-2 text-muted tamañoTextoFooter">Política de privacidad</a></li>
            </ul>
            <hr class="m-3">
            <p class="text-center text-muted tamañoTextoFooter">&copy; 2023 Reciclajes Camacho, S.L.</p>
            <p class="text-center text-muted tamañoTextoFooter">Todos los derechos reservados</p>
        </footer>
    </div>
    
    <script>
        const element1 = document.querySelector(".aparecerElementos");

        function mostrarElemento() {
        if (window.innerWidth < 992) {
            element1.classList.remove("visually-hidden");
        } else {
            element1.classList.add("visually-hidden");
        }
        }

        // Ejecutar la función cuando se cargue la página y cada vez que se redimensione la ventana
        window.addEventListener("load", mostrarElemento);
        window.addEventListener("resize", mostrarElemento);

        // Seleccionar los elementos HTML que se quieren afectar
        const elementosAfectados = document.querySelectorAll('.desaparecerElementos');

        // Función para comprobar el ancho de la pantalla y agregar o eliminar la clase según sea necesario
        function desaparecerElementos() {
        if (window.innerWidth > 991) {
            elementosAfectados.forEach(elemento => {
            elemento.classList.remove('visually-hidden');
            });
        } else {
            elementosAfectados.forEach(elemento => {
            elemento.classList.add('visually-hidden');
            });
        }
        }

        // Ejecutar la función cuando se carga la página y cuando se redimensiona la pantalla
        window.addEventListener('load', desaparecerElementos);
        window.addEventListener('resize', desaparecerElementos);

        // Seleccionar los elementos HTML que se quieren afectar
        const elementosAfectados2 = document.querySelectorAll('.desaparecerElementos2');

        // Función para comprobar el ancho de la pantalla y agregar o eliminar la clase según sea necesario
        function desaparecerElementos2() {
        if (window.innerWidth > 991) {
            elementosAfectados.forEach(elemento => {
            elemento.classList.remove('visually-hidden');
            });
        } else {
            elementosAfectados.forEach(elemento => {
            elemento.classList.add('visually-hidden');
            });
        }
        }

        // Ejecutar la función cuando se carga la página y cuando se redimensiona la pantalla
        window.addEventListener('load', desaparecerElementos2);
        window.addEventListener('resize', desaparecerElementos2);

    </script>
    
</body>
</html>