<head>
    <style type="text/css">
        #content{background-image:url("<?php echo get_template_directory_uri() . '/images/img404.jpg'?>");
            background-size:100% 100%;
        }
    </style>
</head>
<?php
get_header();
wp_nav_menu();
?>
<div id="content">
    <div id="error404">
        <h1>404</h1>
        <p>Página no encontrada, esa página fue eliminada o ya no existe, puede
        dirigirse a la página de <a href="<?php echo get_site_url() ?>">Inicio</a> si lo desea.</p>
    </div>
</div>
<?php
get_footer();
?>
