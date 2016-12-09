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
