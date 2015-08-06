<!DOCTYPE HTML>
<html>
<head>
    <title>Trianon</title>
    <meta charset="utf-8">
    <meta name="author" content="Drawde"/>
    <meta name="description" content="trianon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
    <!-- Style -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.min.css"/>
    <!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>-->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style.css"/>
    <!-- Style <script src="{{asset('js/prefixfree.min.js')}}"></script>-->
    <script src="<?php bloginfo('template_url')?>/js/jquery-1.11.2.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/slider.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/script.js"></script>
    <?php wp_head() ?>
</head>
<body>


<main>
    <header>
        <div class="button-nav">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="network">
            <section>
                <p>SIGUENOS</p>
                <a href="" ><span class="icon-facebook"></span></a>
                <a href=""><span class="icon-twitter"></span></a>
                <a href=""><span class="icon-pinterest"></span></a>
                <a href=""><span class="icon-linkedin"></span></a>
                <a href=""><span class="icon-instagram-filled"></span></a>   
            </section>
           
            <form id="search">
                <input class="search-input" placeholder="BUSCAR"/>
                <p id="ico-search" class="icon-search"></p>
            </form>  
        </div>
       <div id="line"></div>
       
        <nav>
            <div class="nav-menu">
            <?php wp_nav_menu(
                    array(
                        'container'=> flase,
                        'items_wrap'=>'<ul id="menu-top">%3$s</ul>',
                        'theme_location'=>'menu'
                        ));
                ?>

            </div>

             <figure class="logo " ><img src="<?php bloginfo('template_url')?>/images/logo-trianon.png" alt="Trianon"/></figure>
        </nav>

<div class="nav-footer">
</div>

<div class="pop-up hidden">
    <div class="pop-up-menu">
        <div class="pop-up-nav-menu">
            <ul>
                <li><a class="pop-up-hover" href="">Mujer</a></li>
                <li><a href="">Hombre</a></li>
                <li><a href="">Tiendas</a></li>
                <li><a href="">Universo Trianon</a></li>
                <li><a href="">Ventas corporativas</a></li>
                <li><a href="">Distribuidores</a></li>
            </ul>

        </div>
        <figure>
            <img class="flecha_abajo" src="<?php bloginfo('template_url')?>/images/flecha_abajo.png">
        </figure>
        <div class="product">
            <section>
                <p>PRODUCTOS</p>
                <li>
                    <a href="">Tarjeteros</a>
                    <a href="">Bolsos</a>
                    <a href="">Portaipad</a>
                    <a href="">Portacelular</a>
                    <a href="">Portachequero</a>
                    <a href="">Portadocumentos</a>
                    <a href="">Portallavero</a>
                    <a href="">Llaveros</a>
                    <a href="">Todos</a>
                </li>
            </section>
            <section>
                <p>LINEAS RENACER</p>
                <li>
                    <a href="">Venecia</a>
                    <a href="">Florencia</a>
                    <a href="">Milán</a>
                    <a href="">Nápoles</a>
                    <a href="">Vaticano</a>
                    <a href="">Bologña</a>
                    <a href="">Verona</a>
                    <a href="">Turin</a>
                </li>
            </section>
            <div class="slider-menu">
                <div id="slider1">
                    <img class="img-slider1 " src="<?php bloginfo('template_url')?>/images/slider/slider.jpg" />
                    <img class="img-slider1 " src="<?php bloginfo('template_url')?>/images/slider/slider.jpg" />
                    <span class="back1"><</span>
                    <span class="next1">></span>
                </div>
            </div>
        </div>
        <div class="product1 hidden">
            <figure class="content-product">
                <img src="<?php bloginfo('template_url')?>/images/products/1.png">
            </figure>
            <div class="content-product-description">
                <p>Precio</p>
                <p>$ 45.000</p>
                <select>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                </select>
                <label>Cantidad</label>
                <div>
                    <figure class="product-color-figure">
                        <span class="product-color"></span>
                        <span class="product-color"></span>
                        <p class="product-color-text">Color</p>
                    </figure>
                </div>
                <div class="network">
                        <a href="" ><span class="icon-facebook"></span></a>
                        <a href=""><span class="icon-twitter"></span></a>
                        <a href=""><span class="icon-pinterest"></span></a>
                        <a href=""><span class="icon-linkedin"></span></a>
                        <a href=""><span class="icon-instagram-filled"></span></a>
                </div>
                <button>Compartir</button>
            </div>
        </div>

    </div>
</div>
</div>
       
    </header>